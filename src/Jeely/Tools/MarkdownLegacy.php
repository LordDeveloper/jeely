<?php

namespace Jeely\Tools;

/**
 * Telegram legacy Markdown parse_mode formatter (not MarkdownV2).
 *
 * Supports only bold, italic, code, pre, and links. No underline/spoiler/blockquote.
 */
class MarkdownLegacy
{
    private const LEGACY_ESCAPE = '_*`[';

    public static function escape(mixed $text): string
    {
        return self::escapeLegacy(self::stringify($text));
    }

    /** Alias for {@see escape()}. */
    public static function text(mixed $text): string
    {
        return self::escape($text);
    }

    public static function bold(mixed $text): string
    {
        return '*' . self::escape($text) . '*';
    }

    public static function italic(mixed $text): string
    {
        return '_' . self::escape($text) . '_';
    }

    public static function code(mixed $text): string
    {
        return '`' . self::escapeCode(self::stringify($text)) . '`';
    }

    public static function pre(mixed $text, ?string $language = null): string
    {
        $content = self::escapeCode(self::stringify($text));

        if ($language !== null && $language !== '') {
            return "```{$language}\n{$content}```";
        }

        return "```\n{$content}\n```";
    }

    public static function link(mixed $text, string $url): string
    {
        return '[' . self::escape($text) . '](' . self::escapeLinkTarget($url) . ')';
    }

    /** @alias link */
    public static function href(string $url, mixed $text = null): string
    {
        return self::link($text ?? $url, $url);
    }

    public static function mention(int|string $userId, mixed $name): string
    {
        return self::link($name, 'tg://user?id=' . $userId);
    }

    public static function join(array $parts, string $separator = ''): string
    {
        return implode($separator, array_map(
            static fn (mixed $part): string => is_string($part) ? $part : self::escape($part),
            $parts,
        ));
    }

    private static function escapeLegacy(string $text): string
    {
        return preg_replace('/([' . preg_quote(self::LEGACY_ESCAPE, '/') . '\\\\])/u', '\\\\$1', $text) ?? $text;
    }

    private static function escapeCode(string $text): string
    {
        return preg_replace('/([\\\\`])/u', '\\\\$1', $text) ?? $text;
    }

    private static function escapeLinkTarget(string $text): string
    {
        return preg_replace('/([\\\\)])/', '\\\\$1', $text) ?? $text;
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
