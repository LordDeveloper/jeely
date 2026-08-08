<?php

namespace Jeely\Api\Types;

/**
 * @class BotDescription
 * @description This object represents the bot's description.
 *
 * @method string getDescription() The bot's description
 *
 * @method bool isDescription()
 *
 * @method $this setDescription()
 *
 * @method $this unsetDescription()
 *
 * @property string $description The bot's description
 *
 * @see https://core.telegram.org/bots/api#botdescription
 */
class BotDescription extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'description' => 'string',
    ];
}
