---
title: Async & Modes
parent: Guide
nav_order: 2
---

# Async & Update Modes

Jeely is **async-first**: Telegram API calls and handlers can return Guzzle promises, powered by the Revolt event loop.

## Async mode

Pass `async => true` in run options (default for `Bot::run()`):

```php
$bot->run(UpdateHandlerMode::Polling, ['async' => true])
    ->withHandler(MyHandler::class)
    ->start();
```

`RunOptions::applyAsync()` strips `async` / `asynchronous` from options and calls `$telegram->async(true)`.

Per-call override:

```php
$telegram->sendMessage(['chat_id' => 1, 'text' => 'hi', 'async' => false]);
```

Use `async => false` for one-off synchronous calls inside a handler when you need the result immediately.

## Global helpers

Loaded via `src/functions.php`:

| Function | Purpose |
|----------|---------|
| `delay(float $sec)` | Non-blocking timer promise |
| `wait($promise)` | Block until promise settles |
| `all($promises)` | Wait for all promises |
| `task(callable $fn)` | Defer to task queue |
| `queue()` | Guzzle promise task queue |

## Non-blocking long jobs

```php
public function onMessage(Update $update): PromiseInterface
{
    return $this->reply($update, 'Starting…')
        ->then(fn () => delay(3.0))
        ->then(fn () => $update->reply('Finished!'));
}
```

While one chat waits on `delay()`, other updates still process — see the **progressbot** example.

## Concurrency

```php
$bot->concurrency(16); // max parallel update handlers
```

## Update modes

`UpdateHandlerMode` enum:

| Mode | Method | Use case |
|------|--------|----------|
| `Polling` | `waitPolling()` | Local dev, VPS without public URL |
| `Server` | `waitServer()` | Built-in HTTP server + webhook path |
| `Webhook` | `waitWebhook()` | You provide HTTP endpoint (nginx, etc.) |

### Polling (default)

```php
$bot->run(UpdateHandlerMode::Polling, [
    'async' => true,
    'timeout' => 30,
    'allowed_updates' => ['message', 'callback_query'],
])->withHandler(MyHandler::class)->start();
```

Environment: `JEELY_MODE=polling`

### Built-in server

```php
$bot->run(UpdateHandlerMode::Server, [
    'async' => true,
    'host' => '0.0.0.0',
    'port' => 8080,
    'path' => '/webhook',
    'secret' => 'my-secret',
])->withHandler(MyHandler::class)->start();
```

Point Telegram webhook to `https://your-domain:8080/webhook`.

Environment: `JEELY_MODE=server`

### External webhook

```php
$bot->run(UpdateHandlerMode::Webhook, ['async' => true])
    ->withHandler(MyHandler::class)
    ->start();
```

Your web server forwards POST body to the updater. See [Jeely HTTP server](../guide/steps-cache-database#http-server) for a minimal built-in alternative.

## Sync vs async polling

| | Async (`async: true`) | Sync (`async: false`) |
|--|----------------------|----------------------|
| Handler returns promise | Other updates run concurrently | Blocked until promise resolves |
| Long `delay()` | Non-blocking | Blocks polling |
| Best for | Production bots | Simple scripts, debugging |

Next: [Schedule / Cron](schedule)
