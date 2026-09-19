---
title: Request Bot
parent: Examples
nav_order: 6
---

# Request Bot

**Path:** `examples/requestbot/`  
**Run:** `php request.php`

Demonstrates async **HTTP requests** via `$this->request` inside an EventHandler.

## Commands

| Command | Description |
|---------|-------------|
| `/start`, `/help` | Help |
| `/todo [id]` | Fetch todo from jsonplaceholder |
| `/quote` | Random quote from quotable.io |
| `/parallel` | 3 parallel GET requests |
| `/ping` | Instant reply during fetches |

## Key pattern

```php
return $this->request
    ->asJson()
    ->timeout(10)
    ->get('https://jsonplaceholder.typicode.com/todos/1')
    ->then(function (HttpResponse $response) use ($update) {
        return $update->reply($response->json()['title'] ?? '?');
    });
```

Parallel requests:

```php
all([
    $client->get('.../todos/1'),
    $client->get('.../todos/2'),
    $client->get('.../todos/3'),
]);
```

Uses the same Guzzle browser as Telegram — no extra blocking I/O layer.

[← All examples](.)
