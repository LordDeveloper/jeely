---
title: Shop Bot
parent: Examples
nav_order: 2
---

# Shop Bot

**Path:** `examples/shopbot/`  
**Run:** `php bot.php`

A multi-step shopping wizard with inline keyboards, cart management, and order persistence.

## Features

- Product catalog with inline buttons
- Step-by-step checkout flow
- Cart stored via `OrderStore` (file cache)
- Custom emoji product icons (`ShopEmoji`)
- Rich message editing on callback queries

## Commands

| Command | Action |
|---------|--------|
| `/start` | Open shop menu |
| Inline buttons | Browse, add to cart, checkout |

## Key files

| File | Purpose |
|------|---------|
| `ShopHandler.php` | Main event handler |
| `OrderStore.php` | Cart/order persistence |
| `ShopEmoji.php` | Custom emoji IDs for products |
| `bootstrap.php` | Bot wiring |

## Highlights

```php
// Callback editing with bound telegram client
$ctx->callbackQuery()->editRich($markdown);

// Step-style ask/answer without StepManager (manual flow)
private function ask(Update $update, string $text): mixed
```

Demonstrates production patterns: callback routing, stateful carts, and `editRich` on callback messages.

[← All examples](.)
