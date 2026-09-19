<?php

namespace Jeely\Schedule;

final class ScheduleFrequency
{
    private function __construct(
        private readonly string $cronExpression,
    ) {
    }

    public static function cron(string $expression): self
    {
        $expression = trim($expression);
        if ($expression === '') {
            throw new \InvalidArgumentException('Cron expression cannot be empty.');
        }

        $parts = preg_split('/\s+/', $expression);
        $count = $parts === false ? 0 : count($parts);
        if ($count !== 5 && $count !== 6) {
            throw new \InvalidArgumentException(
                'Cron expression must have 5 or 6 fields: ' . $expression,
            );
        }

        return new self($expression);
    }

    public function cronExpression(): string
    {
        return $this->cronExpression;
    }

    public function hasSecondPrecision(): bool
    {
        $parts = preg_split('/\s+/', trim($this->cronExpression));

        return $parts !== false && count($parts) === 6;
    }

    public function isDue(\DateTimeImmutable $now): bool
    {
        return CronExpression::matches($this->cronExpression, $now);
    }
}
