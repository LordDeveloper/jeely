<?php

namespace Jeely\Mixins;

use GuzzleHttp\Promise\PromiseInterface;
use Jeely\Api\Types\Error;
use Jeely\Api\Types\Message;

trait InteractsWithChat
{
    use ResolvesTelegramParams;

    public function notify(string $text, ...$args): Error|PromiseInterface|Message
    {
        return $this->send($text, ...$args);
    }

    public function send(string $text, ...$args): Error|PromiseInterface|Message
    {
        return $this->callTelegram('sendMessage', $this->telegramOptions([
            'chat_id' => $this->id,
            'text' => $text,
        ], $this->extras($args)));
    }

    public function sendRich(array|string $markdown, ...$args): Error|PromiseInterface|Message
    {
        $options = $this->extras($args);
        $rich = is_array($markdown)
            ? $markdown
            : ['markdown' => $markdown, 'is_rtl' => $options['is_rtl'] ?? true];

        unset($options['is_rtl']);

        return $this->callTelegram('sendRichMessage', $this->telegramOptions([
            'chat_id' => $this->id,
            'rich_message' => $rich,
        ], $options));
    }

    public function sendPhoto(mixed $photo, ...$args): Error|PromiseInterface|Message
    {
        return $this->callTelegram('sendPhoto', $this->telegramOptions([
            'chat_id' => $this->id,
            'photo' => $photo,
        ], $this->extras($args)));
    }

    public function sendDocument(mixed $document, ...$args): Error|PromiseInterface|Message
    {
        return $this->callTelegram('sendDocument', $this->telegramOptions([
            'chat_id' => $this->id,
            'document' => $document,
        ], $this->extras($args)));
    }

    public function sendVideo(mixed $video, ...$args): Error|PromiseInterface|Message
    {
        return $this->callTelegram('sendVideo', $this->telegramOptions([
            'chat_id' => $this->id,
            'video' => $video,
        ], $this->extras($args)));
    }

    public function sendAudio(mixed $audio, ...$args): Error|PromiseInterface|Message
    {
        return $this->callTelegram('sendAudio', $this->telegramOptions([
            'chat_id' => $this->id,
            'audio' => $audio,
        ], $this->extras($args)));
    }

    public function sendVoice(mixed $voice, ...$args): Error|PromiseInterface|Message
    {
        return $this->callTelegram('sendVoice', $this->telegramOptions([
            'chat_id' => $this->id,
            'voice' => $voice,
        ], $this->extras($args)));
    }

    public function typing(...$args): Error|PromiseInterface|bool
    {
        return $this->action('typing', ...$args);
    }

    public function action(string $action, ...$args): Error|PromiseInterface|bool
    {
        return $this->callTelegram('sendChatAction', $this->telegramOptions([
            'chat_id' => $this->id,
            'action' => $action,
        ], $this->extras($args)));
    }

    public function leave(...$args): Error|PromiseInterface|bool
    {
        return $this->callTelegram('leaveChat', $this->telegramOptions([
            'chat_id' => $this->id,
        ], $this->extras($args)));
    }

    public function ban(int $userId, ...$args): Error|PromiseInterface|bool
    {
        return $this->callTelegram('banChatMember', $this->telegramOptions([
            'chat_id' => $this->id,
            'user_id' => $userId,
        ], $this->extras($args)));
    }

    public function unban(int $userId, ...$args): Error|PromiseInterface|bool
    {
        return $this->callTelegram('unbanChatMember', $this->telegramOptions([
            'chat_id' => $this->id,
            'user_id' => $userId,
        ], $this->extras($args)));
    }

    public function isPrivate(): bool
    {
        return ($this->type ?? null) === 'private';
    }

    public function isGroup(): bool
    {
        return in_array($this->type ?? null, ['group', 'supergroup'], true);
    }

    public function isChannel(): bool
    {
        return ($this->type ?? null) === 'channel';
    }
}
