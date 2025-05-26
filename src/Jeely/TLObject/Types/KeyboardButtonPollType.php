<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class KeyboardButtonPollType
* @description This object represents type of a poll, which is allowed to be created and sent when the corresponding button is pressed.
*
* @property	string $type Optional. If quiz is passed, the user will be allowed to create only polls in the quiz mode. If regular is passed, only regular polls will be allowed. Otherwise, the user will be allowed to create a poll of any type.
* @method	string getType() Optional. If quiz is passed, the user will be allowed to create only polls in the quiz mode. If regular is passed, only regular polls will be allowed. Otherwise, the user will be allowed to create a poll of any type.
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

*/

class KeyboardButtonPollType extends TLObject implements \Jeely\Contracts\KeyboardButtonInterface
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
	];

}