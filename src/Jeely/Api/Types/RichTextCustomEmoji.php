<?php

namespace Jeely\Api\Types;

/**
 * @class RichTextCustomEmoji
 * @description A custom emoji.
 *
 * @method string getType() Type of the rich text, always “custom_emoji”
 * @method string getCustomEmojiId() Unique identifier of the custom emoji. Use getCustomEmojiStickers to get full information about the sticker.
 * @method string getAlternativeText() Alternative emoji for the custom emoji
 *
 * @method bool isType()
 * @method bool isCustomEmojiId()
 * @method bool isAlternativeText()
 *
 * @method $this setType()
 * @method $this setCustomEmojiId()
 * @method $this setAlternativeText()
 *
 * @method $this unsetType()
 * @method $this unsetCustomEmojiId()
 * @method $this unsetAlternativeText()
 *
 * @property string $type Type of the rich text, always “custom_emoji”
 * @property string $custom_emoji_id Unique identifier of the custom emoji. Use getCustomEmojiStickers to get full information about the sticker.
 * @property string $alternative_text Alternative emoji for the custom emoji
 *
 * @see https://core.telegram.org/bots/api#richtextcustomemoji
 */
class RichTextCustomEmoji extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'custom_emoji_id' => 'string',
        'alternative_text' => 'string',
    ];
}
