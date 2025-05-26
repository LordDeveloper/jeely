<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;
use Jeely\TLObject\Types\PaidMediaPreview;
use Jeely\TLObject\Types\PaidMediaPhoto;
use Jeely\TLObject\Types\PaidMediaVideo;


/**
* @class PaidMedia
* @description This object describes paid media. Currently, it can be one of
*
*/

class PaidMedia extends TLObject
{
	const JSON_PROPERTY_MAP = [
		PaidMediaPreview::class,
		PaidMediaPhoto::class,
		PaidMediaVideo::class,
	];

}