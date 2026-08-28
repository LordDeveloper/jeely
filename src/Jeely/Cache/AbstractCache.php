<?php

namespace Jeely\Cache;

abstract class AbstractCache implements CacheInterface
{
    public function getMultiple(iterable $keys, mixed $default = null): array
    {
        $out = [];
        foreach ($keys as $key) {
            $out[$key] = $this->get((string) $key, $default);
        }

        return $out;
    }

    public function setMultiple(iterable $values, ?int $ttl = null): bool
    {
        $ok = true;
        foreach ($values as $key => $value) {
            $ok = $this->set((string) $key, $value, $ttl) && $ok;
        }

        return $ok;
    }

    public function deleteMultiple(iterable $keys): bool
    {
        $ok = true;
        foreach ($keys as $key) {
            $ok = $this->delete((string) $key) && $ok;
        }

        return $ok;
    }

    public function remember(string $key, ?int $ttl, callable $callback): mixed
    {
        if ($this->has($key)) {
            return $this->get($key);
        }

        $value = $callback();
        $this->set($key, $value, $ttl);

        return $value;
    }

    protected function normalizeKey(string $key): string
    {
        if ($key === '' || ! preg_match('/^[A-Za-z0-9_.-]+$/', $key)) {
            throw new \InvalidArgumentException('Invalid cache key: ' . $key);
        }

        return $key;
    }

    /**
     * @return array{0:mixed,1:?int} value + expiresAt unix timestamp (null = forever)
     */
    protected function pack(mixed $value, ?int $ttl): array
    {
        $expiresAt = null;
        if ($ttl !== null) {
            $expiresAt = time() + max(0, $ttl);
        }

        return [$value, $expiresAt];
    }

    protected function isExpired(?int $expiresAt): bool
    {
        return $expiresAt !== null && $expiresAt <= time();
    }
}
