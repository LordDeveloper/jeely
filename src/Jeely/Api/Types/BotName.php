<?php

namespace Jeely\Api\Types;

/**
 * @class BotName
 * @description This object represents the bot's name.
 *
 * @method string getName() The bot's name
 *
 * @method bool isName()
 *
 * @method $this setName()
 *
 * @method $this unsetName()
 *
 * @property string $name The bot's name
 *
 * @see https://core.telegram.org/bots/api#botname
 */
class BotName extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'name' => 'string',
    ];
}
