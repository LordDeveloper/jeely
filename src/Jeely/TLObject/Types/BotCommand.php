<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class BotCommand
* @description This object represents a bot command.
*
* @property	string $command Text of the command; 1-32 characters. Can contain only lowercase English letters, digits and underscores.
* @method	string getCommand() Text of the command; 1-32 characters. Can contain only lowercase English letters, digits and underscores.
* @method	bool isCommand()
* @method	$this setCommand()
* @method	$this unsetCommand()

* @property	string $description Description of the command; 1-256 characters.
* @method	string getDescription() Description of the command; 1-256 characters.
* @method	bool isDescription()
* @method	$this setDescription()
* @method	$this unsetDescription()

*/

class BotCommand extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'command'=> 'string',
		'description'=> 'string',
	];

}