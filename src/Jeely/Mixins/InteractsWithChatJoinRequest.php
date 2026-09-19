<?php

namespace Jeely\Mixins;

use GuzzleHttp\Promise\PromiseInterface;
use Jeely\Api\Types\Error;
use Jeely\Api\Types\Message;

trait InteractsWithChatJoinRequest
{
    use ResolvesTelegramParams;

    public function approve(...$args): Error|PromiseInterface|bool
    {
        return $this->callTelegram('approveChatJoinRequest', $this->telegramOptions([
            'chat_id' => $this->chat->id,
            'user_id' => $this->from->id,
        ], $this->extras($args)));
    }

    public function decline(...$args): Error|PromiseInterface|bool
    {
        return $this->callTelegram('declineChatJoinRequest', $this->telegramOptions([
            'chat_id' => $this->chat->id,
            'user_id' => $this->from->id,
        ], $this->extras($args)));
    }

    /**
     * Send a private message to the requester (valid for a short window after the request).
     */
    public function notify(string $text, ...$args): Error|PromiseInterface|Message
    {
        return $this->callTelegram('sendMessage', $this->telegramOptions([
            'chat_id' => $this->user_chat_id,
            'text' => $text,
        ], $this->extras($args)));
    }
}
