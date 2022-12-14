<?php

namespace Jeely\TL\Types;

use Jeely\LazyUpdates;


/**
 * @class MessageId
 * @description This object represents a unique message identifier.
 *
 * @method int getMessageId() Unique message identifier
 *
 * @method bool isMessageId()
 *
 * @method $this setMessageId()
 *
 * @method $this unsetMessageId()
 *
 * @property int $message_id Unique message identifier
 *
 * @see https://core.telegram.org/bots/api#messageid
 */
class MessageId extends LazyUpdates
{
    const JSON_PROPERTY_MAP = [
        'message_id' => 'int',
    ];
}