<?php

namespace Jeely\Api\Types;

/**
 * @class StoryAreaTypeLink
 * @description Describes a story area pointing to an HTTP or tg:// link. Currently, a story can have up to 3 link areas.
 *
 * @method string getType() Type of the area, always “link”
 * @method string getUrl() HTTP or tg:// URL to be opened when the area is clicked
 *
 * @method bool isType()
 * @method bool isUrl()
 *
 * @method $this setType()
 * @method $this setUrl()
 *
 * @method $this unsetType()
 * @method $this unsetUrl()
 *
 * @property string $type Type of the area, always “link”
 * @property string $url HTTP or tg:// URL to be opened when the area is clicked
 *
 * @see https://core.telegram.org/bots/api#storyareatypelink
 */
class StoryAreaTypeLink extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'url' => 'string',
    ];
}
