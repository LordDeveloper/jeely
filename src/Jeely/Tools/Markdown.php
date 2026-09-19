<?php

namespace Jeely\Tools;

/**
 * Telegram MarkdownV2 parse_mode formatter.
 *
 * All content passed to styling methods is escaped automatically.
 * To nest styles, concatenate results instead of wrapping styled output:
 * Markdown::bold('Hi ') . Markdown::italic('there')
 */
class Markdown
{
    private const V2_ESCAPE = '_*[]()~`>#+-=|{}.!\\';

    public static function escape(mixed $text): string
    {
        return self::escapeV2(self::stringify($text));
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

    /** @alias bold */
    public static function b(mixed $text): string
    {
        return self::bold($text);
    }

    public static function italic(mixed $text): string
    {
        return '_' . self::escape($text) . '_';
    }

    /** @alias italic */
    public static function i(mixed $text): string
    {
        return self::italic($text);
    }

    public static function underline(mixed $text): string
    {
        return '__' . self::escape($text) . '__';
    }

    /** @alias underline */
    public static function u(mixed $text): string
    {
        return self::underline($text);
    }

    public static function strikethrough(mixed $text): string
    {
        return '~' . self::escape($text) . '~';
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
        return '||' . self::escape($text) . '||';
    }

    public static function code(mixed $text): string
    {
        return '`' . self::escapeCode(self::stringify($text)) . '`';
    }

    public static function pre(mixed $text, ?string $language = null): string
    {
        $content = self::escapeCode(self::stringify($text));

        if ($language !== null && $language !== '') {
            return '```' . self::escapeCode($language) . "\n" . $content . "\n```";
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

    /** @alias link */
    public static function hyperlink(string $url, mixed $text = null): string
    {
        return self::href($url, $text);
    }

    public static function mention(int|string $userId, mixed $name): string
    {
        return self::link($name, 'tg://user?id=' . $userId);
    }

    public static function emoji(string $fallback, string $customEmojiId): string
    {
        return '![' . self::escape($fallback) . '](tg://emoji?id=' . self::escapeLinkTarget($customEmojiId) . ')';
    }

    /** @alias emoji */
    public static function customEmoji(string $fallback, string $customEmojiId): string
    {
        return self::emoji($fallback, $customEmojiId);
    }

    public static function blockquote(mixed $text): string
    {
        $lines = preg_split('/\R/u', self::stringify($text)) ?: [''];

        return implode("\n", array_map(
            static fn (string $line): string => '>' . self::escape($line),
            $lines,
        ));
    }

    public static function expandableBlockquote(mixed $text): string
    {
        $lines = preg_split('/\R/u', self::stringify($text)) ?: [''];
        $formatted = [];

        foreach ($lines as $index => $line) {
            if ($index === 0) {
                $formatted[] = '**>' . self::escape($line);
                continue;
            }

            $formatted[] = '>' . self::escape($line);
        }

        $last = array_key_last($formatted);
        if ($last !== null) {
            $formatted[$last] .= '||';
        }

        return implode("\n", $formatted);
    }

    public static function time(int $unix, mixed $label, string $format = ''): string
    {
        $query = 'unix=' . $unix;
        if ($format !== '') {
            $query .= '&format=' . rawurlencode($format);
        }

        return self::link($label, 'tg://time?' . $query);
    }

    public static function join(array $parts, string $separator = ''): string
    {
        return implode($separator, array_map(
            static fn (mixed $part): string => is_string($part) ? $part : self::escape($part),
            $parts,
        ));
    }

    private static function escapeV2(string $text): string
    {
        return preg_replace('/([' . preg_quote(self::V2_ESCAPE, '/') . '])/u', '\\\\$1', $text) ?? $text;
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
