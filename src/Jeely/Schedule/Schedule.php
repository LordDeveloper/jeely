<?php

namespace Jeely\Schedule;

final class Schedule
{
    /** @var array<int, ScheduledEvent> */
    private array $events = [];

    /**
     * Schedule via cron expression (5 or 6 fields).
     *
     * 5-field: minute hour day month weekday
     * 6-field: second minute hour day month weekday
     */
    public function cron(string $expression, callable $callback): ScheduledEvent
    {
        return $this->push($callback, ScheduleFrequency::cron($expression));
    }

    public function everySecond(callable $callback): ScheduledEvent
    {
        return $this->cron('* * * * * *', $callback);
    }

    public function everySeconds(int $seconds, callable $callback): ScheduledEvent
    {
        if ($seconds <= 0) {
            throw new \InvalidArgumentException('Seconds must be greater than zero.');
        }

        return $this->cron("*/{$seconds} * * * * *", $callback);
    }

    public function everyMinute(callable $callback): ScheduledEvent
    {
        return $this->cron('* * * * *', $callback);
    }

    public function hourly(callable $callback): ScheduledEvent
    {
        return $this->cron('0 * * * *', $callback);
    }

    public function daily(callable $callback): ScheduledEvent
    {
        return $this->cron('0 0 * * *', $callback);
    }

    public function call(callable $callback): ScheduledEvent
    {
        return $this->everyMinute($callback);
    }

    /** @return array<int, ScheduledEvent> */
    public function events(): array
    {
        return $this->events;
    }

    public function isEmpty(): bool
    {
        return $this->events === [];
    }

    private function push(callable $callback, ScheduleFrequency $frequency): ScheduledEvent
    {
        $event = new ScheduledEvent($callback, $frequency);
        $this->events[] = $event;

        return $event;
    }
}
