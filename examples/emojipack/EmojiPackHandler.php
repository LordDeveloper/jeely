<?php

declare(strict_types=1);

namespace Examples\Emojipack;

use Jeely\Api\Types\Error;
use Jeely\Api\Types\Message;
use Jeely\Api\Update;
use Jeely\Handlers\EventHandler;
use Jeely\Tools\Html;

final class EmojiPackHandler extends EventHandler
{
    public function onMessage(Update $update): mixed
    {
        $message = $update->message();
        if ($message === null || $message->text === null) {
            return null;
        }

        $name = self::packNameFromMessage($message);

        if ($name === null || ! preg_match('~^[A-Za-z0-9_]+$~', $name)) {
            return $message->reply(
                "لینک پک کاستوم ایموجی را بفرست.\nمثال:\nhttps://t.me/addemoji/AIActions",
                ['async' => false],
            );
        }

        $this->logger->info('fetch sticker set {pack}', ['pack' => $name]);

        $set = $this->telegram->getStickerSet(['name' => $name, 'async' => false]);

        if ($set instanceof Error) {
            return $message->reply('پک پیدا نشد: ' . ($set->description ?? 'unknown'), ['async' => false]);
        }

        $stickers = is_array($set->stickers ?? null) ? $set->stickers : [];
        $this->logger->info('sticker set loaded: title={title} type={type} count={count}', [
            'title' => $set->title ?? $name,
            'type' => $set->sticker_type ?? '?',
            'count' => count($stickers),
        ]);

        if ($stickers === []) {
            return $message->reply('این پک خالی است.', ['async' => false]);
        }

        $lines = [
            Html::bold($set->title ?? $name),
            Html::code($name),
            'نوع: ' . Html::code($set->sticker_type ?? '?'),
            'تعداد: ' . Html::bold((string) count($stickers)),
            '',
        ];

        foreach ($stickers as $sticker) {
            $id = (string) ($sticker->custom_emoji_id ?? '');
            if ($id === '') {
                continue;
            }

            $fallback = (string) ($sticker->emoji ?? '⭐');
            $lines[] = Html::emoji($id, $fallback) . ' ' . Html::code($id);
        }

        $last = null;
        foreach (self::chunkLines($lines) as $chunk) {
            $last = $message->reply($chunk, ['parse_mode' => 'HTML', 'async' => false]);

            if ($last instanceof Error) {
                $this->logger->error('send failed: {description}', ['description' => $last->description ?? 'unknown']);
                break;
            }
        }

        return $last;
    }

    private static function parsePackName(string $text): ?string
    {
        $text = trim($text);

        if (preg_match('~(?:https?://)?(?:www\.)?(?:t(?:elegram)?\.me)/addemoji/([A-Za-z0-9_]+)~i', $text, $m) === 1) {
            return $m[1];
        }

        if (preg_match('~^([A-Za-z0-9_]+)$~', $text, $m) === 1) {
            return $m[1];
        }

        if (preg_match('~addemoji/([A-Za-z0-9_]+)~i', $text, $m) === 1) {
            return $m[1];
        }

        return null;
    }

    private static function packNameFromMessage(Message $message): ?string
    {
        $text = trim((string) ($message->text ?? ''));
        $fromText = self::parsePackName($text);

        if ($fromText !== null) {
            return $fromText;
        }

        $entities = $message->entities ?? [];
        if (! is_array($entities)) {
            return null;
        }

        foreach ($entities as $entity) {
            $type = (string) ($entity->type ?? '');
            $url = null;

            if ($type === 'text_link') {
                $url = (string) ($entity->url ?? '');
            } elseif ($type === 'url') {
                $offset = (int) ($entity->offset ?? 0);
                $length = (int) ($entity->length ?? 0);
                $url = substr($text, $offset, $length);
            }

            if (is_string($url) && $url !== '') {
                $name = self::parsePackName($url);
                if ($name !== null) {
                    return $name;
                }
            }
        }

        return null;
    }

    /** @param array<int, string> $lines
     * @return array<int, string>
     */
    private static function chunkLines(array $lines, int $limit = 3500): array
    {
        $chunks = [];
        $buffer = '';

        foreach ($lines as $line) {
            $next = $buffer === '' ? $line : $buffer . "\n" . $line;

            if (mb_strlen($next) > $limit && $buffer !== '') {
                $chunks[] = $buffer;
                $buffer = $line;
                continue;
            }

            $buffer = $next;
        }

        if ($buffer !== '') {
            $chunks[] = $buffer;
        }

        return $chunks;
    }
}
