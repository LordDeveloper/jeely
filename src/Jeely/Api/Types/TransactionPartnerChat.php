<?php

namespace Jeely\Api\Types;

/**
 * @class TransactionPartnerChat
 * @description Describes a transaction with a chat.
 *
 * @method string getType() Type of the transaction partner, always “chat”
 * @method Chat getChat() Information about the chat
 * @method Gift getGift() Optional. The gift sent to the chat by the bot
 *
 * @method bool isType()
 * @method bool isChat()
 * @method bool isGift()
 *
 * @method $this setType()
 * @method $this setChat()
 * @method $this setGift()
 *
 * @method $this unsetType()
 * @method $this unsetChat()
 * @method $this unsetGift()
 *
 * @property string $type Type of the transaction partner, always “chat”
 * @property Chat $chat Information about the chat
 * @property Gift $gift Optional. The gift sent to the chat by the bot
 *
 * @see https://core.telegram.org/bots/api#transactionpartnerchat
 */
class TransactionPartnerChat extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'chat' => 'Chat',
        'gift' => 'Gift',
    ];
}
