---
title: Emoji Pack Bot
parent: Examples
nav_order: 4
---

# Emoji Pack Bot

**Path:** `examples/emojipack/`  
**Run:** `php emoji_pack.php`

Lists custom emoji from a Telegram emoji pack link.

## Usage

Send a custom emoji pack URL:

```
https://t.me/addemoji/AIActions
```

The bot fetches the sticker set and replies with formatted HTML listing each custom emoji ID.

## Features

- `getStickerSet` API call
- `Jeely\Tools\Html` for formatted output
- Custom emoji markup with `Html::emoji()`

## Key code

```php
use Jeely\Tools\Html;

$lines[] = Html::bold($set->title ?? $name);
$lines[] = Html::emoji($customEmojiId, $fallbackChar);
```

[← All examples](.)
