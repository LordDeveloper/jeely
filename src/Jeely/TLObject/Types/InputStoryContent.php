<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;
use Jeely\TLObject\Types\InputStoryContentPhoto;
use Jeely\TLObject\Types\InputStoryContentVideo;


/**
* @class InputStoryContent
* @description This object describes the content of a story to post. Currently, it can be one of
*
*/

class InputStoryContent extends TLObject
{
	const JSON_PROPERTY_MAP = [
		InputStoryContentPhoto::class,
		InputStoryContentVideo::class,
	];

}