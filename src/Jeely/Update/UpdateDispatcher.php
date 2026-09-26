<?php

namespace Jeely\Update;

use Closure;
use GuzzleHttp\Promise\Each;
use GuzzleHttp\Promise\PromiseInterface;
use Jeely\Async\Await;
use Jeely\Telegram;
use Jeely\Api\Update;
use Throwable;

/**
 * Dispatches updates to a user callback with optional concurrency.
 */
final class UpdateDispatcher
{
    /** @var callable(Throwable, Update|null):void|null */
    private $errorHandler = null;

    public function __construct(
        private Telegram $telegram,
        private int $concurrency = 8,
    ) {
    }

    public function concurrency(int $concurrency): self
    {
        $this->concurrency = max(1, $concurrency);

        return $this;
    }

    /**
     * @param callable(Throwable, Update|null):void $handler
     */
    public function onError(callable $handler): self
    {
        $this->errorHandler = $handler;

        return $this;
    }

    /**
     * @param iterable<Update> $updates
     */
    public function dispatchMany(iterable $updates, Closure $callback): PromiseInterface
    {
        $callback = $callback->bindTo($this->telegram) ?? $callback;
        $concurrency = $this->concurrency;

        $generator = function () use ($updates, $callback) {
            foreach ($updates as $update) {
                if ($update instanceof Update) {
                    $update->withTelegram($this->telegram);
                }

                yield $this->dispatchOne($callback, $update);
            }
        };

        return Each::ofLimit($generator(), $concurrency);
    }

    public function dispatchOne(Closure $callback, mixed $update): PromiseInterface
    {
        return Await::call($callback, $update)->then(
            null,
            function (Throwable $e) use ($update) {
                $this->report($e, $update instanceof Update ? $update : null);

                // Swallow handler errors so the polling loop keeps running.
                return null;
            }
        );
    }

    private function report(Throwable $e, ?Update $update): void
    {
        if ($this->errorHandler) {
            ($this->errorHandler)($e, $update);

            return;
        }

        // Preserve the real exception location instead of wrapping into an
        // ErrorException that points at this file (Laravel-friendly stacks).
        $context = $update !== null
            ? sprintf(' [update_id=%s]', (string) ($update->update_id ?? '?'))
            : '';

        fwrite(STDERR, sprintf(
            "Jeely update handler error%s: %s in %s:%d\n%s\n",
            $context,
            $e->getMessage(),
            $e->getFile(),
            $e->getLine(),
            $e->__toString(),
        ));
    }
}
