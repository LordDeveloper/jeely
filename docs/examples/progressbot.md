---
title: Progress Bot
parent: Examples
nav_order: 3
---

# Progress Bot

**Path:** `examples/progressbot/`  
**Run:** `php progress.php`

Demonstrates **non-blocking async** work: long jobs return promises so polling stays responsive.

## Commands

| Command | Description |
|---------|-------------|
| `/start`, `/help` | Help text |
| `/progress [sec]` | Animated progress bar (2–30 sec) |
| `/parallel [n]` | Run n workers concurrently (2–8) |
| `/ping` | Instant reply while jobs run |

## Try this

1. Send `/progress 15` in one chat.
2. While it runs, send `/ping` from another chat (or same chat).
3. Both work — the event loop is not blocked by `sleep()`.

## Key technique

Uses `delay()` instead of `sleep()`:

```php
return delay(1.0)->then(fn () => $message->edit($nextText));
```

Active job counter tracks in-flight promises via `track()`.

[← All examples](.)
