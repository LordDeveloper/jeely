<?php

namespace Jeely\TL\Types;

use Jeely\LazyUpdates;


/**
 * @class MessageEntity
 * @description This object represents one special entity in a text message. For example, hashtags, usernames, URLs, etc.
 *
 * @method string getType() Type of the entity. Currently, can be “mention” (@username), “hashtag” (#hashtag), “cashtag” ($USD), “bot_command” (/start@jobs_bot), “url” (https://telegram.org), “email” (do-not-reply@telegram.org), “phone_number” (+1-212-555-0123), “bold” (bold text), “italic” (italic text), “underline” (underlined text), “strikethrough” (strikethrough text), “spoiler” (spoiler message), “code” (monowidth string), “pre” (monowidth block), “text_link” (for clickable text URLs), “text_mention” (for users without usernames), “custom_emoji” (for inline custom emoji stickers)
 * @method int getOffset() Offset in UTF-16 code units to the start of the entity
 * @method int getLength() Length of the entity in UTF-16 code units
 * @method string getUrl() Optional. For “text_link” only, URL that will be opened after user taps on the text
 * @method User getUser() Optional. For “text_mention” only, the mentioned user
 * @method string getLanguage() Optional. For “pre” only, the programming language of the entity text
 * @method string getCustomEmojiId() Optional. For “custom_emoji” only, unique identifier of the custom emoji. Use getCustomEmojiStickers to get full information about the sticker
 *
 * @method bool isType()
 * @method bool isOffset()
 * @method bool isLength()
 * @method bool isUrl()
 * @method bool isUser()
 * @method bool isLanguage()
 * @method bool isCustomEmojiId()
 *
 * @method $this setType()
 * @method $this setOffset()
 * @method $this setLength()
 * @method $this setUrl()
 * @method $this setUser()
 * @method $this setLanguage()
 * @method $this setCustomEmojiId()
 *
 * @method $this unsetType()
 * @method $this unsetOffset()
 * @method $this unsetLength()
 * @method $this unsetUrl()
 * @method $this unsetUser()
 * @method $this unsetLanguage()
 * @method $this unsetCustomEmojiId()
 *
 * @property string $type Type of the entity. Currently, can be “mention” (@username), “hashtag” (#hashtag), “cashtag” ($USD), “bot_command” (/start@jobs_bot), “url” (https://telegram.org), “email” (do-not-reply@telegram.org), “phone_number” (+1-212-555-0123), “bold” (bold text), “italic” (italic text), “underline” (underlined text), “strikethrough” (strikethrough text), “spoiler” (spoiler message), “code” (monowidth string), “pre” (monowidth block), “text_link” (for clickable text URLs), “text_mention” (for users without usernames), “custom_emoji” (for inline custom emoji stickers)
 * @property int $offset Offset in UTF-16 code units to the start of the entity
 * @property int $length Length of the entity in UTF-16 code units
 * @property string $url Optional. For “text_link” only, URL that will be opened after user taps on the text
 * @property User $user Optional. For “text_mention” only, the mentioned user
 * @property string $language Optional. For “pre” only, the programming language of the entity text
 * @property string $custom_emoji_id Optional. For “custom_emoji” only, unique identifier of the custom emoji. Use getCustomEmojiStickers to get full information about the sticker
 *
 * @see https://core.telegram.org/bots/api#messageentity
 */
class MessageEntity extends LazyUpdates
{
    const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'offset' => 'int',
        'length' => 'int',
        'url' => 'string',
        'user' => 'User',
        'language' => 'string',
        'custom_emoji_id' => 'string',
    ];
}