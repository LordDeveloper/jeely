---
title: Console CLI
parent: Guide
nav_order: 4
---

# Console CLI

Jeely includes a lightweight async console for terminal commands — useful for maintenance, stats, one-off jobs, and deployment scripts sharing the same Guzzle browser and event loop as your bot.

## Register commands

```php
$bot->console(function ($console) {
    $console
        ->register(PingCommand::class)
        ->register(InfoCommand::class);
});
```

## Create a command

```php
<?php

namespace App\Commands;

use Jeely\Console\Command;

final class PingCommand extends Command
{
    public function name(): string
    {
        return 'ping';
    }

    public function description(): string
    {
        return 'Async ping';
    }

    public function handle(): mixed
    {
        $this->output->writeln('waiting…');

        return delay(0.2)->then(function () {
            $this->output->writeln('<info>pong</info>');
            return 0;
        });
    }
}
```

`handle()` may return:

- `int` exit code
- `PromiseInterface` resolving to exit code
- Any value (treated as exit 0)

## Run from terminal

```bash
php console.php list
php console.php ping
php console.php info
php console.php echo hello world
```

Or programmatically:

```php
$code = $bot->console()->run(['mybot', 'ping']);
```

## Dependency injection in commands

Commands receive the bot container in `boot()`:

```php
public function handle(): mixed
{
    $telegram = $this->container->get('telegram');
    $me = $telegram->getMe(['async' => false]);
    // ...
}
```

## Input helpers

```php
$this->input->command();     // argv[1]
$this->input->args();        // argv[2..]
$this->input->arg(0, 'default');
$this->input->has('--verbose');
```

## Output helpers

```php
$this->output->writeln('plain text');
$this->output->writeln('<info>success</info>');
$this->output->writeln('<error>failed</error>');
$this->output->writeln('<comment>hint</comment>');
```

## Bot + CLI together

The **consolebot** example runs Telegram polling with `php console.php --bot` and CLI commands without `--bot`:

```bash
php console.php ping          # CLI only
php console.php --bot         # start Telegram bot
```

Inside the Telegram bot, `/commands` lists registered CLI commands.

Next: [HTTP Request](http-request)
