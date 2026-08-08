<?php

namespace Jeely\Mixins;

use GuzzleHttp\Promise\PromiseInterface;
use Jeely\Api\Types\Error;
use Jeely\Api\Types\Message;

trait InteractsWithChatJoinRequest
{
    public function approve(...$args): Error|PromiseInterface|bool
    {
        return $this->telegram->approveChatJoinRequest(...array_merge($args, [
            'chat_id' => $this->chat->id,
            'user_id' => $this->from->id,
        ]));
    }

    public function decline(...$args): Error|PromiseInterface|bool
    {
        return $this->telegram->declineChatJoinRequest(...array_merge($args, [
            'chat_id' => $this->chat->id,
            'user_id' => $this->from->id,
        ]));
    }

    /**
     * Send a private message to the requester (valid for a short window after the request).
     */
    public function notify($text, ...$args): Error|PromiseInterface|Message
    {
        return $this->telegram->sendMessage(...array_merge($args, [
            'chat_id' => $this->user_chat_id,
            'text' => $text,
        ]));
    }
}
