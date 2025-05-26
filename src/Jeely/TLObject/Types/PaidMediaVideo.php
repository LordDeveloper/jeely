<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class PaidMediaVideo
* @description The paid media is a video.
*
* @property	string $type Type of the paid media, always “video”
* @method	string getType() Type of the paid media, always “video”
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	Video $video The video
* @method	Video getVideo() The video
* @method	bool isVideo()
* @method	$this setVideo()
* @method	$this unsetVideo()

*/

class PaidMediaVideo extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'video'=> 'Video',
	];

}