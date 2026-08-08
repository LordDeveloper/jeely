<?php

namespace Jeely\Api\Types;

/**
 * @class MessageId
 * @description This object represents a unique message identifier.
 *
 * @method int getMessageId() Unique message identifier. In specific instances (e.g., message containing a video sent to a big chat), the server might automatically schedule a message instead of sending it immediately. In such cases, this field will be 0 and the relevant message will be unusable until it is actually sent.
 *
 * @method bool isMessageId()
 *
 * @method $this setMessageId()
 *
 * @method $this unsetMessageId()
 *
 * @property int $message_id Unique message identifier. In specific instances (e.g., message containing a video sent to a big chat), the server might automatically schedule a message instead of sending it immediately. In such cases, this field will be 0 and the relevant message will be unusable until it is actually sent.
 *
 * @see https://core.telegram.org/bots/api#messageid
 */
class MessageId extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'message_id' => 'int',
    ];
}
