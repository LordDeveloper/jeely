<?php

namespace Jeely\Api\Types;

/**
 * @class MessageOriginUser
 * @description The message was originally sent by a known user.
 *
 * @method string getType() Type of the message origin, always “user”
 * @method int getDate() Date the message was sent originally in Unix time
 * @method User getSenderUser() User that sent the message originally
 *
 * @method bool isType()
 * @method bool isDate()
 * @method bool isSenderUser()
 *
 * @method $this setType()
 * @method $this setDate()
 * @method $this setSenderUser()
 *
 * @method $this unsetType()
 * @method $this unsetDate()
 * @method $this unsetSenderUser()
 *
 * @property string $type Type of the message origin, always “user”
 * @property int $date Date the message was sent originally in Unix time
 * @property User $sender_user User that sent the message originally
 *
 * @see https://core.telegram.org/bots/api#messageoriginuser
 */
class MessageOriginUser extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'date' => 'int',
        'sender_user' => 'User',
    ];
}
