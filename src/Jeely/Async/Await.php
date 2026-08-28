<?php

namespace Jeely\Async;

use GuzzleHttp\Promise\Create;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Promise\Utils;
use Throwable;

// Timer / Loop are in the same namespace.

/**
 * Small helpers around Guzzle promises for Jeely's async runtime.
 */
final class Await
{
    /**
     * Normalize sync values / callables / promises into a PromiseInterface.
     */
    public static function promise(mixed $value): PromiseInterface
    {
        if ($value instanceof PromiseInterface) {
            return $value;
        }

        if ($value instanceof \Closure || (is_object($value) && is_callable($value))) {
            try {
                return self::promise($value());
            } catch (Throwable $e) {
                return Create::rejectionFor($e);
            }
        }

        return Create::promiseFor($value);
    }

    /**
     * Non-blocking delay (Revolt timer). Prefer this over sleep()/usleep().
     */
    public static function delay(float $seconds): PromiseInterface
    {
        return Timer::delay($seconds);
    }

    /**
     * Await a promise without freezing the Revolt loop.
     */
    public static function result(PromiseInterface $promise): mixed
    {
        return Loop::await($promise);
    }

    /**
     * Run a handler and always return a settled-capable promise.
     *
     * @param callable(mixed...):mixed $handler
     */
    public static function call(callable $handler, mixed ...$args): PromiseInterface
    {
        try {
            return self::promise($handler(...$args));
        } catch (Throwable $e) {
            return Create::rejectionFor($e);
        }
    }

    /**
     * @param iterable<PromiseInterface|mixed> $promises
     */
    public static function all(iterable $promises, bool $recursive = false): PromiseInterface
    {
        $normalized = [];
        foreach ($promises as $key => $promise) {
            $normalized[$key] = self::promise($promise);
        }

        return Utils::all($normalized, $recursive);
    }

    /**
     * @param iterable<PromiseInterface|mixed> $promises
     */
    public static function settle(iterable $promises): PromiseInterface
    {
        $normalized = [];
        foreach ($promises as $key => $promise) {
            $normalized[$key] = self::promise($promise);
        }

        return Utils::settle($normalized);
    }
}
