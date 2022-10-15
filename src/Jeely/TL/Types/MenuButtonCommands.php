<?php

namespace Jeely\TL\Types;

use Jeely\LazyUpdates;


/**
 * @class MenuButtonCommands
 * @description Represents a menu button, which opens the bot's list of commands.
 *
 * @method string getType() Type of the button, must be commands
 *
 * @method bool isType()
 *
 * @method $this setType()
 *
 * @method $this unsetType()
 *
 * @property string $type Type of the button, must be commands
 *
 * @see https://core.telegram.org/bots/api#menubuttoncommands
 */
class MenuButtonCommands extends LazyUpdates
{
    const JSON_PROPERTY_MAP = [
        'type' => 'string',
    ];
}