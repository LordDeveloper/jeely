<?php

declare(strict_types=1);

require __DIR__ . '/../bootstrap.php';

use Jeely\Async\Await;
use Jeely\Async\Loop;
use Jeely\Browser;
use Jeely\Schedule\CronExpression;
use Jeely\Schedule\Schedule;
use Jeely\Schedule\ScheduleFrequency;
use Jeely\Schedule\ScheduleRunner;

return [
    'schedule_every_second_runs_async_callback' => function (): void {
        $browser = Browser::factory();
        Loop::enable($browser);

        $hits = 0;
        $schedule = new Schedule();
        $schedule->everySecond(function () use (&$hits) {
            $hits++;

            return delay(0.02);
        });

        $event = $schedule->events()[0];
        assertTrue($event->frequency()->hasSecondPrecision());
        assertSame('* * * * * *', $event->frequency()->cronExpression());

        $runner = new ScheduleRunner($schedule);
        $runner->start();

        wait(delay(2.5));
        $runner->stop();

        assertTrue($hits >= 1, 'every-second task should have run at least once');
    },

    'schedule_cron_rejects_invalid_field_count' => function (): void {
        $thrown = false;

        try {
            ScheduleFrequency::cron('* * *');
        } catch (\InvalidArgumentException) {
            $thrown = true;
        }

        assertTrue($thrown);
    },

    'schedule_cron_uses_expression' => function (): void {
        $schedule = new Schedule();
        $event = $schedule->cron('*/5 * * * *', fn () => null);

        assertFalse($event->frequency()->hasSecondPrecision());
        assertSame('*/5 * * * *', $event->frequency()->cronExpression());
    },

    'schedule_every_seconds_uses_six_field_cron' => function (): void {
        $schedule = new Schedule();
        $event = $schedule->everySeconds(5, fn () => null);

        assertTrue($event->frequency()->hasSecondPrecision());
        assertSame('*/5 * * * * *', $event->frequency()->cronExpression());
    },

    'schedule_dispatch_returns_promise' => function (): void {
        $schedule = new Schedule();
        $event = $schedule->everyMinute(function () {
            return delay(0.01)->then(fn () => 'done');
        });

        $result = Await::result((new ScheduleRunner($schedule))->dispatch($event));
        assertSame('done', $result);
    },

    'cron_expression_matches_minute' => function (): void {
        $time = new DateTimeImmutable('2026-09-19 14:30:00');
        assertTrue(CronExpression::matches('30 14 * * *', $time));
        assertFalse(CronExpression::matches('31 14 * * *', $time));
        assertTrue(CronExpression::matches('*/5 * * * *', new DateTimeImmutable('2026-09-19 14:35:00')));
        assertFalse(CronExpression::matches('*/5 * * * *', new DateTimeImmutable('2026-09-19 14:35:30')));
    },

    'cron_expression_matches_second' => function (): void {
        $time = new DateTimeImmutable('2026-09-19 14:30:45');
        assertTrue(CronExpression::matches('45 30 14 * * *', $time));
        assertFalse(CronExpression::matches('46 30 14 * * *', $time));
        assertTrue(CronExpression::matches('* * * * * *', $time));
        assertTrue(CronExpression::matches('*/5 * * * * *', new DateTimeImmutable('2026-09-19 14:30:10')));
    },
];
