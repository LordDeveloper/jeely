<?php

namespace Jeely\Api\Types;

/**
 * @class StoryAreaTypeWeather
 * @description Describes a story area containing weather information. Currently, a story can have up to 3 weather areas.
 *
 * @method string getType() Type of the area, always “weather”
 * @method float getTemperature() Temperature, in degree Celsius
 * @method string getEmoji() Emoji representing the weather
 * @method int getBackgroundColor() A color of the area background in the ARGB format
 *
 * @method bool isType()
 * @method bool isTemperature()
 * @method bool isEmoji()
 * @method bool isBackgroundColor()
 *
 * @method $this setType()
 * @method $this setTemperature()
 * @method $this setEmoji()
 * @method $this setBackgroundColor()
 *
 * @method $this unsetType()
 * @method $this unsetTemperature()
 * @method $this unsetEmoji()
 * @method $this unsetBackgroundColor()
 *
 * @property string $type Type of the area, always “weather”
 * @property float $temperature Temperature, in degree Celsius
 * @property string $emoji Emoji representing the weather
 * @property int $background_color A color of the area background in the ARGB format
 *
 * @see https://core.telegram.org/bots/api#storyareatypeweather
 */
class StoryAreaTypeWeather extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'temperature' => 'float',
        'emoji' => 'string',
        'background_color' => 'int',
    ];
}
