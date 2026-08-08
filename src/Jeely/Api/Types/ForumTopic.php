<?php

namespace Jeely\Api\Types;

/**
 * @class ForumTopic
 * @description This object represents a forum topic.
 *
 * @method int getMessageThreadId() Unique identifier of the forum topic
 * @method string getName() Name of the topic
 * @method int getIconColor() Color of the topic icon in RGB format
 * @method string getIconCustomEmojiId() Optional. Unique identifier of the custom emoji shown as the topic icon
 * @method bool getIsNameImplicit() Optional. True, if the name of the topic wasn't specified explicitly by its creator and likely needs to be changed by the bot
 *
 * @method bool isMessageThreadId()
 * @method bool isName()
 * @method bool isIconColor()
 * @method bool isIconCustomEmojiId()
 * @method bool isIsNameImplicit()
 *
 * @method $this setMessageThreadId()
 * @method $this setName()
 * @method $this setIconColor()
 * @method $this setIconCustomEmojiId()
 * @method $this setIsNameImplicit()
 *
 * @method $this unsetMessageThreadId()
 * @method $this unsetName()
 * @method $this unsetIconColor()
 * @method $this unsetIconCustomEmojiId()
 * @method $this unsetIsNameImplicit()
 *
 * @property int $message_thread_id Unique identifier of the forum topic
 * @property string $name Name of the topic
 * @property int $icon_color Color of the topic icon in RGB format
 * @property string $icon_custom_emoji_id Optional. Unique identifier of the custom emoji shown as the topic icon
 * @property bool $is_name_implicit Optional. True, if the name of the topic wasn't specified explicitly by its creator and likely needs to be changed by the bot
 *
 * @see https://core.telegram.org/bots/api#forumtopic
 */
class ForumTopic extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'message_thread_id' => 'int',
        'name' => 'string',
        'icon_color' => 'int',
        'icon_custom_emoji_id' => 'string',
        'is_name_implicit' => 'bool',
    ];
}
