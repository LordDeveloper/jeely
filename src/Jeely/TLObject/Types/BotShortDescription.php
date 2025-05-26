<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class BotShortDescription
* @description This object represents the bot's short description.
*
* @property	string $short_description The bot's short description
* @method	string getShortDescription() The bot's short description
* @method	bool isShortDescription()
* @method	$this setShortDescription()
* @method	$this unsetShortDescription()

*/

class BotShortDescription extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'short_description'=> 'string',
	];

}