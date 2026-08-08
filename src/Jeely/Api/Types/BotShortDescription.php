<?php

namespace Jeely\Api\Types;

/**
 * @class BotShortDescription
 * @description This object represents the bot's short description.
 *
 * @method string getShortDescription() The bot's short description
 *
 * @method bool isShortDescription()
 *
 * @method $this setShortDescription()
 *
 * @method $this unsetShortDescription()
 *
 * @property string $short_description The bot's short description
 *
 * @see https://core.telegram.org/bots/api#botshortdescription
 */
class BotShortDescription extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'short_description' => 'string',
    ];
}
