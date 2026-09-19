---
title: Quick Start
parent: Getting Started
nav_order: 2
---

# Quick Start

Jeely offers two levels of API:

1. **Low-level** — `Telegram` + `Updater` (callbacks)
2. **High-level** — `Bot` + `EventHandler` (recommended)

## High-level: Bot + EventHandler

### 1. Create a handler

```php
<?php

namespace App;

use Jeely\Api\Update;
use Jeely\Handlers\EventHandler;

final class MyHandler extends EventHandler
{
    public function onMessage(Update $update): mixed
    {
        $text = trim((string) ($update->message()?->text ?? ''));

        if ($text === '/start') {
            return $update->reply('Hello! I am running on Jeely.');
        }

        return null;
    }
}
```

### 2. Bootstrap and run

```php
<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use App\MyHandler;
use Jeely\Bot;
use Jeely\Log\Logger;
use Jeely\Update\UpdateHandlerMode;

$token = getenv('JEELY_BOT_TOKEN');
if (! is_string($token) || $token === '') {
    fwrite(STDERR, "Set JEELY_BOT_TOKEN\n");
    exit(1);
}

$bot = new Bot($token, [], Logger::stderr('mybot'));

$bot->onError(function (\Throwable $e) use ($bot) {
    $bot->logger()->error('handler error: {message}', ['message' => $e->getMessage()]);
});

$bot->concurrency(8)
    ->run(UpdateHandlerMode::Polling, [
        'async' => true,
        'timeout' => 30,
        'allowed_updates' => ['message'],
    ])
    ->withHandler(MyHandler::class)
    ->start();
```

`start()` blocks and runs the Revolt event loop until interrupted (Ctrl+C).

## Low-level: Updater callbacks

```php
<?php

use Jeely\Telegram;
use Jeely\Updater;

$telegram = new Telegram(getenv('JEELY_BOT_TOKEN'));
$updater = new Updater($telegram);

$updater->onMessage(function ($message) use ($telegram) {
    $telegram->sendMessage([
        'chat_id' => $message->chat->id,
        'text' => 'Hello!',
        'async' => true,
    ]);
});

$updater->waitPolling(['async' => true]);
```

## Bound methods on Update

Updates expose convenience methods via mixins:

```php
$update->reply('plain text');
$update->replyRich(['bold' => 'Hello']);
$update->message()?->edit('Updated text');
$update->callbackQuery()?->answer('Done!');
```

## Return promises for async work

Handlers can return a `PromiseInterface` to defer completion without blocking other updates:

```php
use GuzzleHttp\Promise\PromiseInterface;

public function onMessage(Update $update): PromiseInterface
{
    return delay(2.0)->then(fn () => $update->reply('Done after 2 seconds'));
}
```

Global helpers (from `src/functions.php`):

- `delay(float $seconds)` — non-blocking timer
- `wait(PromiseInterface $p)` — block until settled
- `all(array $promises)` — parallel wait

## Register extensions on Bot

```php
$bot->schedule(function ($schedule) {
    $schedule->everyMinute(fn () => $bot->logger()->info('tick'));
});

$bot->console(function ($console) {
    $console->register(MyCommand::class);
});

$http = $bot->request()->asJson()->get('https://api.example.com/data');
```

Inside an `EventHandler`, access services via magic properties:

```php
$this->telegram;
$this->logger;
$this->request;
$this->cache;
$this->schedule;
$this->console;
```

Next: [Event Handlers](../guide/event-handlers)
