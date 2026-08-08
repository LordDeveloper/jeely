<?php

namespace Jeely\Api\Types;

/**
 * @class ReactionTypeCustomEmoji
 * @description The reaction is based on a custom emoji.
 *
 * @method string getType() Type of the reaction, always “custom_emoji”
 * @method string getCustomEmojiId() Custom emoji identifier
 *
 * @method bool isType()
 * @method bool isCustomEmojiId()
 *
 * @method $this setType()
 * @method $this setCustomEmojiId()
 *
 * @method $this unsetType()
 * @method $this unsetCustomEmojiId()
 *
 * @property string $type Type of the reaction, always “custom_emoji”
 * @property string $custom_emoji_id Custom emoji identifier
 *
 * @see https://core.telegram.org/bots/api#reactiontypecustomemoji
 */
class ReactionTypeCustomEmoji extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'custom_emoji_id' => 'string',
    ];
}
