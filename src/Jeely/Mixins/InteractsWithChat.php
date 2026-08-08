<?php

namespace Jeely\Mixins;

use GuzzleHttp\Promise\PromiseInterface;
use Jeely\Api\Types\Error;
use Jeely\Api\Types\Message;

trait InteractsWithChat
{
    public function notify($text, ...$args): Error|PromiseInterface|Message
    {
        return $this->telegram->sendMessage(...array_merge($args, [
            'chat_id' => $this->id,
            'text' => $text,
        ]));
    }

    public function leave(...$args): Error|PromiseInterface|bool
    {
        return $this->telegram->leaveChat(...array_merge($args, [
            'chat_id' => $this->id,
        ]));
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
