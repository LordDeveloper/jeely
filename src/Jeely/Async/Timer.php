<?php

namespace Jeely\Async;

use GuzzleHttp\Promise\Promise;
use GuzzleHttp\Promise\PromiseInterface;
use Revolt\EventLoop;

/**
 * Non-blocking delay helpers for Jeely's Revolt-powered runtime.
 */
final class Timer
{
    /**
     * Resolve after $seconds without blocking other poll/handlers.
     */
    public static function delay(float $seconds): PromiseInterface
    {
        $seconds = max(0.0, $seconds);

        $promise = new Promise(static function () {
            // Resolution is driven by the Revolt event loop via Loop::await / Loop::run.
        });

        EventLoop::delay($seconds, static function () use ($promise): void {
            if ($promise->getState() === PromiseInterface::PENDING) {
                $promise->resolve(null);
            }
        });

        return $promise;
    }
}
