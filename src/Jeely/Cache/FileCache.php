<?php

namespace Jeely\Cache;

/**
 * Filesystem cache using PHP serialized payloads.
 */
final class FileCache extends AbstractCache
{
    public function __construct(private string $directory)
    {
        if (! is_dir($this->directory) && ! mkdir($this->directory, 0777, true) && ! is_dir($this->directory)) {
            throw new \RuntimeException('Unable to create cache directory: ' . $this->directory);
        }
    }

    public function get(string $key, mixed $default = null): mixed
    {
        $path = $this->path($key);
        if (! is_file($path)) {
            return $default;
        }

        $raw = @file_get_contents($path);
        if ($raw === false) {
            return $default;
        }

        $payload = @unserialize($raw);
        if (! is_array($payload) || count($payload) !== 2) {
            @unlink($path);

            return $default;
        }

        [$value, $expiresAt] = $payload;
        if ($this->isExpired(is_int($expiresAt) ? $expiresAt : null)) {
            @unlink($path);

            return $default;
        }

        return $value;
    }

    public function set(string $key, mixed $value, ?int $ttl = null): bool
    {
        $path = $this->path($key);
        $payload = serialize($this->pack($value, $ttl));

        return file_put_contents($path, $payload, LOCK_EX) !== false;
    }

    public function delete(string $key): bool
    {
        $path = $this->path($key);
        if (is_file($path)) {
            return @unlink($path);
        }

        return true;
    }

    public function clear(): bool
    {
        $ok = true;
        foreach (glob($this->directory . DIRECTORY_SEPARATOR . '*.cache') ?: [] as $file) {
            $ok = @unlink($file) && $ok;
        }

        return $ok;
    }

    public function has(string $key): bool
    {
        $sentinel = new \stdClass();
        $value = $this->get($key, $sentinel);

        return $value !== $sentinel;
    }

    private function path(string $key): string
    {
        $key = $this->normalizeKey($key);

        return $this->directory . DIRECTORY_SEPARATOR . hash('sha256', $key) . '.cache';
    }
}
