<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class Story
* @description This object represents a story.
*
* @property	Chat $chat Chat that posted the story
* @method	Chat getChat() Chat that posted the story
* @method	bool isChat()
* @method	$this setChat()
* @method	$this unsetChat()

* @property	int $id Unique identifier for the story in the chat
* @method	int getId() Unique identifier for the story in the chat
* @method	bool isId()
* @method	$this setId()
* @method	$this unsetId()

*/

class Story extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'chat'=> 'Chat',
		'id'=> 'int',
	];

}