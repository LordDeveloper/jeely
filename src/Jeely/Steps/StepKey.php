<?php

namespace Jeely\Steps;

/**
 * Identity key: one conversation slot per bot + user (+ optional chat).
 */
final class StepKey
{
    public function __construct(
        public readonly string $botId,
        public readonly string $userId,
        public readonly ?string $chatId = null,
    ) {
    }

    public function toString(): string
    {
        $parts = [$this->botId, $this->userId];
        if ($this->chatId !== null && $this->chatId !== '') {
            $parts[] = $this->chatId;
        }

        return implode(':', $parts);
    }

    public static function make(string|int $botId, string|int $userId, string|int|null $chatId = null): self
    {
        return new self((string) $botId, (string) $userId, $chatId === null ? null : (string) $chatId);
    }
}
