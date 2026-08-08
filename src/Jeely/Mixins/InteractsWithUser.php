<?php

namespace Jeely\Mixins;

use GuzzleHttp\Promise\PromiseInterface;
use Jeely\Api\Types\ChatMember;
use Jeely\Api\Types\Error;
use Jeely\Api\Types\Message;

use function all;
use function wait;

trait InteractsWithUser
{
    protected function booted(): void
    {
        if (isset($this['first_name'])) {
            $this['full_name'] = trim(implode(' ', array_filter([
                $this['first_name'] ?? null,
                $this['last_name'] ?? null,
            ])));
        }
    }

    public function notify($text, ...$args): Error|PromiseInterface|Message
    {
        return $this->telegram->sendMessage(...array_merge($args, [
            'chat_id' => $this->id,
            'text' => $text,
        ]));
    }

    public function isMemberOf(array $chats = [])
    {
        $promises = [];

        foreach ($chats as $chat) {
            $promises[$chat] = $this->telegram->getChatMember([
                'chat_id' => $chat,
                'user_id' => $this->id,
                'async' => true,
            ])->then(function ($response) {
                if ($response instanceof ChatMember) {
                    return ! in_array($response->status, ['kicked', 'left'], true);
                }

                return false;
            });
        }

        return wait(all($promises));
    }
}
