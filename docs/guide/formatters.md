---
title: Text Formatters
parent: Guide
nav_order: 6
---

# Text Formatters

Helpers for Telegram `parse_mode` strings with automatic escaping of special characters.

## Html (`Jeely\Tools\Html`)

For `parse_mode: HTML`:

```php
use Jeely\Tools\Html;

$text = Html::bold('Hello')
    . ' '
    . Html::link('Jeely', 'https://github.com/jeely/jeely')
    . "\n"
    . Html::code('/start')
    . "\n"
    . Html::blockquote('A quote');

$update->reply($text, ['parse_mode' => 'HTML']);
```

| Method | Tag |
|--------|-----|
| `escape($text)` | HTML entities |
| `bold($text)` | `<b>` |
| `italic($text)` | `<i>` |
| `underline($text)` | `<u>` |
| `strikethrough($text)` | `<s>` |
| `spoiler($text)` | `<tg-spoiler>` |
| `code($text)` | `<code>` |
| `pre($text, $lang?)` | `<pre>` |
| `link($text, $url)` | `<a href>` |
| `blockquote($text)` | `<blockquote>` |
| `emoji($id, $fallback)` | Custom emoji |

Aliases: `href()`, `hyperlink()` for links.

## MarkdownV2 (`Jeely\Tools\Markdown`)

For `parse_mode: MarkdownV2` — auto-escapes `_*[]()~\`>#+-=|{}.!`:

```php
use Jeely\Tools\Markdown;

$text = Markdown::bold('Hello')
    . ' '
    . Markdown::link('Docs', 'https://example.com');

$update->reply($text, ['parse_mode' => 'MarkdownV2']);
```

## Markdown Legacy (`Jeely\Tools\MarkdownLegacy`)

Subset of original Markdown (`*bold*`, `_italic_`, `` `code` ``, `[text](url)`).

## Rich messages

For `sendRichMessage` with structured blocks, use the Bot API rich types directly. Formatters above cover classic `sendMessage` + `parse_mode`.

See **emojipack** example for `Html::bold`, `Html::code`, and custom emoji markup.

Next: [Steps, Cache & Database](steps-cache-database)
