<?php

namespace Jeely\Api\Types;

/**
 * @class MessageReactionCountUpdated
 * @description This object represents reaction changes on a message with anonymous reactions.
 *
 * @method Chat getChat() The chat containing the message
 * @method int getMessageId() Unique message identifier inside the chat
 * @method int getDate() Date of the change in Unix time
 * @method ReactionCount[] getReactions() List of reactions that are present on the message
 *
 * @method bool isChat()
 * @method bool isMessageId()
 * @method bool isDate()
 * @method bool isReactions()
 *
 * @method $this setChat()
 * @method $this setMessageId()
 * @method $this setDate()
 * @method $this setReactions()
 *
 * @method $this unsetChat()
 * @method $this unsetMessageId()
 * @method $this unsetDate()
 * @method $this unsetReactions()
 *
 * @property Chat $chat The chat containing the message
 * @property int $message_id Unique message identifier inside the chat
 * @property int $date Date of the change in Unix time
 * @property ReactionCount[] $reactions List of reactions that are present on the message
 *
 * @see https://core.telegram.org/bots/api#messagereactioncountupdated
 */
class MessageReactionCountUpdated extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'chat' => 'Chat',
        'message_id' => 'int',
        'date' => 'int',
        'reactions' => 'ReactionCount[]',
    ];
}
