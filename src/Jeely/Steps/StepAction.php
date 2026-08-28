<?php

namespace Jeely\Steps;

/**
 * Result returned from step handlers to control navigation.
 */
final class StepAction
{
    public const STAY = 'stay';
    public const NEXT = 'next';
    public const BACK = 'back';
    public const JUMP = 'jump';
    public const REPEAT = 'repeat';
    public const CANCEL = 'cancel';
    public const COMPLETE = 'complete';
    public const RETRY = 'retry';

    private function __construct(
        public readonly string $type,
        public readonly ?string $target = null,
        public readonly mixed $payload = null,
    ) {
    }

    public static function stay(mixed $payload = null): self
    {
        return new self(self::STAY, null, $payload);
    }

    public static function next(mixed $payload = null): self
    {
        return new self(self::NEXT, null, $payload);
    }

    public static function back(mixed $payload = null): self
    {
        return new self(self::BACK, null, $payload);
    }

    public static function jump(string $step, mixed $payload = null): self
    {
        return new self(self::JUMP, $step, $payload);
    }

    public static function repeat(mixed $payload = null): self
    {
        return new self(self::REPEAT, null, $payload);
    }

    public static function cancel(mixed $payload = null): self
    {
        return new self(self::CANCEL, null, $payload);
    }

    public static function complete(mixed $payload = null): self
    {
        return new self(self::COMPLETE, null, $payload);
    }

    public static function retry(mixed $payload = null): self
    {
        return new self(self::RETRY, null, $payload);
    }
}
