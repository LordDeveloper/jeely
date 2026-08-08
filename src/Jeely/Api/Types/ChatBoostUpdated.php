<?php

namespace Jeely\Api\Types;

/**
 * @class ChatBoostUpdated
 * @description This object represents a boost added to a chat or changed.
 *
 * @method Chat getChat() Chat which was boosted
 * @method ChatBoost getBoost() Information about the chat boost
 *
 * @method bool isChat()
 * @method bool isBoost()
 *
 * @method $this setChat()
 * @method $this setBoost()
 *
 * @method $this unsetChat()
 * @method $this unsetBoost()
 *
 * @property Chat $chat Chat which was boosted
 * @property ChatBoost $boost Information about the chat boost
 *
 * @see https://core.telegram.org/bots/api#chatboostupdated
 */
class ChatBoostUpdated extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'chat' => 'Chat',
        'boost' => 'ChatBoost',
    ];
}
