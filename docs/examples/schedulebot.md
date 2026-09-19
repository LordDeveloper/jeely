---
title: Schedule Bot
parent: Examples
nav_order: 7
---

# Schedule Bot

**Path:** `examples/schedulebot/`  
**Run:** `php schedule.php`

Demonstrates **cron scheduling** running alongside Telegram polling.

## Scheduled tasks

| Task | Schedule | Action |
|------|----------|--------|
| `heartbeat` | `everyMinute()` | Log + increment counter |
| `fast-tick` | `everySeconds(15)` | Fast counter + `withoutOverlapping()` |
| `daily-report` | `0 0 9 * * *` | Daily log + optional admin message |

## Telegram commands

| Command | Description |
|---------|-------------|
| `/start`, `/help` | Help |
| `/stats` | Live counter snapshot |

## Optional admin notification

```bash
export JEELY_ADMIN_CHAT_ID=123456789
php schedule.php
```

Daily task at 09:00 sends a report to the admin chat.

## Registration

```php
$bot->schedule(function (Schedule $schedule) use ($logger, $bot) {
    $schedule->everyMinute(function () use ($logger) {
        StatsStore::tickMinute();
        $logger->info('cron: everyMinute');
        return null;
    })->name('heartbeat');
});
```

`BotRunner::start()` automatically starts `ScheduleRunner`.

[← All examples](.)
