<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;
use Jeely\TLObject\Types\BackgroundFillSolid;
use Jeely\TLObject\Types\BackgroundFillGradient;
use Jeely\TLObject\Types\BackgroundFillFreeformGradient;


/**
* @class BackgroundFill
* @description This object describes the way a background is filled based on the selected colors. Currently, it can be one of
*
*/

class BackgroundFill extends TLObject
{
	const JSON_PROPERTY_MAP = [
		BackgroundFillSolid::class,
		BackgroundFillGradient::class,
		BackgroundFillFreeformGradient::class,
	];

}