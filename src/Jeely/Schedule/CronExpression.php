<?php

namespace Jeely\Schedule;

/**
 * Cron matcher supporting 5 or 6 fields.
 *
 * 5-field: minute hour day month weekday (runs at second 0).
 * 6-field: second minute hour day month weekday.
 */
final class CronExpression
{
    public static function matches(string $expression, \DateTimeImmutable $time): bool
    {
        $parts = preg_split('/\s+/', trim($expression));
        if ($parts === false) {
            throw new \InvalidArgumentException('Invalid cron expression: ' . $expression);
        }

        $count = count($parts);
        if ($count === 5) {
            if ((int) $time->format('s') !== 0) {
                return false;
            }

            return self::fieldMatches($parts[0], (int) $time->format('i'), 0, 59)
                && self::fieldMatches($parts[1], (int) $time->format('G'), 0, 23)
                && self::fieldMatches($parts[2], (int) $time->format('j'), 1, 31)
                && self::fieldMatches($parts[3], (int) $time->format('n'), 1, 12)
                && self::fieldMatches($parts[4], (int) $time->format('w'), 0, 6);
        }

        if ($count === 6) {
            return self::fieldMatches($parts[0], (int) $time->format('s'), 0, 59)
                && self::fieldMatches($parts[1], (int) $time->format('i'), 0, 59)
                && self::fieldMatches($parts[2], (int) $time->format('G'), 0, 23)
                && self::fieldMatches($parts[3], (int) $time->format('j'), 1, 31)
                && self::fieldMatches($parts[4], (int) $time->format('n'), 1, 12)
                && self::fieldMatches($parts[5], (int) $time->format('w'), 0, 6);
        }

        throw new \InvalidArgumentException(
            'Cron expression must have 5 or 6 fields: ' . $expression,
        );
    }

    private static function fieldMatches(string $field, int $value, int $min, int $max): bool
    {
        if ($field === '*') {
            return true;
        }

        foreach (explode(',', $field) as $part) {
            if (str_contains($part, '/')) {
                [$base, $step] = explode('/', $part, 2);
                $step = (int) $step;
                if ($step < 1) {
                    continue;
                }

                if ($base === '*') {
                    if ($value % $step === 0) {
                        return true;
                    }
                    continue;
                }
            }

            if (str_contains($part, '-')) {
                [$start, $end] = array_map('intval', explode('-', $part, 2));
                if ($value >= $start && $value <= $end) {
                    return true;
                }
                continue;
            }

            if ((int) $part === $value) {
                return true;
            }
        }

        return false;
    }
}
