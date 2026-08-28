<?php

namespace Jeely\Steps;

use Jeely\Cache\CacheInterface;

/**
 * Persist sessions through any CacheInterface backend.
 */
final class CacheStepStore implements StepStoreInterface
{
    public function __construct(
        private CacheInterface $cache,
        private string $prefix = 'jeely.steps.',
        private ?int $defaultTtl = 86400,
    ) {
    }

    public function get(StepKey $key): ?StepSession
    {
        $payload = $this->cache->get($this->cacheKey($key));
        if (! is_array($payload)) {
            return null;
        }

        $session = StepSession::fromArray($payload);
        if ($session->isExpired()) {
            $this->delete($key);

            return null;
        }

        return $session;
    }

    public function put(StepSession $session): void
    {
        $ttl = $this->defaultTtl;
        if ($session->expiresAt !== null) {
            $ttl = max(1, $session->expiresAt - time());
        }

        $this->cache->set($this->cacheKey($session->key), $session->toArray(), $ttl);
    }

    public function delete(StepKey $key): void
    {
        $this->cache->delete($this->cacheKey($key));
    }

    public function prune(): int
    {
        return 0;
    }

    private function cacheKey(StepKey $key): string
    {
        return $this->prefix . hash('sha256', $key->toString());
    }
}
