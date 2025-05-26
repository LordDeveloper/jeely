<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class ReactionTypePaid
* @description The reaction is paid.
*
* @property	string $type Type of the reaction, always “paid”
* @method	string getType() Type of the reaction, always “paid”
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

*/

class ReactionTypePaid extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
	];

}