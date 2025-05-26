<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;
use Jeely\TLObject\Types\InputMediaAnimation;
use Jeely\TLObject\Types\InputMediaDocument;
use Jeely\TLObject\Types\InputMediaAudio;
use Jeely\TLObject\Types\InputMediaPhoto;
use Jeely\TLObject\Types\InputMediaVideo;


/**
* @class InputMedia
* @description This object represents the content of a media message to be sent. It should be one of
*
*/

class InputMedia extends TLObject
{
	const JSON_PROPERTY_MAP = [
		InputMediaAnimation::class,
		InputMediaDocument::class,
		InputMediaAudio::class,
		InputMediaPhoto::class,
		InputMediaVideo::class,
	];

}