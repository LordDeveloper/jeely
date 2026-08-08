<?php

namespace Jeely\Api\Types;

/**
 * @class PreparedInlineMessage
 * @description Describes an inline message to be sent by a user of a Mini App.
 *
 * @method string getId() Unique identifier of the prepared message
 * @method int getExpirationDate() Expiration date of the prepared message, in Unix time. Expired prepared messages can no longer be used.
 *
 * @method bool isId()
 * @method bool isExpirationDate()
 *
 * @method $this setId()
 * @method $this setExpirationDate()
 *
 * @method $this unsetId()
 * @method $this unsetExpirationDate()
 *
 * @property string $id Unique identifier of the prepared message
 * @property int $expiration_date Expiration date of the prepared message, in Unix time. Expired prepared messages can no longer be used.
 *
 * @see https://core.telegram.org/bots/api#preparedinlinemessage
 */
class PreparedInlineMessage extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'id' => 'string',
        'expiration_date' => 'int',
    ];
}
