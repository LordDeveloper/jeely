<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class ChatBackground
* @description This object represents a chat background.
*
* @property	BackgroundType $type Type of the background
* @method	BackgroundType getType() Type of the background
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

*/

class ChatBackground extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'BackgroundType',
	];

}