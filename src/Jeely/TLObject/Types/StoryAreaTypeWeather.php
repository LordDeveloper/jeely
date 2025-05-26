<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class StoryAreaTypeWeather
* @description Describes a story area containing weather information. Currently, a story can have up to 3 weather areas.
*
* @property	string $type Type of the area, always “weather”
* @method	string getType() Type of the area, always “weather”
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	float $temperature Temperature, in degree Celsius
* @method	float getTemperature() Temperature, in degree Celsius
* @method	bool isTemperature()
* @method	$this setTemperature()
* @method	$this unsetTemperature()

* @property	string $emoji Emoji representing the weather
* @method	string getEmoji() Emoji representing the weather
* @method	bool isEmoji()
* @method	$this setEmoji()
* @method	$this unsetEmoji()

* @property	int $background_color A color of the area background in the ARGB format
* @method	int getBackgroundColor() A color of the area background in the ARGB format
* @method	bool isBackgroundColor()
* @method	$this setBackgroundColor()
* @method	$this unsetBackgroundColor()

*/

class StoryAreaTypeWeather extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'temperature'=> 'float',
		'emoji'=> 'string',
		'background_color'=> 'int',
	];

}