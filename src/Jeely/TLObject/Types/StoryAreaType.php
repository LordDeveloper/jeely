<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;
use Jeely\TLObject\Types\StoryAreaTypeLocation;
use Jeely\TLObject\Types\StoryAreaTypeSuggestedReaction;
use Jeely\TLObject\Types\StoryAreaTypeLink;
use Jeely\TLObject\Types\StoryAreaTypeWeather;
use Jeely\TLObject\Types\StoryAreaTypeUniqueGift;


/**
* @class StoryAreaType
* @description Describes the type of a clickable area on a story. Currently, it can be one of
*
*/

class StoryAreaType extends TLObject
{
	const JSON_PROPERTY_MAP = [
		StoryAreaTypeLocation::class,
		StoryAreaTypeSuggestedReaction::class,
		StoryAreaTypeLink::class,
		StoryAreaTypeWeather::class,
		StoryAreaTypeUniqueGift::class,
	];

}