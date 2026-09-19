# Jeely

A PHP library for building Telegram bots with typed Bot API methods, async polling, conversation flows, lightweight ORM, and cache — with minimal third-party dependencies.

**Requirements:** PHP 8.1+, Guzzle, Revolt Event Loop

📖 **[Full documentation](https://lorddeveloper.github.io/jeely/)** — installation, guides, examples, and GitHub Pages setup.

## Installation

```bash
composer require jeely/jeely
```

## Quick start

```php
use Jeely\Telegram;
use Jeely\Updater;

$telegram = new Telegram(getenv('BOT_TOKEN'));
$updater = new Updater($telegram);

$updater->onMessage(function ($message) use ($telegram) {
    $telegram->sendMessage([
        'chat_id' => $message->chat->id,
        'text' => 'Hello!',
    ]);
});

$updater->waitPolling();
```

---

## Step Manager

Manage multi-step conversations (wizards, forms, checkout flows) without baking slash commands into the core. Navigation is fully dynamic — wire your own buttons, callbacks, or text triggers.

### Concepts

| Piece | Role |
|-------|------|
| `StepManager` | Registry of flows, session lookup, `start()` / `handle()` |
| `Flow` | Named sequence of steps with hooks |
| `Step` | Single stage: `enter`, `handle`, `validate`, `skipIf` |
| `StepContext` | Runtime bag: user input, flow data, navigation helpers |
| `StepStoreInterface` | Persistence (`ArrayStepStore`, `CacheStepStore`) |

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

// Start when user sends any message (no built-in /start)
if (! $steps->isActive($update)) {
    $steps->start('register', $update, $telegram);
} else {
    $steps->handle($update, $telegram);
}
```

### Navigation actions

Return these from `handle` callbacks (or call programmatically on `StepManager`):

| Action | Method | Description |
|--------|--------|-------------|
| Next | `$ctx->next()` | Advance to the next step |
| Back | `$ctx->back()` | Return to the previous step |
| Jump | `$ctx->jump('step_name')` | Go to a specific step |
| Repeat | `$ctx->repeat()` | Re-run `enter` on the current step |
| Stay | `$ctx->stay()` | Keep session, do not advance |
| Cancel | `$ctx->cancel()` | End flow, run `onCancel` |
| Complete | `$ctx->complete()` | Finish flow, run `onComplete` |

Programmatic API: `$steps->back($update)`, `$steps->jump($update, 'qty')`, `$steps->repeat($update)`, `$steps->cancel($update)`.

### Session data

```php
$ctx->put('cart', $items);           // flow-level data
$ctx->get('cart', []);
$ctx->putHere('draft', $text);       // per-step scoped data
$ctx->getHere('draft');
$ctx->all();                         // entire flow bag
```

### Configuration

```php
$steps
    ->forBot($botId)                  // isolate sessions per bot
    ->scopeByChat(true)               // key by bot + user + chat (groups)
    ->defaultTtl(3600)                // session expiry (seconds)
    ->onConflict('replace')           // replace | reject | keep
    ->onValidationError(fn ($ctx, $msg) => $ctx->reply($msg));
```

### Persistent store

```php
use Jeely\Cache\FileCache;
use Jeely\Steps\CacheStepStore;

$cache = new FileCache(__DIR__ . '/storage/cache');
$steps = new StepManager(new CacheStepStore($cache));
```

### Validators

Built-in helpers in `StepValidators`: `required`, `minLength`, `maxLength`, `integer`, `numeric`, `regex`, `in(...)`, `all([...])`.

---

## Cache

PSR-style key/value cache with TTL. No Redis dependency — use in-memory, file, or APCu.

```php
use Jeely\Cache\Cache;
use Jeely\Cache\FileCache;
use Jeely\Cache\ArrayCache;

// Facade (defaults to ArrayCache)
Cache::set('user:1', ['name' => 'Ali'], 3600);
$user = Cache::get('user:1');
$value = Cache::remember('stats', 60, fn () => expensive());

// Explicit drivers
$file = new FileCache('/path/to/cache');
$file->set('key', 'value', 300);
```

| Driver | Class | Use case |
|--------|-------|----------|
| In-memory | `ArrayCache` | Tests, single process |
| File | `FileCache` | Simple persistence |
| APCu | `ApcuCache` | Shared memory (when ext-apcu available) |

---

## Database / ORM

Lightweight Active Record over PDO. SQLite-first; works with any PDO driver.

### Connection & schema

```php
use Jeely\Database\Connection;

$db = Connection::sqlite(__DIR__ . '/storage/app.db');
Connection::setDefault($db);

$db->schema()->create('users', function ($table) {
    $table->id();
    $table->string('name');
    $table->integer('telegram_id')->unique();
    $table->text('meta', true);       // nullable
    $table->boolean('active');
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

$db->query()->table('users')->where('telegram_id', 42)->first();
$db->query()->table('users')->where('id', 1)->update(['name' => 'Sara']);
$db->query()->table('users')->where('id', 1)->delete();
```

### Model

```php
use Jeely\Database\Model;

class User extends Model
{
    protected static ?string $table = 'users';

    protected static array $fillable = ['name', 'telegram_id', 'meta', 'active'];

    protected static array $casts = [
        'telegram_id' => 'int',
        'active' => 'bool',
        'meta' => 'array',
    ];
}

User::setConnection($db);

$user = User::create(['name' => 'Reza', 'telegram_id' => 42, 'active' => true]);
$user = User::find(1);
$user = User::where('telegram_id', 42)->first();
$user->name = 'Nima';
$user->save();
$user->delete();
```

---

## Logger

Simple leveled logger with pluggable writers.

```php
use Jeely\Log\Logger;

$log = Logger::stderr('bot', Logger::INFO);
$log->info('Polling started', ['offset' => 0]);
$log->error('API failed', ['code' => 429]);
```

Use `NullLogger` when logging is disabled.

---

## HTTP server (webhooks)

Tiny built-in server for webhook mode when Apache/Nginx is unavailable.

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

---

## Rich messages

Jeely supports Telegram rich messages (`sendRichMessage`) including RTL, styled buttons, and custom emoji markup. Use inline keyboards with `style` (`primary`, `success`, `danger`) for colored buttons.

When polling with `waitPolling()`, the client runs in async mode by default. For synchronous one-off API calls inside handlers, pass `['async' => false]`:

```php
$result = $telegram->getStickerSet(['name' => $packName, 'async' => false]);
```

---

## Tests

```bash
php tests/run.php
```

---

## Local examples

Runnable demos live in `examples/` with root entry scripts:

| Script | Demo |
|--------|------|
| `php bot.php` | Shop wizard (inline keyboard, cart) |
| `php progress.php` | Async progress bars & parallel jobs |
| `php emoji_pack.php` | Custom emoji pack listing |
| `php console.php` | CLI commands + Telegram bot |
| `php request.php` | Async HTTP requests |
| `php schedule.php` | Cron / scheduled tasks |

See [examples documentation](docs/examples/index.md) or the [online docs](https://lorddeveloper.github.io/jeely/examples/).

---

## License

Personal / project-specific — see repository owner for terms.
