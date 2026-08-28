<?php

namespace Jeely\Cache;

/**
 * APCu cache when the extension is available.
 */
final class ApcuCache extends AbstractCache
{
    public function __construct(private string $prefix = 'jeely:')
    {
        if (! function_exists('apcu_fetch')) {
            throw new \RuntimeException('APCu extension is not available.');
        }
    }

    public function get(string $key, mixed $default = null): mixed
    {
        $success = false;
        $value = apcu_fetch($this->prefixed($key), $success);

        return $success ? $value : $default;
    }

    public function set(string $key, mixed $value, ?int $ttl = null): bool
    {
        return apcu_store($this->prefixed($key), $value, max(0, $ttl ?? 0));
    }

    public function delete(string $key): bool
    {
        return apcu_delete($this->prefixed($key));
    }

    public function clear(): bool
    {
        return apcu_clear_cache();
    }

    public function has(string $key): bool
    {
        return apcu_exists($this->prefixed($key));
    }

    private function prefixed(string $key): string
    {
        return $this->prefix . $this->normalizeKey($key);
    }
}
