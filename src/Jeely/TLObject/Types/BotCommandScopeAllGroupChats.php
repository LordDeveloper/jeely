<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class BotCommandScopeAllGroupChats
* @description Represents the scope of bot commands, covering all group and supergroup chats.
*
* @property	string $type Scope type, must be all_group_chats
* @method	string getType() Scope type, must be all_group_chats
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

*/

class BotCommandScopeAllGroupChats extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
	];

}