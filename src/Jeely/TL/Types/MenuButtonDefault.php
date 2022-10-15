<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class MenuButtonDefault
 * @description Describes that no specific value for the menu button was set.
 *
 * @method string getType() Type of the button, must be default
 *
 * @method bool isType()
 *
 * @method $this setType()
 *
 * @method $this unsetType()
 *
 * @property string $type Type of the button, must be default
 *
 * @see https://core.telegram.org/bots/api#menubuttondefault
 */
class MenuButtonDefault extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'type' => 'string',
    ];
}