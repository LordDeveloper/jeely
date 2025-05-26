<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class BotCommandScopeChat
* @description Represents the scope of bot commands, covering a specific chat.
*
* @property	string $type Scope type, must be chat
* @method	string getType() Scope type, must be chat
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
* @method	int|string getChatId() Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
* @method	bool isChatId()
* @method	$this setChatId()
* @method	$this unsetChatId()

*/

class BotCommandScopeChat extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'chat_id'=> 'int|string',
	];

}