<?php

namespace Jeely\Mixins;

use GuzzleHttp\Promise\PromiseInterface;
use Jeely\Api\Types\Error;
use Jeely\Api\Types\Message;

trait InteractsWithCallbackQuery
{
    public function answer($text, $showAlert = false): Error|PromiseInterface|bool
    {
        return $this->telegram->answerCallbackQuery([
            'callback_query_id' => $this->id,
            'text' => $text,
            'show_alert' => $showAlert,
        ]);
    }

    public function edit(?string $text = null, ...$args): PromiseInterface|Error|bool|Message
    {
        $method = ! is_null($text)
            ? 'editMessageText'
            : (isset($args['caption']) ? 'editMessageCaption' : 'editMessageReplyMarkup');

        return $this->telegram->{$method}(...array_merge($args, [
            'chat_id' => $this->message?->chat->id,
            'text' => $text,
            'message_id' => $this->message?->message_id,
            'inline_message_id' => $this->inline_message_id,
        ]));
    }
}
