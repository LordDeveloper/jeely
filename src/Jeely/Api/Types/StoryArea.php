<?php

namespace Jeely\Api\Types;

/**
 * @class StoryArea
 * @description Describes a clickable area on a story media.
 *
 * @method StoryAreaPosition getPosition() Position of the area
 * @method StoryAreaType getType() Type of the area
 *
 * @method bool isPosition()
 * @method bool isType()
 *
 * @method $this setPosition()
 * @method $this setType()
 *
 * @method $this unsetPosition()
 * @method $this unsetType()
 *
 * @property StoryAreaPosition $position Position of the area
 * @property StoryAreaType $type Type of the area
 *
 * @see https://core.telegram.org/bots/api#storyarea
 */
class StoryArea extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'position' => 'StoryAreaPosition',
        'type' => 'StoryAreaType',
    ];
}
