<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;
use Jeely\TLObject\Types\InputPaidMediaPhoto;
use Jeely\TLObject\Types\InputPaidMediaVideo;


/**
* @class InputPaidMedia
* @description This object describes the paid media to be sent. Currently, it can be one of
*
*/

class InputPaidMedia extends TLObject
{
	const JSON_PROPERTY_MAP = [
		InputPaidMediaPhoto::class,
		InputPaidMediaVideo::class,
	];

}