<?php

namespace Jeely\Mixins;

use GuzzleHttp\Promise\PromiseInterface;
use Jeely\Api\Types\Error;
use Jeely\Api\Types\File;
use Jeely\Api\Types\Message;
use Jeely\Api\Types\MessageId;
use Jeely\Tools\Constant;

trait InteractsWithMessage
{
    use ResolvesTelegramParams;

    protected function boot(): void
    {
        $this->detectMedia();

        if (! ($this['is_media'] ?? false)) {
            return;
        }

        $this->share(array_filter([
            'is_media' => true,
            'media_type' => $this['media_type'] ?? null,
            'file_id' => $this['file_id'] ?? null,
        ], static fn ($value) => $value !== null));
    }

    private function detectMedia(): void
    {
        foreach (Constant::MEDIA_TYPES as $type) {
            if (! isset($this[$type])) {
                continue;
            }

            $media = $this[$type];
            $this['is_media'] = true;
            $this['media_type'] = $type;
            $this['file_id'] = is_array($media)
                ? (end($media)->file_id ?? null)
                : ($media->file_id ?? null);

            break;
        }
    }

    public function delete(...$args): Error|PromiseInterface|bool
    {
        return $this->callTelegram('deleteMessage', $this->telegramOptions([
            'chat_id' => $this->chat->id,
            'message_id' => $this->message_id,
        ], $this->extras($args)));
    }

    public function reply(string $text, ...$args): Error|PromiseInterface|Message
    {
        return $this->callTelegram('sendMessage', $this->telegramOptions([
            'chat_id' => $this->chat->id,
            'text' => $text,
            'reply_parameters' => [
                'message_id' => $this->message_id,
                'allow_sending_without_reply' => true,
            ],
        ], $this->extras($args)));
    }

    public function replyRich(array|string $markdown, ...$args): Error|PromiseInterface|Message
    {
        $options = $this->extras($args);
        $rich = is_array($markdown)
            ? $markdown
            : ['markdown' => $markdown, 'is_rtl' => $options['is_rtl'] ?? true];

        unset($options['is_rtl']);

        return $this->callTelegram('sendRichMessage', $this->telegramOptions([
            'chat_id' => $this->chat->id,
            'rich_message' => $rich,
            'reply_parameters' => [
                'message_id' => $this->message_id,
                'allow_sending_without_reply' => true,
            ],
        ], $options));
    }

    public function replyPhoto(mixed $photo, ...$args): Error|PromiseInterface|Message
    {
        return $this->callTelegram('sendPhoto', $this->telegramOptions([
            'chat_id' => $this->chat->id,
            'photo' => $photo,
            'reply_parameters' => [
                'message_id' => $this->message_id,
                'allow_sending_without_reply' => true,
            ],
        ], $this->extras($args)));
    }

    public function replyVideo(mixed $video, ...$args): Error|PromiseInterface|Message
    {
        return $this->callTelegram('sendVideo', $this->telegramOptions([
            'chat_id' => $this->chat->id,
            'video' => $video,
            'reply_parameters' => [
                'message_id' => $this->message_id,
                'allow_sending_without_reply' => true,
            ],
        ], $this->extras($args)));
    }

    public function replyDocument(mixed $document, ...$args): Error|PromiseInterface|Message
    {
        return $this->callTelegram('sendDocument', $this->telegramOptions([
            'chat_id' => $this->chat->id,
            'document' => $document,
            'reply_parameters' => [
                'message_id' => $this->message_id,
                'allow_sending_without_reply' => true,
            ],
        ], $this->extras($args)));
    }

    public function replyAudio(mixed $audio, ...$args): Error|PromiseInterface|Message
    {
        return $this->callTelegram('sendAudio', $this->telegramOptions([
            'chat_id' => $this->chat->id,
            'audio' => $audio,
            'reply_parameters' => [
                'message_id' => $this->message_id,
                'allow_sending_without_reply' => true,
            ],
        ], $this->extras($args)));
    }

    public function replyVoice(mixed $voice, ...$args): Error|PromiseInterface|Message
    {
        return $this->callTelegram('sendVoice', $this->telegramOptions([
            'chat_id' => $this->chat->id,
            'voice' => $voice,
            'reply_parameters' => [
                'message_id' => $this->message_id,
                'allow_sending_without_reply' => true,
            ],
        ], $this->extras($args)));
    }

    /**
     * Edit text, rich message, caption, or reply markup depending on arguments.
     */
    public function edit(?string $text = null, ...$args): Error|PromiseInterface|Message|bool
    {
        $options = $this->extras($args);

        if (array_key_exists('rich_message', $options)) {
            return $this->editRich($options['rich_message'], $options);
        }

        if ($text !== null) {
            return $this->editText($text, $options);
        }

        if (array_key_exists('caption', $options)) {
            return $this->editCaption((string) $options['caption'], $options);
        }

        return $this->editMarkup($options);
    }

    public function editText(string $text, ...$args): Error|PromiseInterface|Message|bool
    {
        return $this->callTelegram('editMessageText', $this->telegramOptions([
            'chat_id' => $this->chat->id,
            'message_id' => $this->message_id,
            'text' => $text,
        ], $this->extras($args)));
    }

    public function editRich(array|string $markdown, ...$args): Error|PromiseInterface|Message|bool
    {
        $options = $this->extras($args);
        $rich = is_array($markdown)
            ? $markdown
            : ['markdown' => $markdown, 'is_rtl' => $options['is_rtl'] ?? true];

        unset($options['is_rtl']);

        return $this->callTelegram('editMessageText', $this->telegramOptions([
            'chat_id' => $this->chat->id,
            'message_id' => $this->message_id,
            'rich_message' => $rich,
        ], $options));
    }

    public function editCaption(?string $caption = null, ...$args): Error|PromiseInterface|Message|bool
    {
        $options = $this->extras($args);

        return $this->callTelegram('editMessageCaption', $this->telegramOptions([
            'chat_id' => $this->chat->id,
            'message_id' => $this->message_id,
            'caption' => $caption,
        ], $options));
    }

    public function editMarkup(...$args): Error|PromiseInterface|Message|bool
    {
        return $this->callTelegram('editMessageReplyMarkup', $this->telegramOptions([
            'chat_id' => $this->chat->id,
            'message_id' => $this->message_id,
        ], $this->extras($args)));
    }

    public function copy(int|string|null $receptor = null, ...$args): Error|PromiseInterface|MessageId
    {
        $receptor ??= $this->chat->id;

        return $this->callTelegram('copyMessage', $this->telegramOptions([
            'from_chat_id' => $this->chat->id,
            'chat_id' => $receptor,
            'message_id' => $this->message_id,
        ], $this->extras($args)));
    }

    public function forward(int|string|null $receptor = null, ...$args): Error|PromiseInterface|Message
    {
        $receptor ??= $this->chat->id;

        return $this->callTelegram('forwardMessage', $this->telegramOptions([
            'from_chat_id' => $this->chat->id,
            'chat_id' => $receptor,
            'message_id' => $this->message_id,
        ], $this->extras($args)));
    }

    /**
     * @param  array<int, mixed>  $reaction
     */
    public function react(array $reaction, ...$args): Error|PromiseInterface|bool
    {
        return $this->callTelegram('setMessageReaction', $this->telegramOptions([
            'chat_id' => $this->chat->id,
            'message_id' => $this->message_id,
            'reaction' => $reaction,
        ], $this->extras($args)));
    }

    public function pin(...$args): Error|PromiseInterface|bool
    {
        return $this->callTelegram('pinChatMessage', $this->telegramOptions([
            'chat_id' => $this->chat->id,
            'message_id' => $this->message_id,
        ], $this->extras($args)));
    }

    public function unpin(...$args): Error|PromiseInterface|bool
    {
        return $this->callTelegram('unpinChatMessage', $this->telegramOptions([
            'chat_id' => $this->chat->id,
            'message_id' => $this->message_id,
        ], $this->extras($args)));
    }

    public function typing(...$args): Error|PromiseInterface|bool
    {
        return $this->callTelegram('sendChatAction', $this->telegramOptions([
            'chat_id' => $this->chat->id,
            'action' => 'typing',
        ], $this->extras($args)));
    }

    public function download(...$args): Error|PromiseInterface|File|null
    {
        $fileId = $this['file_id'] ?? null;
        if (! is_string($fileId) || $fileId === '') {
            return null;
        }

        return $this->callTelegram('getFile', $this->telegramOptions([
            'file_id' => $fileId,
        ], $this->extras($args)));
    }

    public function answerGuest(string $text, ...$args): mixed
    {
        return $this->callTelegram('answerGuestQuery', $this->telegramOptions([
            'guest_query_id' => $this->guest_query_id,
            'text' => $text,
        ], $this->extras($args)));
    }
}
