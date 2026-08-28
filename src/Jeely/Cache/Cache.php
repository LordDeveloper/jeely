<?php

namespace Jeely\Cache;

/**
 * Static facade around a default CacheInterface implementation.
 */
final class Cache
{
    private static ?CacheInterface $store = null;

    public static function setDefault(CacheInterface $store): void
    {
        self::$store = $store;
    }

    public static function store(): CacheInterface
    {
        if (self::$store === null) {
            self::$store = new ArrayCache();
        }

        return self::$store;
    }

    public static function get(string $key, mixed $default = null): mixed
    {
        return self::store()->get($key, $default);
    }

    public static function set(string $key, mixed $value, ?int $ttl = null): bool
    {
        return self::store()->set($key, $value, $ttl);
    }

    public static function delete(string $key): bool
    {
        return self::store()->delete($key);
    }

    public static function clear(): bool
    {
        return self::store()->clear();
    }

    public static function has(string $key): bool
    {
        return self::store()->has($key);
    }

    public static function remember(string $key, ?int $ttl, callable $callback): mixed
    {
        return self::store()->remember($key, $ttl, $callback);
    }
}
