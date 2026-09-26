<?php

namespace Jeely\Async;

use GuzzleHttp\Handler\CurlMultiHandler;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Promise\Utils;
use Jeely\Browser;
use Revolt\EventLoop;
use Throwable;

/**
 * Bridges Guzzle promises / curl_multi onto the Revolt event loop.
 */
final class Loop
{
    private static ?string $guzzleWatcher = null;

    private static ?CurlMultiHandler $curlMulti = null;

    private static int $awaitDepth = 0;

    public static function enable(Browser $browser): void
    {
        self::$curlMulti = $browser->curlMulti();
        self::ensureGuzzleWatcher();
    }

    public static function isEnabled(): bool
    {
        return self::$curlMulti !== null;
    }

    /**
     * Drop the Revolt↔curl_multi bridge (tests / sync webhook teardown).
     */
    public static function reset(): void
    {
        if (self::$guzzleWatcher !== null) {
            EventLoop::cancel(self::$guzzleWatcher);
            self::$guzzleWatcher = null;
        }

        self::$curlMulti = null;
        self::$awaitDepth = 0;
    }

    /**
     * Block until a Guzzle promise settles while keeping the event loop alive.
     *
     * If the Revolt bridge is not enabled yet, falls back to Guzzle's native wait().
     */
    public static function await(PromiseInterface $promise): mixed
    {
        if ($promise->getState() !== PromiseInterface::PENDING) {
            $result = $promise->wait();
            // enable() may have registered a watcher without entering suspend().
            self::maybeCancelGuzzleWatcher();

            return $result;
        }

        // Before waitPolling/enable(), native wait drives curl_multi correctly.
        if (self::$curlMulti === null) {
            return $promise->wait();
        }

        self::ensureGuzzleWatcher();

        $suspension = EventLoop::getSuspension();
        self::$awaitDepth++;

        $promise->then(
            static function (mixed $value) use ($suspension): void {
                $suspension->resume($value);
            },
            static function (mixed $reason) use ($suspension): void {
                $error = $reason instanceof Throwable
                    ? $reason
                    : new \RuntimeException((string) $reason);

                $suspension->throw($error);
            }
        );

        try {
            return $suspension->suspend();
        } finally {
            self::$awaitDepth = max(0, self::$awaitDepth - 1);
            self::maybeCancelGuzzleWatcher();
        }
    }

    /**
     * Run the Revolt event loop until {@see stop()} is called.
     */
    public static function run(): void
    {
        self::ensureGuzzleWatcher();
        EventLoop::run();
        self::maybeCancelGuzzleWatcher();
    }

    public static function stop(): void
    {
        EventLoop::getDriver()->stop();
    }

    public static function defer(callable $callback): void
    {
        EventLoop::defer(static function () use ($callback): void {
            $callback();
        });
    }

    private static function ensureGuzzleWatcher(): void
    {
        if (self::$guzzleWatcher !== null) {
            return;
        }

        // Keep curl_multi + Guzzle task queue moving while Revolt is running.
        self::$guzzleWatcher = EventLoop::repeat(0.001, static function (): void {
            Utils::queue()->run();

            if (self::$curlMulti !== null) {
                self::$curlMulti->tick();
            }
        });
    }

    private static function maybeCancelGuzzleWatcher(): void
    {
        if (self::$awaitDepth > 0 || self::$guzzleWatcher === null) {
            return;
        }

        EventLoop::cancel(self::$guzzleWatcher);
        self::$guzzleWatcher = null;
    }
}
