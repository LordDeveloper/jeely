---
title: Event Handlers
parent: Guide
nav_order: 1
---

# Event Handlers

The `EventHandler` base class provides a MadelineProto-style API: override typed methods and optionally fall back to `onAny()`.

## Available hooks

| Method | Update type |
|--------|-------------|
| `onMessage` | New message |
| `onEditedMessage` | Edited message |
| `onCallbackQuery` | Inline button press |
| `onInlineQuery` | Inline mode query |
| `onChatMember` | Member status change |
| `onChatJoinRequest` | Join request |
| `onPreCheckoutQuery` | Payment pre-checkout |
| `onShippingQuery` | Shipping query |
| `onPoll` / `onPollAnswer` | Polls |
| `onAny` | Fallback for all types |

Returning `null` from a typed handler falls through to `onAny()`.

## Registration

```php
$bot->run()
    ->withHandler(MyHandler::class)   // class name — resolved via DI
    ->withHandler(new MyHandler())    // instance
    ->withHandler(function (Update $u) { /* closure */ })
    ->start();
```

## Dependency injection

`Bot` registers default services in its container:

| Key / Class | Service |
|-------------|---------|
| `telegram` / `Telegram` | Bot API client |
| `logger` / `LoggerInterface` | Logger |
| `cache` / `CacheInterface` | Default cache store |
| `request` / `PendingRequest` | HTTP client |
| `schedule` / `Schedule` | Cron scheduler (if registered) |
| `console` / `ConsoleApplication` | CLI (if registered) |

Access from handler:

```php
final class ShopHandler extends EventHandler
{
    protected function onBoot(): void
    {
        $this->logger->info('ShopHandler booted');
    }

    public function onMessage(Update $update): mixed
    {
        $item = $this->cache->get('cart:' . $update->user()?->id);
        // ...
    }
}
```

Register custom bindings:

```php
$bot->container()->singleton(OrderStore::class, fn () => new OrderStore());
```

## Middleware

### Bot-level

```php
$bot->middleware(function (Update $update, callable $next) {
    $bot->logger()->debug('update {id}', ['id' => $update->update_id]);

    return $next($update);
});
```

### Handler-level

```php
final class MyHandler extends EventHandler
{
    public function __construct()
    {
        $this->middleware(function (Update $update, callable $next) {
            // per-handler middleware
            return $next($update);
        });
    }
}
```

Middleware runs in order: bot middleware → handler middleware → handler method.

## Error handling

```php
$bot->onError(function (\Throwable $e, ?Update $update = null) use ($bot) {
    $bot->logger()->error('uncaught: {message}', ['message' => $e->getMessage()]);
});
```

## Handler routing

`HandlerInvoker` maps the update type to the correct `on*` method. Only one handler in a `withHandler` chain needs to return non-null to stop propagation when using multiple handlers via `combineHandlers` in `BotRunner`.

## Example: callback query

```php
public function onCallbackQuery(Update $update): mixed
{
    $data = $update->callbackQuery()?->data ?? '';

    if ($data === 'buy') {
        return $update->callbackQuery()
            ->answer('Added to cart!')
            ->then(fn () => $update->callbackQuery()->edit('Cart updated.'));
    }

    return null;
}
```

Next: [Async & Modes](async)
