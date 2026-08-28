<?php

namespace Jeely\Cache;

/**
 * Minimal cache contract (PSR-16 inspired, no third-party dependency).
 */
interface CacheInterface
{
    public function get(string $key, mixed $default = null): mixed;

    public function set(string $key, mixed $value, ?int $ttl = null): bool;

    public function delete(string $key): bool;

    public function clear(): bool;

    public function has(string $key): bool;

    /**
     * @param  iterable<string>  $keys
     * @return array<string, mixed>
     */
    public function getMultiple(iterable $keys, mixed $default = null): array;

    /**
     * @param  iterable<string, mixed>  $values
     */
    public function setMultiple(iterable $values, ?int $ttl = null): bool;

    /**
     * @param  iterable<string>  $keys
     */
    public function deleteMultiple(iterable $keys): bool;

    /**
     * Get an item or store the result of $callback.
     *
     * @template T
     * @param  callable():T  $callback
     * @return T
     */
    public function remember(string $key, ?int $ttl, callable $callback): mixed;
}
