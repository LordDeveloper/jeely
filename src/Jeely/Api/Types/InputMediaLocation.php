<?php

namespace Jeely\Api\Types;

/**
 * @class InputMediaLocation
 * @description Represents a location to be sent.
 *
 * @method string getType() Type of the media, must be location
 * @method float getLatitude() Latitude of the location
 * @method float getLongitude() Longitude of the location
 * @method float getHorizontalAccuracy() Optional. The radius of uncertainty for the location, measured in meters; 0-1500
 *
 * @method bool isType()
 * @method bool isLatitude()
 * @method bool isLongitude()
 * @method bool isHorizontalAccuracy()
 *
 * @method $this setType()
 * @method $this setLatitude()
 * @method $this setLongitude()
 * @method $this setHorizontalAccuracy()
 *
 * @method $this unsetType()
 * @method $this unsetLatitude()
 * @method $this unsetLongitude()
 * @method $this unsetHorizontalAccuracy()
 *
 * @property string $type Type of the media, must be location
 * @property float $latitude Latitude of the location
 * @property float $longitude Longitude of the location
 * @property float $horizontal_accuracy Optional. The radius of uncertainty for the location, measured in meters; 0-1500
 *
 * @see https://core.telegram.org/bots/api#inputmedialocation
 */
class InputMediaLocation extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'latitude' => 'float',
        'longitude' => 'float',
        'horizontal_accuracy' => 'float',
    ];
}
