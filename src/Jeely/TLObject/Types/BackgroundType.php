<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;
use Jeely\TLObject\Types\BackgroundTypeFill;
use Jeely\TLObject\Types\BackgroundTypeWallpaper;
use Jeely\TLObject\Types\BackgroundTypePattern;
use Jeely\TLObject\Types\BackgroundTypeChatTheme;


/**
* @class BackgroundType
* @description This object describes the type of a background. Currently, it can be one of
*
*/

class BackgroundType extends TLObject
{
	const JSON_PROPERTY_MAP = [
		BackgroundTypeFill::class,
		BackgroundTypeWallpaper::class,
		BackgroundTypePattern::class,
		BackgroundTypeChatTheme::class,
	];

}