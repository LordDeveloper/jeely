<?php

namespace Jeely\Api\Types;

/**
 * @class SentGuestMessage
 * @description Describes an inline message sent by a guest bot.
 *
 * @method string getInlineMessageId() Identifier of the sent inline message
 *
 * @method bool isInlineMessageId()
 *
 * @method $this setInlineMessageId()
 *
 * @method $this unsetInlineMessageId()
 *
 * @property string $inline_message_id Identifier of the sent inline message
 *
 * @see https://core.telegram.org/bots/api#sentguestmessage
 */
class SentGuestMessage extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'inline_message_id' => 'string',
    ];
}
