---
title: Installation
parent: Getting Started
nav_order: 1
---

# Installation

## Requirements

| Requirement | Version |
|-------------|---------|
| PHP | 8.1 or higher |
| Composer | 2.x |
| Guzzle | ^7.5 (installed automatically) |
| Revolt Event Loop | ^1.0 (installed automatically) |

Recommended PHP extensions:

- `ext-json`
- `ext-mbstring`
- `ext-curl`

## Install via Composer

From Packagist (when published):

```bash
composer require jeely/jeely
```

From a local clone:

```bash
git clone https://github.com/jeely/jeely.git
cd jeely
composer install
```

## Get a Telegram bot token

1. Open [@BotFather](https://t.me/BotFather) in Telegram.
2. Send `/newbot` and follow the prompts.
3. Copy the token (format: `123456789:AAH...`).

## Environment variables

Jeely examples use these environment variables:

| Variable | Required | Default | Description |
|----------|----------|---------|-------------|
| `JEELY_BOT_TOKEN` | Yes | — | Bot token from BotFather |
| `JEELY_MODE` | No | `polling` | `polling`, `server`, or `webhook` |
| `JEELY_LOG_LEVEL` | No | `debug` | Logger level |
| `JEELY_POLL_TIMEOUT` | No | `30` | Long-polling timeout (seconds) |
| `JEELY_SSL_VERIFY` | No | off | Set to `1` to verify SSL |
| `JEELY_HOST` | No | `0.0.0.0` | Built-in server bind address |
| `JEELY_PORT` | No | `8080` | Built-in server port |
| `JEELY_WEBHOOK_PATH` | No | `/webhook` | Webhook URL path |
| `JEELY_WEBHOOK_SECRET` | No | — | Webhook secret token |
| `JEELY_ADMIN_CHAT_ID` | No | — | Admin chat for schedulebot alerts |

### Linux / macOS

```bash
export JEELY_BOT_TOKEN="123456789:AAH..."
export JEELY_MODE=polling
php bot.php
```

### Windows (PowerShell)

```powershell
$env:JEELY_BOT_TOKEN = "123456789:AAH..."
php bot.php
```

## Project layout (recommended)

```
my-bot/
├── composer.json
├── vendor/
├── src/
│   └── MyHandler.php
├── storage/
│   └── cache/
└── bot.php
```

## Autoload your handlers

```json
{
  "autoload": {
    "psr-4": {
      "App\\": "src/"
    }
  }
}
```

Run `composer dump-autoload` after adding classes.

## Verify installation

```bash
php tests/run.php
```

All tests should pass. You can also run a bundled example:

```bash
export JEELY_BOT_TOKEN=your_token
php progress.php
```

Next: [Quick Start](quick-start)
