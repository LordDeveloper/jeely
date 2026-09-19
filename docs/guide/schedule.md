---
title: Schedule / Cron
parent: Guide
nav_order: 3
---

# Schedule / Cron

Background tasks run on the Revolt event loop alongside update handling. Register tasks before `BotRunner::start()` — the runner auto-starts `ScheduleRunner`.

## Register tasks

```php
use Jeely\Schedule\Schedule;

$bot->schedule(function (Schedule $schedule) use ($bot) {
    $schedule->everyMinute(function () use ($bot) {
        $bot->logger()->info('heartbeat');
        return null;
    })->name('heartbeat');

    $schedule->everySeconds(15, function () {
        // runs every 15 seconds
        return null;
    })->name('fast-tick')->withoutOverlapping();
});
```

## Cron expressions

Jeely supports **5-field** and **6-field** cron:

| Fields | Format | Fires at |
|--------|--------|----------|
| 5 | `minute hour day month weekday` | Second **0** of matching minute |
| 6 | `second minute hour day month weekday` | Exact second match |

### Shorthand methods

| Method | Cron | Description |
|--------|------|-------------|
| `everySecond($cb)` | `* * * * * *` | Every second |
| `everySeconds(n, $cb)` | `*/n * * * * *` | Every n seconds |
| `everyMinute($cb)` | `* * * * *` | Every minute |
| `hourly($cb)` | `0 * * * *` | Top of every hour |
| `daily($cb)` | `0 0 * * *` | Midnight daily |
| `cron(expr, $cb)` | Custom | Full control |

### Examples

```php
// Every day at 09:00:00 (6-field)
$schedule->cron('0 0 9 * * *', $callback);

// Every 5 minutes (5-field)
$schedule->cron('*/5 * * * *', $callback);

// Every 30 seconds (6-field)
$schedule->everySeconds(30, $callback);
```

## ScheduledEvent options

```php
$schedule->everyMinute($callback)
    ->name('reports')           // for logging
    ->withoutOverlapping();     // skip if previous run still active
```

## Async callbacks

Callbacks may return a promise:

```php
$schedule->everyMinute(function () use ($bot) {
    return $bot->telegram()->sendMessage([
        'chat_id' => $adminId,
        'text' => 'Daily report',
        'async' => true,
    ]);
});
```

## How it works

`ScheduleRunner` ticks every **1 second**, evaluates `CronExpression::matches()` for each event, and dispatches due tasks via `Await::promise()`. Errors are logged and do not crash the bot.

## Access from EventHandler

```php
$this->schedule->events(); // if schedule was registered on Bot
```

See the **schedulebot** example for live counters and admin notifications.

Next: [Console CLI](console)
