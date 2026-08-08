<?php

namespace Jeely\Api\Types;

/**
 * @class MessageOriginChannel
 * @description The message was originally sent to a channel chat.
 *
 * @method string getType() Type of the message origin, always “channel”
 * @method int getDate() Date the message was sent originally in Unix time
 * @method Chat getChat() Channel chat to which the message was originally sent
 * @method int getMessageId() Unique message identifier inside the chat
 * @method string getAuthorSignature() Optional. Signature of the original post author
 *
 * @method bool isType()
 * @method bool isDate()
 * @method bool isChat()
 * @method bool isMessageId()
 * @method bool isAuthorSignature()
 *
 * @method $this setType()
 * @method $this setDate()
 * @method $this setChat()
 * @method $this setMessageId()
 * @method $this setAuthorSignature()
 *
 * @method $this unsetType()
 * @method $this unsetDate()
 * @method $this unsetChat()
 * @method $this unsetMessageId()
 * @method $this unsetAuthorSignature()
 *
 * @property string $type Type of the message origin, always “channel”
 * @property int $date Date the message was sent originally in Unix time
 * @property Chat $chat Channel chat to which the message was originally sent
 * @property int $message_id Unique message identifier inside the chat
 * @property string $author_signature Optional. Signature of the original post author
 *
 * @see https://core.telegram.org/bots/api#messageoriginchannel
 */
class MessageOriginChannel extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'date' => 'int',
        'chat' => 'Chat',
        'message_id' => 'int',
        'author_signature' => 'string',
    ];
}
