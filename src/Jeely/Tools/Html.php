<?php

namespace Jeely\Tools;

/**
 * Telegram HTML parse_mode formatter.
 *
 * All content passed to styling methods is escaped automatically.
 * To nest styles, concatenate results instead of wrapping styled output:
 * Html::bold('Hi ') . Html::italic('there')
 */
class Html
{
    public static function escape(mixed $text): string
    {
        return htmlspecialchars(self::stringify($text), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }

    /** Alias for {@see escape()}. */
    public static function text(mixed $text): string
    {
        return self::escape($text);
    }

    public static function bold(mixed $text): string
    {
        return '<b>' . self::escape($text) . '</b>';
    }

    /** @alias bold */
    public static function b(mixed $text): string
    {
        return self::bold($text);
    }

    public static function italic(mixed $text): string
    {
        return '<i>' . self::escape($text) . '</i>';
    }

    /** @alias italic */
    public static function i(mixed $text): string
    {
        return self::italic($text);
    }

    public static function underline(mixed $text): string
    {
        return '<u>' . self::escape($text) . '</u>';
    }

    /** @alias underline */
    public static function u(mixed $text): string
    {
        return self::underline($text);
    }

    public static function strikethrough(mixed $text): string
    {
        return '<s>' . self::escape($text) . '</s>';
    }

    /** @alias strikethrough */
    public static function strike(mixed $text): string
    {
        return self::strikethrough($text);
    }

    /** @alias strikethrough */
    public static function del(mixed $text): string
    {
        return self::strikethrough($text);
    }

    /** @alias strikethrough */
    public static function s(mixed $text): string
    {
        return self::strikethrough($text);
    }

    public static function spoiler(mixed $text): string
    {
        return '<tg-spoiler>' . self::escape($text) . '</tg-spoiler>';
    }

    public static function code(mixed $text): string
    {
        return '<code>' . self::escape($text) . '</code>';
    }

    public static function pre(mixed $text, ?string $language = null): string
    {
        $content = self::escape($text);

        if ($language !== null && $language !== '') {
            $lang = self::escapeAttribute($language);

            return '<pre><code class="language-' . $lang . '">' . $content . '</code></pre>';
        }

        return '<pre>' . $content . '</pre>';
    }

    public static function link(string $url, mixed $text = null): string
    {
        $label = $text ?? $url;

        return '<a href="' . self::escapeAttribute($url) . '">' . self::escape($label) . '</a>';
    }

    /** @alias link */
    public static function href(string $url, mixed $text = null): string
    {
        return self::link($url, $text);
    }

    /** @alias link */
    public static function hyperlink(string $url, mixed $text = null): string
    {
        return self::link($url, $text);
    }

    public static function mention(int|string $userId, mixed $name): string
    {
        return self::link('tg://user?id=' . $userId, $name);
    }

    public static function emoji(string $customEmojiId, string $fallback): string
    {
        return '<tg-emoji emoji-id="' . self::escapeAttribute($customEmojiId) . '">'
            . self::escape($fallback)
            . '</tg-emoji>';
    }

    /** @alias emoji */
    public static function customEmoji(string $customEmojiId, string $fallback): string
    {
        return self::emoji($customEmojiId, $fallback);
    }

    public static function blockquote(mixed $text): string
    {
        return '<blockquote>' . self::escape($text) . '</blockquote>';
    }

    public static function expandableBlockquote(mixed $text): string
    {
        return '<blockquote expandable="expandable">' . self::escape($text) . '</blockquote>';
    }

    public static function time(int $unix, mixed $label, string $format = ''): string
    {
        $query = 'unix=' . $unix;
        if ($format !== '') {
            $query .= '&format=' . rawurlencode($format);
        }

        return self::link('tg://time?' . $query, $label);
    }

    public static function join(array $parts, string $separator = ''): string
    {
        return implode($separator, array_map(
            static fn (mixed $part): string => is_string($part) ? $part : self::escape($part),
            $parts,
        ));
    }

    private static function escapeAttribute(string $value): string
    {
        return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }

    private static function stringify(mixed $value): string
    {
        if ($value === null) {
            return '';
        }

        if (is_bool($value)) {
            return $value ? '1' : '0';
        }

        if (is_scalar($value)) {
            return (string) $value;
        }

        if ($value instanceof \Stringable) {
            return (string) $value;
        }

        return (string) $value;
    }
}
