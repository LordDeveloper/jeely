<?php

namespace Jeely\Api\Types;

/**
 * @class PreparedKeyboardButton
 * @description Describes a keyboard button to be used by a user of a Mini App.
 *
 * @method string getId() Unique identifier of the keyboard button
 *
 * @method bool isId()
 *
 * @method $this setId()
 *
 * @method $this unsetId()
 *
 * @property string $id Unique identifier of the keyboard button
 *
 * @see https://core.telegram.org/bots/api#preparedkeyboardbutton
 */
class PreparedKeyboardButton extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'id' => 'string',
    ];
}
