<?php

namespace Jeely\Api\Types;

/**
 * @class MessageOriginChat
 * @description The message was originally sent on behalf of a chat to a group chat.
 *
 * @method string getType() Type of the message origin, always “chat”
 * @method int getDate() Date the message was sent originally in Unix time
 * @method Chat getSenderChat() Chat that sent the message originally
 * @method string getAuthorSignature() Optional. For messages originally sent by an anonymous chat administrator, original message author signature
 *
 * @method bool isType()
 * @method bool isDate()
 * @method bool isSenderChat()
 * @method bool isAuthorSignature()
 *
 * @method $this setType()
 * @method $this setDate()
 * @method $this setSenderChat()
 * @method $this setAuthorSignature()
 *
 * @method $this unsetType()
 * @method $this unsetDate()
 * @method $this unsetSenderChat()
 * @method $this unsetAuthorSignature()
 *
 * @property string $type Type of the message origin, always “chat”
 * @property int $date Date the message was sent originally in Unix time
 * @property Chat $sender_chat Chat that sent the message originally
 * @property string $author_signature Optional. For messages originally sent by an anonymous chat administrator, original message author signature
 *
 * @see https://core.telegram.org/bots/api#messageoriginchat
 */
class MessageOriginChat extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'date' => 'int',
        'sender_chat' => 'Chat',
        'author_signature' => 'string',
    ];
}
