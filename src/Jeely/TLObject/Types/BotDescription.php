<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class BotDescription
* @description This object represents the bot's description.
*
* @property	string $description The bot's description
* @method	string getDescription() The bot's description
* @method	bool isDescription()
* @method	$this setDescription()
* @method	$this unsetDescription()

*/

class BotDescription extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'description'=> 'string',
	];

}