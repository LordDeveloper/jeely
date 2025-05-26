<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class BackgroundFillFreeformGradient
* @description The background is a freeform gradient that rotates after every message in the chat.
*
* @property	string $type Type of the background fill, always “freeform_gradient”
* @method	string getType() Type of the background fill, always “freeform_gradient”
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	int[] $colors A list of the 3 or 4 base colors that are used to generate the freeform gradient in the RGB24 format
* @method	int[] getColors() A list of the 3 or 4 base colors that are used to generate the freeform gradient in the RGB24 format
* @method	bool isColors()
* @method	$this setColors()
* @method	$this unsetColors()

*/

class BackgroundFillFreeformGradient extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'colors'=> 'int[]',
	];

}