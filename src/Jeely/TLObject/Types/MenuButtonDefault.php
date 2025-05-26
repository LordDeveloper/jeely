<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class MenuButtonDefault
* @description Describes that no specific value for the menu button was set.
*
* @property	string $type Type of the button, must be default
* @method	string getType() Type of the button, must be default
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

*/

class MenuButtonDefault extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
	];

}