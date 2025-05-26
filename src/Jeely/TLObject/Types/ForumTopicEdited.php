<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class ForumTopicEdited
* @description This object represents a service message about an edited forum topic.
*
* @property	string $name Optional. New name of the topic, if it was edited
* @method	string getName() Optional. New name of the topic, if it was edited
* @method	bool isName()
* @method	$this setName()
* @method	$this unsetName()

* @property	string $icon_custom_emoji_id Optional. New identifier of the custom emoji shown as the topic icon, if it was edited; an empty string if the icon was removed
* @method	string getIconCustomEmojiId() Optional. New identifier of the custom emoji shown as the topic icon, if it was edited; an empty string if the icon was removed
* @method	bool isIconCustomEmojiId()
* @method	$this setIconCustomEmojiId()
* @method	$this unsetIconCustomEmojiId()

*/

class ForumTopicEdited extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'name'=> 'string',
		'icon_custom_emoji_id'=> 'string',
	];

}