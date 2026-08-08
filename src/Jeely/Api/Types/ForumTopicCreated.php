<?php

namespace Jeely\Api\Types;

/**
 * @class ForumTopicCreated
 * @description This object represents a service message about a new forum topic created in the chat.
 *
 * @method string getName() Name of the topic
 * @method int getIconColor() Color of the topic icon in RGB format
 * @method string getIconCustomEmojiId() Optional. Unique identifier of the custom emoji shown as the topic icon
 * @method bool getIsNameImplicit() Optional. True, if the name of the topic wasn't specified explicitly by its creator and likely needs to be changed by the bot
 *
 * @method bool isName()
 * @method bool isIconColor()
 * @method bool isIconCustomEmojiId()
 * @method bool isIsNameImplicit()
 *
 * @method $this setName()
 * @method $this setIconColor()
 * @method $this setIconCustomEmojiId()
 * @method $this setIsNameImplicit()
 *
 * @method $this unsetName()
 * @method $this unsetIconColor()
 * @method $this unsetIconCustomEmojiId()
 * @method $this unsetIsNameImplicit()
 *
 * @property string $name Name of the topic
 * @property int $icon_color Color of the topic icon in RGB format
 * @property string $icon_custom_emoji_id Optional. Unique identifier of the custom emoji shown as the topic icon
 * @property bool $is_name_implicit Optional. True, if the name of the topic wasn't specified explicitly by its creator and likely needs to be changed by the bot
 *
 * @see https://core.telegram.org/bots/api#forumtopiccreated
 */
class ForumTopicCreated extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'name' => 'string',
        'icon_color' => 'int',
        'icon_custom_emoji_id' => 'string',
        'is_name_implicit' => 'bool',
    ];
}
