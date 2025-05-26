<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class BackgroundFillSolid
* @description The background is filled using the selected color.
*
* @property	string $type Type of the background fill, always “solid”
* @method	string getType() Type of the background fill, always “solid”
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	int $color The color of the background fill in the RGB24 format
* @method	int getColor() The color of the background fill in the RGB24 format
* @method	bool isColor()
* @method	$this setColor()
* @method	$this unsetColor()

*/

class BackgroundFillSolid extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'color'=> 'int',
	];

}