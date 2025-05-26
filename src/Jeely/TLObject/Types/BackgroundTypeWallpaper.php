<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class BackgroundTypeWallpaper
* @description The background is a wallpaper in the JPEG format.
*
* @property	string $type Type of the background, always “wallpaper”
* @method	string getType() Type of the background, always “wallpaper”
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	Document $document Document with the wallpaper
* @method	Document getDocument() Document with the wallpaper
* @method	bool isDocument()
* @method	$this setDocument()
* @method	$this unsetDocument()

* @property	int $dark_theme_dimming Dimming of the background in dark themes, as a percentage; 0-100
* @method	int getDarkThemeDimming() Dimming of the background in dark themes, as a percentage; 0-100
* @method	bool isDarkThemeDimming()
* @method	$this setDarkThemeDimming()
* @method	$this unsetDarkThemeDimming()

* @property	bool $is_blurred Optional. True, if the wallpaper is downscaled to fit in a 450x450 square and then box-blurred with radius 12
* @method	bool getIsBlurred() Optional. True, if the wallpaper is downscaled to fit in a 450x450 square and then box-blurred with radius 12
* @method	bool isIsBlurred()
* @method	$this setIsBlurred()
* @method	$this unsetIsBlurred()

* @property	bool $is_moving Optional. True, if the background moves slightly when the device is tilted
* @method	bool getIsMoving() Optional. True, if the background moves slightly when the device is tilted
* @method	bool isIsMoving()
* @method	$this setIsMoving()
* @method	$this unsetIsMoving()

*/

class BackgroundTypeWallpaper extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'document'=> 'Document',
		'dark_theme_dimming'=> 'int',
		'is_blurred'=> 'bool',
		'is_moving'=> 'bool',
	];

}