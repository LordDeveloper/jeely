<?php

declare(strict_types=1);

namespace Examples\Shopbot;

use Jeely\Cache\FileCache;

final class OrderStore
{
    private const TTL = 604800;

    public function __construct(private FileCache $cache)
    {
    }

    public static function open(string $path): self
    {
        return new self(new FileCache($path));
    }

    public function key(int|string $chatId, int|string $messageId): string
    {
        return $chatId . '_' . $messageId;
    }

    public function get(string $key): mixed
    {
        return $this->cache->get($key);
    }

    /** @param array{text: string, status: string} $payload */
    public function save(string $key, array $payload): void
    {
        $this->cache->set($key, $payload, self::TTL);
    }
}
