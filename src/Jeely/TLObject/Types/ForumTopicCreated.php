<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class ForumTopicCreated
* @description This object represents a service message about a new forum topic created in the chat.
*
* @property	string $name Name of the topic
* @method	string getName() Name of the topic
* @method	bool isName()
* @method	$this setName()
* @method	$this unsetName()

* @property	int $icon_color Color of the topic icon in RGB format
* @method	int getIconColor() Color of the topic icon in RGB format
* @method	bool isIconColor()
* @method	$this setIconColor()
* @method	$this unsetIconColor()

* @property	string $icon_custom_emoji_id Optional. Unique identifier of the custom emoji shown as the topic icon
* @method	string getIconCustomEmojiId() Optional. Unique identifier of the custom emoji shown as the topic icon
* @method	bool isIconCustomEmojiId()
* @method	$this setIconCustomEmojiId()
* @method	$this unsetIconCustomEmojiId()

*/

class ForumTopicCreated extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'name'=> 'string',
		'icon_color'=> 'int',
		'icon_custom_emoji_id'=> 'string',
	];

}