---
title: Steps, Cache & Database
parent: Guide
nav_order: 7
---

# Steps, Cache & Database

## Step Manager

Multi-step conversations (wizards, checkout, forms) without hard-coded slash commands in the core library.

### Concepts

| Class | Role |
|-------|------|
| `StepManager` | Flow registry, `start()` / `handle()` |
| `Flow` | Named sequence of steps |
| `Step` | Single stage with `enter`, `handle`, `validate` |
| `StepContext` | Runtime data bag + navigation |
| `StepStoreInterface` | Session persistence |

### Basic flow

```php
use Jeely\Steps\StepManager;
use Jeely\Steps\StepValidators;

$steps = new StepManager();

$steps->flow('register', function ($flow) {
    $flow->step('name', function ($step) {
        $step->enter(fn ($ctx) => 'What is your name?');
        $step->handle(function ($ctx) {
            $ctx->put('name', trim((string) $ctx->text()));
            return $ctx->next();
        });
    });

    $flow->step('age', function ($step) {
        $step->enter(fn ($ctx) => 'How old are you?');
        $step->validate(StepValidators::integer('Age must be a number.'));
        $step->handle(function ($ctx) {
            $ctx->put('age', (int) $ctx->text());
            return $ctx->next();
        });
    });

    $flow->onComplete(fn ($ctx) => 'Thanks, ' . $ctx->get('name') . '!');
});
```

### Navigation actions

| Action | Method |
|--------|--------|
| Next | `$ctx->next()` |
| Back | `$ctx->back()` |
| Jump | `$ctx->jump('step_name')` |
| Repeat | `$ctx->repeat()` |
| Stay | `$ctx->stay()` |
| Cancel | `$ctx->cancel()` |
| Complete | `$ctx->complete()` |

### Persistent sessions

```php
use Jeely\Cache\FileCache;
use Jeely\Steps\CacheStepStore;

$cache = new FileCache(__DIR__ . '/storage/cache');
$steps = new StepManager(new CacheStepStore($cache));
```

See **shopbot** for a full inline-keyboard shop wizard.

---

## Cache

PSR-style key/value cache with TTL.

```php
use Jeely\Cache\Cache;
use Jeely\Cache\FileCache;

Cache::set('user:1', ['name' => 'Ali'], 3600);
$user = Cache::get('user:1');
$value = Cache::remember('stats', 60, fn () => expensive());

$file = new FileCache('/path/to/cache');
$file->set('key', 'value', 300);
```

| Driver | Class |
|--------|-------|
| In-memory | `ArrayCache` |
| File | `FileCache` |
| APCu | `ApcuCache` |

In `EventHandler`: `$this->cache->get('key')`.

---

## Database / ORM

Lightweight Active Record over PDO (SQLite-first).

```php
use Jeely\Database\Connection;

$db = Connection::sqlite(__DIR__ . '/storage/app.db');
Connection::setDefault($db);

$db->schema()->create('users', function ($table) {
    $table->id();
    $table->string('name');
    $table->integer('telegram_id')->unique();
    $table->timestamps();
});
```

### Query builder

```php
$db->query()->table('users')
    ->where('active', 1)
    ->orderBy('id', 'desc')
    ->limit(10)
    ->get();
```

### Model

```php
use Jeely\Database\Model;

class User extends Model
{
    protected static ?string $table = 'users';
    protected static array $fillable = ['name', 'telegram_id'];
}

User::setConnection($db);
$user = User::create(['name' => 'Reza', 'telegram_id' => 42]);
```

{: .note }
Blocking PDO calls inside the event loop will block other handlers. Offload heavy DB work or keep queries fast.

---

## Logger

```php
use Jeely\Log\Logger;

$log = Logger::stderr('bot', Logger::INFO);
$log->info('Polling started', ['offset' => 0]);
$log->error('API failed', ['code' => 429]);
```

In handlers: `$this->logger->debug('message', ['key' => 'value']);`

---

## HTTP server (webhooks)

Built-in server when nginx/Apache is unavailable:

```php
use Jeely\Server\HttpServer;

$server = new HttpServer('0.0.0.0', 8080);
$server->onRequest(function ($method, $path, $body, $headers) use ($updater) {
    if ($method === 'POST' && $path === '/webhook') {
        $updater->handleWebhook($body);
        return ['status' => 200, 'body' => 'ok'];
    }
    return ['status' => 404, 'body' => 'not found'];
});
$server->run();
```

Or use `UpdateHandlerMode::Server` on `Bot::run()`.

Next: [Examples](../examples)
