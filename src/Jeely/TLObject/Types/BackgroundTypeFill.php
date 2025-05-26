<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class BackgroundTypeFill
* @description The background is automatically filled based on the selected colors.
*
* @property	string $type Type of the background, always “fill”
* @method	string getType() Type of the background, always “fill”
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	BackgroundFill $fill The background fill
* @method	BackgroundFill getFill() The background fill
* @method	bool isFill()
* @method	$this setFill()
* @method	$this unsetFill()

* @property	int $dark_theme_dimming Dimming of the background in dark themes, as a percentage; 0-100
* @method	int getDarkThemeDimming() Dimming of the background in dark themes, as a percentage; 0-100
* @method	bool isDarkThemeDimming()
* @method	$this setDarkThemeDimming()
* @method	$this unsetDarkThemeDimming()

*/

class BackgroundTypeFill extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'fill'=> 'BackgroundFill',
		'dark_theme_dimming'=> 'int',
	];

}