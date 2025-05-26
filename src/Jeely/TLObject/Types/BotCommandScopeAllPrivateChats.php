<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class BotCommandScopeAllPrivateChats
* @description Represents the scope of bot commands, covering all private chats.
*
* @property	string $type Scope type, must be all_private_chats
* @method	string getType() Scope type, must be all_private_chats
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

*/

class BotCommandScopeAllPrivateChats extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
	];

}