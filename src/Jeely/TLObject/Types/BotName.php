<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class BotName
* @description This object represents the bot's name.
*
* @property	string $name The bot's name
* @method	string getName() The bot's name
* @method	bool isName()
* @method	$this setName()
* @method	$this unsetName()

*/

class BotName extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'name'=> 'string',
	];

}