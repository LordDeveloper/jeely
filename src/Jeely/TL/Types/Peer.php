<?php

namespace Jeely\TL\Types;

use GuzzleHttp\Promise\PromiseInterface;
use Jeely\LazyUpdates;
use Jeely\Traits\Notifiable;


/**
 * @class Peer
 * @description This object represents a Telegram user or bot chat.
 *
 * @mixin User
 * @mixin Chat
 */
class Peer extends LazyUpdates
{
    use Notifiable;

    const JSON_PROPERTY_MAP = [
        User::class, Chat::class,
    ];

    public function _init()
    {
        if ($this->_isProperty('first_name')) {
            $this->_setProperty('full_name', implode(' ', [
                $this->_getProperty('first_name'), $this->_getProperty('last_name'),
            ]));
        }

        if ($this->_getProperty('type') === 'channel') {
            $this->_setProperty('is_public', $this->_isProperty('username'));
        }
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
                    if (! in_array($response->status, ['kicked', 'left'])) {
                        return true;
                    }
                }

                return false;
            });
        }

        return wait(all($promises));
    }

    public function leave(): Error|PromiseInterface|bool
    {
        return $this->telegram->leaveChat([
            'chat_id' => $this->id,
        ]);
    }

    public function getMember($memberId, ... $args): Error|PromiseInterface|ChatMember
    {
        return $this->telegram->getChatMember(... array_merge($args, [
            'chat_id' => $this->id,
            'user_id' => $memberId,
        ]));
    }
}