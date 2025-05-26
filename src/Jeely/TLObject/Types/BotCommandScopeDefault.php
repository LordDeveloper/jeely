<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class BotCommandScopeDefault
* @description Represents the default scope of bot commands. Default commands are used if no commands with a narrower scope are specified for the user.
*
* @property	string $type Scope type, must be default
* @method	string getType() Scope type, must be default
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

*/

class BotCommandScopeDefault extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
	];

}