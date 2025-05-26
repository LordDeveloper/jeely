<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;
use Jeely\TLObject\Types\InputProfilePhotoStatic;
use Jeely\TLObject\Types\InputProfilePhotoAnimated;


/**
* @class InputProfilePhoto
* @description This object describes a profile photo to set. Currently, it can be one of
*
*/

class InputProfilePhoto extends TLObject
{
	const JSON_PROPERTY_MAP = [
		InputProfilePhotoStatic::class,
		InputProfilePhotoAnimated::class,
	];

}