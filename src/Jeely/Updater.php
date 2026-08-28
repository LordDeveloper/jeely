<?php

namespace Jeely;

use Closure;
use GuzzleHttp\Promise\Create;
use GuzzleHttp\Promise\PromiseInterface;
use Jeely\Async\Await;
use Jeely\Async\Loop;
use Jeely\Async\Timer;
use Jeely\Api\Types\Error;
use Jeely\Api\Update;
use Jeely\Log\LoggerInterface;
use Jeely\Log\NullLogger;
use Jeely\Server\HttpServer;
use Jeely\Update\UpdateDispatcher;
use Throwable;

/**
 * Async-first update receiver for webhook, built-in HTTP server, and long polling.
 */
class Updater
{
    private Telegram $telegram;

    private UpdateDispatcher $dispatcher;

    private LoggerInterface $logger;

    private bool $running = false;

    private int $processed = 0;

    private int $concurrency = 8;

    private int $inflight = 0;

    /** @var callable(Throwable, Update|null):void|null */
    private $errorHandler = null;

    public function __construct(string $token, array $browserConfig = [], ?LoggerInterface $logger = null)
    {
        $this->telegram = new Telegram($token, $browserConfig);
        $this->dispatcher = new UpdateDispatcher($this->telegram, $this->concurrency);
        $this->logger = $logger ?? new NullLogger();
    }

    public function telegram(): Telegram
    {
        return $this->telegram;
    }

    public function logger(): LoggerInterface
    {
        return $this->logger;
    }

    public function setLogger(LoggerInterface $logger): self
    {
        $this->logger = $logger;

        return $this;
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
        Loop::enable($this->telegram->getBrowser());
        $this->telegram->async(true);

        Loop::await($this->handleWebhookAsync($callback));
    }

    /**
     * Async webhook handler. Returns a promise that settles when the callback finishes.
     */
    public function handleWebhookAsync(Closure $callback, ?string $body = null): PromiseInterface
    {
        Loop::enable($this->telegram->getBrowser());
        $this->telegram->async(true);

        $body ??= $this->readWebhookBody();
        $payload = json_decode($body ?: '', true);

        if (! is_array($payload)) {
            $this->logger->warning('Webhook body is not valid JSON');

            return Create::promiseFor(null);
        }

        $update = (new Update($payload))->withTelegram($this->telegram);
        $this->logger->debug('Webhook update {id}', ['id' => $update->update_id ?? null]);

        return $this->dispatcher
            ->concurrency($this->concurrency)
            ->dispatchOne($callback->bindTo($this->telegram) ?? $callback, $update)
            ->then(function ($result) {
                gc_collect_cycles();

                return $result;
            });
    }

    /**
     * Built-in HTTP server for webhooks when Apache/Nginx is not available.
     *
     * @param  array{host?:string,port?:int,path?:string,secret?:string|null}  $options
     */
    public function waitServer(Closure $callback, array $options = []): void
    {
        Loop::enable($this->telegram->getBrowser());
        $this->telegram->async(true);
        $this->running = true;

        $options = array_merge([
            'host' => '0.0.0.0',
            'port' => 8080,
            'path' => '/webhook',
            'secret' => null,
        ], $options);

        $callback = $callback->bindTo($this->telegram) ?? $callback;
        $this->dispatcher->concurrency($this->concurrency);
        if ($this->errorHandler) {
            $this->dispatcher->onError($this->errorHandler);
        }

        $server = new HttpServer($options['host'], (int) $options['port'], $this->logger);
        $path = rtrim((string) $options['path'], '/') ?: '/webhook';
        $secret = $options['secret'];

        $server->onRequest(function (string $method, string $requestPath, string $body, array $headers) use ($callback, $path, $secret) {
            if ($requestPath !== $path && $requestPath !== $path . '/') {
                return ['status' => 404, 'body' => 'Not Found'];
            }

            if ($method === 'GET') {
                return ['status' => 200, 'body' => 'Jeely webhook server is running'];
            }

            if ($method !== 'POST') {
                return ['status' => 405, 'body' => 'Method Not Allowed'];
            }

            if (is_string($secret) && $secret !== '') {
                $token = $headers['x-telegram-bot-api-secret-token'] ?? '';
                if (! hash_equals($secret, $token)) {
                    $this->logger->warning('Webhook rejected: invalid secret token');

                    return ['status' => 403, 'body' => 'Forbidden'];
                }
            }

            $promise = $this->handleWebhookAsync($callback, $body);
            // Detach: respond to Telegram quickly while handler continues on the loop.
            $promise->then(null, function ($reason) {
                $message = $reason instanceof Throwable ? $reason->getMessage() : (string) $reason;
                $this->logger->error('Webhook handler failed: {message}', ['message' => $message]);
            });

            return ['status' => 200, 'body' => 'ok'];
        });

        $this->logger->info('Starting webhook HTTP server on {host}:{port}{path}', [
            'host' => $options['host'],
            'port' => $options['port'],
            'path' => $path,
        ]);

        try {
            $server->run();
        } finally {
            $this->running = false;
        }
    }

    /**
     * Blocking long-polling loop on the Revolt event loop.
     */
    public function waitPolling(Closure $callback, array $options = []): void
    {
        Loop::enable($this->telegram->getBrowser());
        $this->telegram->async(true);

        $this->logger->info('Starting long polling');
        Loop::await($this->runPollingAsync($callback, $options));
        $this->logger->info('Long polling stopped');
    }

    /**
     * Async long-polling loop. Handlers are dispatched concurrently and do not
     * block the next getUpdates cycle — use {@see Timer::delay()} instead of sleep().
     */
    public function runPollingAsync(Closure $callback, array $options = []): PromiseInterface
    {
        Loop::enable($this->telegram->getBrowser());
        $this->telegram->async(true);

        $this->running = true;
        $this->processed = 0;
        $this->inflight = 0;

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
                $this->logger->debug('Webhook deleted; entering poll cycle');

                return $this->pollCycle($callback, $options);
            },
            function () use ($callback, $options) {
                $this->logger->warning('deleteWebhook failed; continuing poll cycle');

                return $this->pollCycle($callback, $options);
            }
        );
    }

    private function pollCycle(Closure $callback, array $options): PromiseInterface
    {
        if (! $this->running || $this->shouldStopAfterProcessed($this->processed)) {
            $this->running = false;

            return $this->drainInflight();
        }

        return $this->waitForCapacity()->then(
            function () use ($callback, $options) {
                if (! $this->running) {
                    return $this->drainInflight();
                }

                return $this->callTelegramAsync('getUpdates', $options)->then(
                    function ($updates) use ($callback, $options) {
                        if ($updates instanceof Error) {
                            $this->logger->error('getUpdates error {code}: {description}', [
                                'code' => $updates->getErrorCode(),
                                'description' => $updates->getDescription(),
                            ]);

                            return $this->handlePollingError($updates, $callback, $options);
                        }

                        if (! is_array($updates) || $updates === []) {
                            return $this->pollCycle($callback, $options);
                        }

                        $this->logger->debug('Received {count} update(s)', ['count' => count($updates)]);

                        $lastId = null;
                        foreach ($updates as $update) {
                            if (isset($update->update_id)) {
                                $lastId = (int) $update->update_id;
                            }
                        }

                        if ($lastId !== null) {
                            $options['offset'] = $lastId + 1;
                        }

                        foreach ($updates as $update) {
                            $this->dispatchDetached($callback, $update);
                        }

                        return $this->pollCycle($callback, $options);
                    }
                );
            }
        );
    }

    private function dispatchDetached(Closure $callback, mixed $update): void
    {
        if ($update instanceof Update) {
            $update->withTelegram($this->telegram);
        }

        $this->inflight++;
        $this->processed++;

        $this->dispatcher->dispatchOne($callback, $update)->then(
            function ($result) {
                $this->inflight = max(0, $this->inflight - 1);

                return $result;
            },
            function ($reason) {
                $this->inflight = max(0, $this->inflight - 1);
                $message = $reason instanceof Throwable ? $reason->getMessage() : (string) $reason;
                $this->logger->error('Update handler failed: {message}', ['message' => $message]);

                return null;
            }
        );
    }

    private function waitForCapacity(): PromiseInterface
    {
        if ($this->inflight < $this->concurrency) {
            return Create::promiseFor(null);
        }

        return Timer::delay(0.01)->then(function () {
            return $this->waitForCapacity();
        });
    }

    private function drainInflight(): PromiseInterface
    {
        if ($this->inflight <= 0) {
            return Create::promiseFor(null);
        }

        return Timer::delay(0.01)->then(function () {
            return $this->drainInflight();
        });
    }

    private function handlePollingError(Error $error, Closure $callback, array $options): PromiseInterface
    {
        $code = (int) $error->getErrorCode();

        if ($code === 409) {
            $this->logger->warning('getUpdates conflict (409); retrying');

            return $this->pollCycle($callback, $options);
        }

        if ($code === 429) {
            $retryAfter = (int) ($error->parameters?->retry_after ?? 1);
            $this->logger->warning('getUpdates rate limited; retry after {seconds}s', ['seconds' => $retryAfter]);

            return Timer::delay($retryAfter)->then(
                fn () => $this->pollCycle($callback, $options)
            );
        }

        throw new \RuntimeException((string) $error->getDescription(), $code);
    }

    private function callTelegramAsync(string $method, array $params): PromiseInterface
    {
        $params['async'] = true;
        $result = $this->telegram->{$method}($params);

        return Await::promise($result);
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
