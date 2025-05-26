<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class BackgroundTypePattern
* @description The background is a .PNG or .TGV (gzipped subset of SVG with MIME type “application/x-tgwallpattern”) pattern to be combined with the background fill chosen by the user.
*
* @property	string $type Type of the background, always “pattern”
* @method	string getType() Type of the background, always “pattern”
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	Document $document Document with the pattern
* @method	Document getDocument() Document with the pattern
* @method	bool isDocument()
* @method	$this setDocument()
* @method	$this unsetDocument()

* @property	BackgroundFill $fill The background fill that is combined with the pattern
* @method	BackgroundFill getFill() The background fill that is combined with the pattern
* @method	bool isFill()
* @method	$this setFill()
* @method	$this unsetFill()

* @property	int $intensity Intensity of the pattern when it is shown above the filled background; 0-100
* @method	int getIntensity() Intensity of the pattern when it is shown above the filled background; 0-100
* @method	bool isIntensity()
* @method	$this setIntensity()
* @method	$this unsetIntensity()

* @property	bool $is_inverted Optional. True, if the background fill must be applied only to the pattern itself. All other pixels are black in this case. For dark themes only
* @method	bool getIsInverted() Optional. True, if the background fill must be applied only to the pattern itself. All other pixels are black in this case. For dark themes only
* @method	bool isIsInverted()
* @method	$this setIsInverted()
* @method	$this unsetIsInverted()

* @property	bool $is_moving Optional. True, if the background moves slightly when the device is tilted
* @method	bool getIsMoving() Optional. True, if the background moves slightly when the device is tilted
* @method	bool isIsMoving()
* @method	$this setIsMoving()
* @method	$this unsetIsMoving()

*/

class BackgroundTypePattern extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'document'=> 'Document',
		'fill'=> 'BackgroundFill',
		'intensity'=> 'int',
		'is_inverted'=> 'bool',
		'is_moving'=> 'bool',
	];

}