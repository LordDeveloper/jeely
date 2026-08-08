<?php

namespace Jeely\Api\Types;

/**
 * @class MessageOriginHiddenUser
 * @description The message was originally sent by an unknown user.
 *
 * @method string getType() Type of the message origin, always “hidden_user”
 * @method int getDate() Date the message was sent originally in Unix time
 * @method string getSenderUserName() Name of the user that sent the message originally
 *
 * @method bool isType()
 * @method bool isDate()
 * @method bool isSenderUserName()
 *
 * @method $this setType()
 * @method $this setDate()
 * @method $this setSenderUserName()
 *
 * @method $this unsetType()
 * @method $this unsetDate()
 * @method $this unsetSenderUserName()
 *
 * @property string $type Type of the message origin, always “hidden_user”
 * @property int $date Date the message was sent originally in Unix time
 * @property string $sender_user_name Name of the user that sent the message originally
 *
 * @see https://core.telegram.org/bots/api#messageoriginhiddenuser
 */
class MessageOriginHiddenUser extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'date' => 'int',
        'sender_user_name' => 'string',
    ];
}
