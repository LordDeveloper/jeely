<?php

namespace Jeely;

use Closure;
use GuzzleHttp\Promise\Create;
use GuzzleHttp\Promise\PromiseInterface;
use Jeely\Async\Await;
use Jeely\Api\Types\Error;
use Jeely\Api\Update;
use Jeely\Update\UpdateDispatcher;
use Throwable;

/**
 * Async-first update receiver for webhook and long polling.
 *
 * Public wait* methods remain blocking wrappers around Promise-based runners.
 */
class Updater
{
    private Telegram $telegram;

    private UpdateDispatcher $dispatcher;

    private bool $running = false;

    private int $processed = 0;

    private int $concurrency = 8;

    /** @var callable(Throwable, Update|null):void|null */
    private $errorHandler = null;

    public function __construct(string $token, array $browserConfig = [])
    {
        $this->telegram = new Telegram($token, $browserConfig);
        $this->dispatcher = new UpdateDispatcher($this->telegram, $this->concurrency);
    }

    public function telegram(): Telegram
    {
        return $this->telegram;
    }

    public function concurrency(int $concurrency): self
    {
        $this->concurrency = max(1, $concurrency);
        $this->dispatcher->concurrency($this->concurrency);

        return $this;
    }

    /**
     * @param callable(Throwable, Update|null):void $handler
     */
    public function onError(callable $handler): self
    {
        $this->errorHandler = $handler;
        $this->dispatcher->onError($handler);

        return $this;
    }

    public function stop(): void
    {
        $this->running = false;
    }

    /**
     * Internal stop hook used by tests / controlled runners.
     */
    protected function shouldStopAfterProcessed(int $processedUpdates): bool
    {
        return false;
    }

    /**
     * Blocking webhook handler (waits for async callback completion).
     */
    public function waitWebhook(Closure $callback): void
    {
        $this->handleWebhookAsync($callback)->wait();
    }

    /**
     * Async webhook handler. Returns a promise that settles when the callback finishes.
     */
    public function handleWebhookAsync(Closure $callback, ?string $body = null): PromiseInterface
    {
        $body ??= $this->readWebhookBody();
        $payload = json_decode($body ?: '', true);

        if (! is_array($payload)) {
            return Create::promiseFor(null);
        }

        $update = (new Update($payload))->withTelegram($this->telegram);

        return $this->dispatcher
            ->concurrency($this->concurrency)
            ->dispatchOne($callback->bindTo($this->telegram) ?? $callback, $update)
            ->then(function ($result) {
                gc_collect_cycles();

                return $result;
            });
    }

    /**
     * Blocking long-polling loop.
     */
    public function waitPolling(Closure $callback, array $options = []): void
    {
        $this->runPollingAsync($callback, $options)->wait();
    }

    /**
     * Async long-polling loop driven by promises (getUpdates + concurrent handlers).
     */
    public function runPollingAsync(Closure $callback, array $options = []): PromiseInterface
    {
        $this->running = true;
        $this->processed = 0;

        $options = array_merge([
            'timeout' => 30,
            'allowed_updates' => [],
        ], $options);

        $callback = $callback->bindTo($this->telegram) ?? $callback;
        $this->dispatcher->concurrency($this->concurrency);
        if ($this->errorHandler) {
            $this->dispatcher->onError($this->errorHandler);
        }

        return $this->callTelegramAsync('deleteWebhook', [])->then(
            function () use ($callback, $options) {
                return $this->pollCycle($callback, $options);
            },
            function () use ($callback, $options) {
                // Even if deleteWebhook fails, continue polling.
                return $this->pollCycle($callback, $options);
            }
        );
    }

    private function pollCycle(Closure $callback, array $options): PromiseInterface
    {
        if (! $this->running || $this->shouldStopAfterProcessed($this->processed)) {
            $this->running = false;

            return Create::promiseFor(null);
        }

        return $this->callTelegramAsync('getUpdates', $options)->then(
            function ($updates) use ($callback, $options) {
                if ($updates instanceof Error) {
                    return $this->handlePollingError($updates, $callback, $options);
                }

                if (! is_array($updates) || $updates === []) {
                    return $this->pollCycle($callback, $options);
                }

                $lastId = null;
                foreach ($updates as $update) {
                    if (isset($update->update_id)) {
                        $lastId = (int) $update->update_id;
                    }
                }

                if ($lastId !== null) {
                    $options['offset'] = $lastId + 1;
                }

                $batchCount = count($updates);

                return $this->dispatcher->dispatchMany($updates, $callback)->then(
                    function () use ($callback, $options, $batchCount) {
                        $this->processed += $batchCount;
                        gc_collect_cycles();

                        return $this->pollCycle($callback, $options);
                    }
                );
            }
        );
    }

    private function handlePollingError(Error $error, Closure $callback, array $options): PromiseInterface
    {
        $code = (int) $error->getErrorCode();

        // 409 Conflict: another getUpdates instance is running — retry.
        if ($code === 409) {
            return $this->pollCycle($callback, $options);
        }

        // 429 Too Many Requests: honor retry_after when present.
        if ($code === 429) {
            $retryAfter = (int) ($error->parameters?->retry_after ?? 1);

            return $this->delay($retryAfter)->then(
                fn () => $this->pollCycle($callback, $options)
            );
        }

        throw new \RuntimeException((string) $error->getDescription(), $code);
    }

    /**
     * Call a Telegram method as a promise regardless of sync/async client mode.
     */
    private function callTelegramAsync(string $method, array $params): PromiseInterface
    {
        $params['async'] = true;
        $result = $this->telegram->{$method}($params);

        return Await::promise($result);
    }

    private function delay(int $seconds): PromiseInterface
    {
        $seconds = max(0, $seconds);

        return Create::promiseFor(null)->then(function () use ($seconds) {
            if ($seconds > 0) {
                usleep($seconds * 1_000_000);
            }

            return null;
        });
    }

    private function readWebhookBody(): string
    {
        $requestClass = 'Illuminate\\Support\\Facades\\Request';

        if (class_exists($requestClass)) {
            return (string) forward_static_call([$requestClass, 'getContent']);
        }

        return (string) file_get_contents('php://input');
    }
}
