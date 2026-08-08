<?php

namespace Jeely\Api\Types;

/**
 * @class InaccessibleMessage
 * @description This object describes a message that was deleted or is otherwise inaccessible to the bot.
 *
 * @method Chat getChat() Chat the message belonged to
 * @method int getMessageId() Unique message identifier inside the chat
 * @method int getDate() Always 0. The field can be used to differentiate regular and inaccessible messages.
 *
 * @method bool isChat()
 * @method bool isMessageId()
 * @method bool isDate()
 *
 * @method $this setChat()
 * @method $this setMessageId()
 * @method $this setDate()
 *
 * @method $this unsetChat()
 * @method $this unsetMessageId()
 * @method $this unsetDate()
 *
 * @property Chat $chat Chat the message belonged to
 * @property int $message_id Unique message identifier inside the chat
 * @property int $date Always 0. The field can be used to differentiate regular and inaccessible messages.
 *
 * @see https://core.telegram.org/bots/api#inaccessiblemessage
 */
class InaccessibleMessage extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'chat' => 'Chat',
        'message_id' => 'int',
        'date' => 'int',
    ];
}
