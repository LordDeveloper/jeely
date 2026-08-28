<?php

namespace Jeely\Cache;

/**
 * In-process memory cache (request-scoped).
 */
final class ArrayCache extends AbstractCache
{
    /** @var array<string, array{0:mixed,1:?int}> */
    private array $items = [];

    public function get(string $key, mixed $default = null): mixed
    {
        $key = $this->normalizeKey($key);

        if (! isset($this->items[$key])) {
            return $default;
        }

        [$value, $expiresAt] = $this->items[$key];
        if ($this->isExpired($expiresAt)) {
            unset($this->items[$key]);

            return $default;
        }

        return $value;
    }

    public function set(string $key, mixed $value, ?int $ttl = null): bool
    {
        $key = $this->normalizeKey($key);
        $this->items[$key] = $this->pack($value, $ttl);

        return true;
    }

    public function delete(string $key): bool
    {
        $key = $this->normalizeKey($key);
        unset($this->items[$key]);

        return true;
    }

    public function clear(): bool
    {
        $this->items = [];

        return true;
    }

    public function has(string $key): bool
    {
        $key = $this->normalizeKey($key);

        if (! isset($this->items[$key])) {
            return false;
        }

        [, $expiresAt] = $this->items[$key];
        if ($this->isExpired($expiresAt)) {
            unset($this->items[$key]);

            return false;
        }

        return true;
    }
}
