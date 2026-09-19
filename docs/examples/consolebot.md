---
title: Console Bot
parent: Examples
nav_order: 5
---

# Console Bot

**Path:** `examples/consolebot/`  
**Run (CLI):** `php console.php ping`  
**Run (bot):** `php console.php --bot`

Demonstrates Jeely **Console** — async CLI commands sharing the bot container and event loop.

## CLI commands

| Command | Description |
|---------|-------------|
| `list` | Show all commands |
| `ping` | Async delay + pong |
| `info` | Bot identity via `getMe` |
| `echo` | Print arguments |

```bash
php console.php list
php console.php ping
php console.php info
php console.php echo hello async world
```

## Telegram commands

| Command | Description |
|---------|-------------|
| `/start`, `/help` | Usage guide |
| `/commands` | List CLI commands from Telegram |

## Key files

```
examples/consolebot/
├── Commands/
│   ├── PingCommand.php
│   ├── InfoCommand.php
│   └── EchoCommand.php
├── ConsoleHandler.php
├── cli.php
└── bootstrap.php   # registers console commands
```

## Registration

```php
$bot->console(function ($console) {
    $console
        ->register(PingCommand::class)
        ->register(InfoCommand::class)
        ->register(EchoCommand::class);
});
```

[← All examples](.)
