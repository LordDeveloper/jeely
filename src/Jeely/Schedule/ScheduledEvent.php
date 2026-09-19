<?php

namespace Jeely\Schedule;

final class ScheduledEvent
{
    private ?string $name = null;

    private bool $withoutOverlapping = false;

    private bool $running = false;

    /** @param callable(): mixed|\GuzzleHttp\Promise\PromiseInterface $callback */
    public function __construct(
        private readonly mixed $callback,
        private readonly ScheduleFrequency $frequency,
    ) {
    }

    public function name(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function withoutOverlapping(): self
    {
        $this->withoutOverlapping = true;

        return $this;
    }

    public function eventName(): ?string
    {
        return $this->name;
    }

    public function frequency(): ScheduleFrequency
    {
        return $this->frequency;
    }

    public function isDue(\DateTimeImmutable $now): bool
    {
        return $this->frequency->isDue($now);
    }

    /** @return mixed|\GuzzleHttp\Promise\PromiseInterface */
    public function run(): mixed
    {
        if ($this->withoutOverlapping && $this->running) {
            return null;
        }

        $this->running = true;

        try {
            return ($this->callback)();
        } finally {
            $this->running = false;
        }
    }
}
