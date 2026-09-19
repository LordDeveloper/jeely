<?php

namespace Jeely\Mixins;

use GuzzleHttp\Promise\PromiseInterface;
use Jeely\Api\Types\Error;

trait InteractsWithMessageReaction
{
    use ResolvesTelegramParams;

    /**
     * @param  array<int, mixed>  $reaction
     */
    public function react(array $reaction = [], ...$args): Error|PromiseInterface|bool
    {
        return $this->callTelegram('setMessageReaction', $this->telegramOptions([
            'chat_id' => $this->chat->id,
            'message_id' => $this->message_id,
            'reaction' => $reaction,
        ], $this->extras($args)));
    }
}
