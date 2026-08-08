<?php

namespace Jeely\Api\Types;

/**
 * @class ForumTopicEdited
 * @description This object represents a service message about an edited forum topic.
 *
 * @method string getName() Optional. New name of the topic, if it was edited
 * @method string getIconCustomEmojiId() Optional. New identifier of the custom emoji shown as the topic icon, if it was edited; an empty string if the icon was removed
 *
 * @method bool isName()
 * @method bool isIconCustomEmojiId()
 *
 * @method $this setName()
 * @method $this setIconCustomEmojiId()
 *
 * @method $this unsetName()
 * @method $this unsetIconCustomEmojiId()
 *
 * @property string $name Optional. New name of the topic, if it was edited
 * @property string $icon_custom_emoji_id Optional. New identifier of the custom emoji shown as the topic icon, if it was edited; an empty string if the icon was removed
 *
 * @see https://core.telegram.org/bots/api#forumtopicedited
 */
class ForumTopicEdited extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'name' => 'string',
        'icon_custom_emoji_id' => 'string',
    ];
}
