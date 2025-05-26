<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class PaidMediaPreview
* @description The paid media isn't available before the payment.
*
* @property	string $type Type of the paid media, always “preview”
* @method	string getType() Type of the paid media, always “preview”
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	int $width Optional. Media width as defined by the sender
* @method	int getWidth() Optional. Media width as defined by the sender
* @method	bool isWidth()
* @method	$this setWidth()
* @method	$this unsetWidth()

* @property	int $height Optional. Media height as defined by the sender
* @method	int getHeight() Optional. Media height as defined by the sender
* @method	bool isHeight()
* @method	$this setHeight()
* @method	$this unsetHeight()

* @property	int $duration Optional. Duration of the media in seconds as defined by the sender
* @method	int getDuration() Optional. Duration of the media in seconds as defined by the sender
* @method	bool isDuration()
* @method	$this setDuration()
* @method	$this unsetDuration()

*/

class PaidMediaPreview extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'width'=> 'int',
		'height'=> 'int',
		'duration'=> 'int',
	];

}