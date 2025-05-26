<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class StoryAreaPosition
* @description Describes the position of a clickable area within a story.
*
* @property	float $x_percentage The abscissa of the area's center, as a percentage of the media width
* @method	float getXPercentage() The abscissa of the area's center, as a percentage of the media width
* @method	bool isXPercentage()
* @method	$this setXPercentage()
* @method	$this unsetXPercentage()

* @property	float $y_percentage The ordinate of the area's center, as a percentage of the media height
* @method	float getYPercentage() The ordinate of the area's center, as a percentage of the media height
* @method	bool isYPercentage()
* @method	$this setYPercentage()
* @method	$this unsetYPercentage()

* @property	float $width_percentage The width of the area's rectangle, as a percentage of the media width
* @method	float getWidthPercentage() The width of the area's rectangle, as a percentage of the media width
* @method	bool isWidthPercentage()
* @method	$this setWidthPercentage()
* @method	$this unsetWidthPercentage()

* @property	float $height_percentage The height of the area's rectangle, as a percentage of the media height
* @method	float getHeightPercentage() The height of the area's rectangle, as a percentage of the media height
* @method	bool isHeightPercentage()
* @method	$this setHeightPercentage()
* @method	$this unsetHeightPercentage()

* @property	float $rotation_angle The clockwise rotation angle of the rectangle, in degrees; 0-360
* @method	float getRotationAngle() The clockwise rotation angle of the rectangle, in degrees; 0-360
* @method	bool isRotationAngle()
* @method	$this setRotationAngle()
* @method	$this unsetRotationAngle()

* @property	float $corner_radius_percentage The radius of the rectangle corner rounding, as a percentage of the media width
* @method	float getCornerRadiusPercentage() The radius of the rectangle corner rounding, as a percentage of the media width
* @method	bool isCornerRadiusPercentage()
* @method	$this setCornerRadiusPercentage()
* @method	$this unsetCornerRadiusPercentage()

*/

class StoryAreaPosition extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'x_percentage'=> 'float',
		'y_percentage'=> 'float',
		'width_percentage'=> 'float',
		'height_percentage'=> 'float',
		'rotation_angle'=> 'float',
		'corner_radius_percentage'=> 'float',
	];

}