<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class BackgroundFillGradient
* @description The background is a gradient fill.
*
* @property	string $type Type of the background fill, always “gradient”
* @method	string getType() Type of the background fill, always “gradient”
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	int $top_color Top color of the gradient in the RGB24 format
* @method	int getTopColor() Top color of the gradient in the RGB24 format
* @method	bool isTopColor()
* @method	$this setTopColor()
* @method	$this unsetTopColor()

* @property	int $bottom_color Bottom color of the gradient in the RGB24 format
* @method	int getBottomColor() Bottom color of the gradient in the RGB24 format
* @method	bool isBottomColor()
* @method	$this setBottomColor()
* @method	$this unsetBottomColor()

* @property	int $rotation_angle Clockwise rotation angle of the background fill in degrees; 0-359
* @method	int getRotationAngle() Clockwise rotation angle of the background fill in degrees; 0-359
* @method	bool isRotationAngle()
* @method	$this setRotationAngle()
* @method	$this unsetRotationAngle()

*/

class BackgroundFillGradient extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'top_color'=> 'int',
		'bottom_color'=> 'int',
		'rotation_angle'=> 'int',
	];

}