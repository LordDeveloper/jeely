<?php

namespace Jeely\Mixins;

use GuzzleHttp\Promise\PromiseInterface;
use Jeely\Api\Types\Error;

trait InteractsWithMessageReaction
{
    /**
     * Set bot reactions on the reacted message.
     *
     * @param  array<int, mixed>  $reaction
     */
    public function react(array $reaction = [], ...$args): Error|PromiseInterface|bool
    {
        return $this->telegram->setMessageReaction(...array_merge($args, [
            'chat_id' => $this->chat->id,
            'message_id' => $this->message_id,
            'reaction' => $reaction,
        ]));
    }
}
