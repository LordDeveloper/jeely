<?php

declare(strict_types=1);

namespace Examples\Schedulebot;

/**
 * In-memory counters updated by scheduled tasks.
 */
final class StatsStore
{
    private static int $minuteTicks = 0;

    private static int $fastTicks = 0;

    private static ?string $lastMinuteAt = null;

    private static ?string $lastFastAt = null;

    private static ?string $lastDailyAt = null;

    public static function tickMinute(): void
    {
        self::$minuteTicks++;
        self::$lastMinuteAt = date('Y-m-d H:i:s');
    }

    public static function tickFast(): void
    {
        self::$fastTicks++;
        self::$lastFastAt = date('Y-m-d H:i:s');
    }

    public static function markDaily(): void
    {
        self::$lastDailyAt = date('Y-m-d H:i:s');
    }

    /** @return array<string, int|string|null> */
    public static function snapshot(): array
    {
        return [
            'minute_ticks' => self::$minuteTicks,
            'fast_ticks' => self::$fastTicks,
            'last_minute_at' => self::$lastMinuteAt,
            'last_fast_at' => self::$lastFastAt,
            'last_daily_at' => self::$lastDailyAt,
        ];
    }
}
