<?php

namespace Jeely\Api\Types;

/**
 * @class ChatBackground
 * @description This object represents a chat background.
 *
 * @method BackgroundType getType() Type of the background
 *
 * @method bool isType()
 *
 * @method $this setType()
 *
 * @method $this unsetType()
 *
 * @property BackgroundType $type Type of the background
 *
 * @see https://core.telegram.org/bots/api#chatbackground
 */
class ChatBackground extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'BackgroundType',
    ];
}
