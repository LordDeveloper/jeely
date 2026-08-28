<?php

namespace Jeely\Steps;

/**
 * Persistent conversation state for one bot/user (and optional chat).
 */
final class StepSession
{
    /**
     * @param  array<string, mixed>  $data  Flow-level bag
     * @param  array<string, array<string, mixed>>  $stepData  Per-step bags
     * @param  list<string>  $history  Visited step names (for back())
     * @param  array<string, mixed>  $meta
     */
    public function __construct(
        public StepKey $key,
        public string $flow,
        public string $step,
        public array $data = [],
        public array $stepData = [],
        public array $history = [],
        public array $meta = [],
        public ?int $expiresAt = null,
        public int $updatedAt = 0,
        public int $createdAt = 0,
    ) {
        $now = time();
        if ($this->createdAt === 0) {
            $this->createdAt = $now;
        }
        if ($this->updatedAt === 0) {
            $this->updatedAt = $now;
        }
    }

    public function isExpired(?int $now = null): bool
    {
        if ($this->expiresAt === null) {
            return false;
        }

        return $this->expiresAt <= ($now ?? time());
    }

    public function touch(?int $ttl = null): void
    {
        $this->updatedAt = time();
        if ($ttl !== null) {
            $this->expiresAt = $this->updatedAt + max(0, $ttl);
        }
    }

    public function put(string $key, mixed $value): self
    {
        $this->data[$key] = $value;

        return $this;
    }

    public function get(string $key, mixed $default = null): mixed
    {
        return $this->data[$key] ?? $default;
    }

    public function has(string $key): bool
    {
        return array_key_exists($key, $this->data);
    }

    public function forget(string $key): self
    {
        unset($this->data[$key]);

        return $this;
    }

    /**
     * @param  array<string, mixed>  $values
     */
    public function merge(array $values): self
    {
        $this->data = array_merge($this->data, $values);

        return $this;
    }

    public function putStep(string $step, string $key, mixed $value): self
    {
        $this->stepData[$step] ??= [];
        $this->stepData[$step][$key] = $value;

        return $this;
    }

    public function getStep(string $step, ?string $key = null, mixed $default = null): mixed
    {
        $bag = $this->stepData[$step] ?? [];

        if ($key === null) {
            return $bag;
        }

        return $bag[$key] ?? $default;
    }

    public function setMeta(string $key, mixed $value): self
    {
        $this->meta[$key] = $value;

        return $this;
    }

    public function getMeta(string $key, mixed $default = null): mixed
    {
        return $this->meta[$key] ?? $default;
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'bot_id' => $this->key->botId,
            'user_id' => $this->key->userId,
            'chat_id' => $this->key->chatId,
            'flow' => $this->flow,
            'step' => $this->step,
            'data' => $this->data,
            'step_data' => $this->stepData,
            'history' => $this->history,
            'meta' => $this->meta,
            'expires_at' => $this->expiresAt,
            'updated_at' => $this->updatedAt,
            'created_at' => $this->createdAt,
        ];
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    public static function fromArray(array $payload): self
    {
        return new self(
            StepKey::make(
                (string) ($payload['bot_id'] ?? ''),
                (string) ($payload['user_id'] ?? ''),
                $payload['chat_id'] ?? null,
            ),
            (string) ($payload['flow'] ?? ''),
            (string) ($payload['step'] ?? ''),
            is_array($payload['data'] ?? null) ? $payload['data'] : [],
            is_array($payload['step_data'] ?? null) ? $payload['step_data'] : [],
            array_values(is_array($payload['history'] ?? null) ? $payload['history'] : []),
            is_array($payload['meta'] ?? null) ? $payload['meta'] : [],
            isset($payload['expires_at']) ? (int) $payload['expires_at'] : null,
            (int) ($payload['updated_at'] ?? 0),
            (int) ($payload['created_at'] ?? 0),
        );
    }
}
