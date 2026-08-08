<?php

namespace Jeely\Mixins;

use GuzzleHttp\Promise\PromiseInterface;
use Jeely\Api\Types\Error;
use Jeely\Api\Types\Message;
use Jeely\Api\Types\MessageId;
use Jeely\Tools\Constant;

trait InteractsWithMessage
{
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

    public function delete(): Error|PromiseInterface|bool
    {
        return $this->telegram->deleteMessage([
            'chat_id' => $this->chat->id,
            'message_id' => $this->message_id,
        ]);
    }

    public function reply($text, ...$args): Error|PromiseInterface|Message
    {
        return $this->telegram->sendMessage(...array_merge($args, [
            'chat_id' => $this->chat->id,
            'text' => $text,
            'reply_parameters' => [
                'message_id' => $this->message_id,
                'allow_sending_without_reply' => true,
            ],
        ]));
    }

    public function replyDocument($document, ...$args): Error|PromiseInterface|Message
    {
        return $this->telegram->sendDocument(...array_merge($args, [
            'chat_id' => $this->chat->id,
            'document' => $document,
            'reply_parameters' => [
                'message_id' => $this->message_id,
                'allow_sending_without_reply' => true,
            ],
        ]));
    }

    public function replyVideo($video, ...$args): Error|PromiseInterface|Message
    {
        return $this->telegram->sendVideo(...array_merge($args, [
            'chat_id' => $this->chat->id,
            'video' => $video,
            'reply_parameters' => [
                'message_id' => $this->message_id,
                'allow_sending_without_reply' => true,
            ],
        ]));
    }

    public function replyPhoto($photo, ...$args): Error|PromiseInterface|Message
    {
        return $this->telegram->sendPhoto(...array_merge($args, [
            'chat_id' => $this->chat->id,
            'photo' => $photo,
            'reply_parameters' => [
                'message_id' => $this->message_id,
                'allow_sending_without_reply' => true,
            ],
        ]));
    }

    public function edit(?string $text = null, ...$args): Error|PromiseInterface|Message|bool
    {
        $method = ! is_null($text)
            ? 'editMessageText'
            : (isset($args['caption']) ? 'editMessageCaption' : 'editMessageReplyMarkup');

        return $this->telegram->{$method}(...array_merge($args, [
            'chat_id' => $this->chat?->id,
            'text' => $text,
            'message_id' => $this->message_id,
        ]));
    }

    public function copy($receptor = null, ...$args): Error|PromiseInterface|MessageId
    {
        $receptor ??= $this->chat->id;

        return $this->telegram->copyMessage(array_merge($args, [
            'from_chat_id' => $this->chat->id,
            'chat_id' => $receptor,
            'message_id' => $this->message_id,
        ]));
    }

    public function forward($receptor = null, ...$args): Error|PromiseInterface|Message
    {
        $receptor ??= $this->chat->id;

        return $this->telegram->forwardMessage(array_merge($args, [
            'from_chat_id' => $this->chat->id,
            'chat_id' => $receptor,
            'message_id' => $this->message_id,
        ]));
    }

    /**
     * @param  array<int, mixed>  $reaction
     */
    public function react(array $reaction, ...$args): Error|PromiseInterface|bool
    {
        return $this->telegram->setMessageReaction(...array_merge($args, [
            'chat_id' => $this->chat->id,
            'message_id' => $this->message_id,
            'reaction' => $reaction,
        ]));
    }

    public function pin(...$args): Error|PromiseInterface|bool
    {
        return $this->telegram->pinChatMessage(...array_merge($args, [
            'chat_id' => $this->chat->id,
            'message_id' => $this->message_id,
        ]));
    }

    public function unpin(...$args): Error|PromiseInterface|bool
    {
        return $this->telegram->unpinChatMessage(...array_merge($args, [
            'chat_id' => $this->chat->id,
            'message_id' => $this->message_id,
        ]));
    }

    public function answerGuest($text, ...$args)
    {
        return $this->telegram->answerGuestQuery(...array_merge($args, [
            'guest_query_id' => $this->guest_query_id,
            'text' => $text,
        ]));
    }
}
