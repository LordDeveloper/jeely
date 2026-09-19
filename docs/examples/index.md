---
title: Examples
nav_order: 4
has_children: true
permalink: /examples/
---

# Examples

Runnable demo bots under `examples/`. Each has `bootstrap.php`, `run.php`, and an `EventHandler`.

## Prerequisites

```bash
composer install
export JEELY_BOT_TOKEN=your_token_here
```

## Entry points

| Script | Example | Demonstrates |
|--------|---------|--------------|
| `php bot.php` | shopbot | Multi-step shop, inline keyboard, cart |
| `php progress.php` | progressbot | Async `delay()`, progress bars, parallel jobs |
| `php emoji_pack.php` | emojipack | Custom emoji packs, `Html` formatter |
| `php console.php` | consolebot | CLI commands + Telegram bot |
| `php request.php` | requestbot | Async HTTP via `$this->request` |
| `php schedule.php` | schedulebot | Cron tasks, counters, admin ping |

## Environment

| Variable | Description |
|----------|-------------|
| `JEELY_BOT_TOKEN` | Required bot token |
| `JEELY_MODE` | `polling` (default), `server`, `webhook` |
| `JEELY_LOG_LEVEL` | `debug`, `info`, `warning`, `error` |
| `JEELY_ADMIN_CHAT_ID` | schedulebot daily report target |

## Browse

- [Shop Bot](shopbot)
- [Progress Bot](progressbot)
- [Emoji Pack Bot](emojipack)
- [Console Bot](consolebot)
- [Request Bot](requestbot)
- [Schedule Bot](schedulebot)
