<?php

namespace Jeely\Api\Types;

/**
 * @class StoryAreaTypeUniqueGift
 * @description Describes a story area pointing to a unique gift. Currently, a story can have at most 1 unique gift area.
 *
 * @method string getType() Type of the area, always “unique_gift”
 * @method string getName() Unique name of the gift
 *
 * @method bool isType()
 * @method bool isName()
 *
 * @method $this setType()
 * @method $this setName()
 *
 * @method $this unsetType()
 * @method $this unsetName()
 *
 * @property string $type Type of the area, always “unique_gift”
 * @property string $name Unique name of the gift
 *
 * @see https://core.telegram.org/bots/api#storyareatypeuniquegift
 */
class StoryAreaTypeUniqueGift extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'name' => 'string',
    ];
}
