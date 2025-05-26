<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class BotCommandScopeAllChatAdministrators
* @description Represents the scope of bot commands, covering all group and supergroup chat administrators.
*
* @property	string $type Scope type, must be all_chat_administrators
* @method	string getType() Scope type, must be all_chat_administrators
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

*/

class BotCommandScopeAllChatAdministrators extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
	];

}