<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class MessageEntity
* @description This object represents one special entity in a text message. For example, hashtags, usernames, URLs, etc.
*
* @property	string $type Type of the entity. Currently, can be “mention” (@username), “hashtag” (#hashtag or #hashtag@chatusername), “cashtag” ($USD or $USD@chatusername), “bot_command” (/start@jobs_bot), “url” (https://telegram.org), “email” (do-not-reply@telegram.org), “phone_number” (+1-212-555-0123), “bold” (bold text), “italic” (italic text), “underline” (underlined text), “strikethrough” (strikethrough text), “spoiler” (spoiler message), “blockquote” (block quotation), “expandable_blockquote” (collapsed-by-default block quotation), “code” (monowidth string), “pre” (monowidth block), “text_link” (for clickable text URLs), “text_mention” (for users without usernames), “custom_emoji” (for inline custom emoji stickers)
* @method	string getType() Type of the entity. Currently, can be “mention” (@username), “hashtag” (#hashtag or #hashtag@chatusername), “cashtag” ($USD or $USD@chatusername), “bot_command” (/start@jobs_bot), “url” (https://telegram.org), “email” (do-not-reply@telegram.org), “phone_number” (+1-212-555-0123), “bold” (bold text), “italic” (italic text), “underline” (underlined text), “strikethrough” (strikethrough text), “spoiler” (spoiler message), “blockquote” (block quotation), “expandable_blockquote” (collapsed-by-default block quotation), “code” (monowidth string), “pre” (monowidth block), “text_link” (for clickable text URLs), “text_mention” (for users without usernames), “custom_emoji” (for inline custom emoji stickers)
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	int $offset Offset in UTF-16 code units to the start of the entity
* @method	int getOffset() Offset in UTF-16 code units to the start of the entity
* @method	bool isOffset()
* @method	$this setOffset()
* @method	$this unsetOffset()

* @property	int $length Length of the entity in UTF-16 code units
* @method	int getLength() Length of the entity in UTF-16 code units
* @method	bool isLength()
* @method	$this setLength()
* @method	$this unsetLength()

* @property	string $url Optional. For “text_link” only, URL that will be opened after user taps on the text
* @method	string getUrl() Optional. For “text_link” only, URL that will be opened after user taps on the text
* @method	bool isUrl()
* @method	$this setUrl()
* @method	$this unsetUrl()

* @property	User $user Optional. For “text_mention” only, the mentioned user
* @method	User getUser() Optional. For “text_mention” only, the mentioned user
* @method	bool isUser()
* @method	$this setUser()
* @method	$this unsetUser()

* @property	string $language Optional. For “pre” only, the programming language of the entity text
* @method	string getLanguage() Optional. For “pre” only, the programming language of the entity text
* @method	bool isLanguage()
* @method	$this setLanguage()
* @method	$this unsetLanguage()

* @property	string $custom_emoji_id Optional. For “custom_emoji” only, unique identifier of the custom emoji. Use getCustomEmojiStickers to get full information about the sticker
* @method	string getCustomEmojiId() Optional. For “custom_emoji” only, unique identifier of the custom emoji. Use getCustomEmojiStickers to get full information about the sticker
* @method	bool isCustomEmojiId()
* @method	$this setCustomEmojiId()
* @method	$this unsetCustomEmojiId()

*/

class MessageEntity extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'offset'=> 'int',
		'length'=> 'int',
		'url'=> 'string',
		'user'=> 'User',
		'language'=> 'string',
		'custom_emoji_id'=> 'string',
	];

}