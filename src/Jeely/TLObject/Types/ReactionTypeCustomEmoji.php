<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class ReactionTypeCustomEmoji
* @description The reaction is based on a custom emoji.
*
* @property	string $type Type of the reaction, always “custom_emoji”
* @method	string getType() Type of the reaction, always “custom_emoji”
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	string $custom_emoji_id Custom emoji identifier
* @method	string getCustomEmojiId() Custom emoji identifier
* @method	bool isCustomEmojiId()
* @method	$this setCustomEmojiId()
* @method	$this unsetCustomEmojiId()

*/

class ReactionTypeCustomEmoji extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'custom_emoji_id'=> 'string',
	];

}