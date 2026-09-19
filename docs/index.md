---
title: Home
layout: default
nav_order: 1
description: "Jeely — async PHP library for Telegram bots"
permalink: /
---

# Jeely

Jeely is a PHP 8.1+ library for building **Telegram bots** with typed Bot API methods, **async polling**, event handlers, dependency injection, cron scheduling, CLI console, HTTP client, conversation flows, cache, and a lightweight ORM.

## Features

| Feature | Description |
|---------|-------------|
| **Typed Bot API** | Auto-generated methods and types from Telegram schema |
| **Async-first** | Revolt event loop + Guzzle promises — handlers can return promises |
| **Bot runner** | `Bot::run()->withHandler()->start()` with DI and middleware |
| **Event handlers** | MadelineProto-style `onMessage`, `onCallbackQuery`, … |
| **Schedule / Cron** | 5- or 6-field cron expressions, sub-minute support |
| **Console** | Async CLI commands sharing the same event loop |
| **HTTP Request** | Non-blocking HTTP via shared Guzzle browser |
| **Text formatters** | `Html`, `Markdown`, `MarkdownLegacy` helpers |
| **Step Manager** | Multi-step wizards without baking commands into core |
| **Cache & ORM** | Array, file, APCu cache; SQLite-first Active Record |

## Requirements

- PHP **8.1+**
- Extensions: `json`, `mbstring`, `curl` (recommended)
- Composer

## Quick install

```bash
composer require jeely/jeely
```

Set your bot token:

```bash
export JEELY_BOT_TOKEN=123456:ABC-DEF...
```

Minimal bot:

```php
<?php

require 'vendor/autoload.php';

use Examples\Mybot\MyHandler;
use Jeely\Bot;
use Jeely\Update\UpdateHandlerMode;

$bot = new Bot(getenv('JEELY_BOT_TOKEN'));

$bot->run(UpdateHandlerMode::Polling, ['async' => true])
    ->withHandler(MyHandler::class)
    ->start();
```

## Documentation map

| Section | Topics |
|---------|--------|
| [Getting Started](getting-started/installation) | Install, env vars, first bot |
| [Event Handlers](guide/event-handlers) | `EventHandler`, DI, middleware |
| [Async & Modes](guide/async) | Promises, polling, webhook, server |
| [Schedule / Cron](guide/schedule) | Background tasks |
| [Console CLI](guide/console) | Terminal commands |
| [HTTP Request](guide/http-request) | Async HTTP client |
| [Text Formatters](guide/formatters) | HTML & Markdown helpers |
| [Steps, Cache, DB](guide/steps-cache-database) | Flows, persistence, ORM |
| [Examples](examples) | Runnable demo bots |
| [GitHub Pages](deployment/github-pages) | Publish this documentation |

## Run tests

```bash
php tests/run.php
```

## License

See the repository owner for license terms.
