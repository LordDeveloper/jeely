<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class PaidMediaPhoto
* @description The paid media is a photo.
*
* @property	string $type Type of the paid media, always “photo”
* @method	string getType() Type of the paid media, always “photo”
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	PhotoSize[] $photo The photo
* @method	PhotoSize[] getPhoto() The photo
* @method	bool isPhoto()
* @method	$this setPhoto()
* @method	$this unsetPhoto()

*/

class PaidMediaPhoto extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'photo'=> 'PhotoSize[]',
	];

}