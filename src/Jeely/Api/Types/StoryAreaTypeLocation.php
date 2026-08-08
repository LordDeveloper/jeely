<?php

namespace Jeely\Api\Types;

/**
 * @class StoryAreaTypeLocation
 * @description Describes a story area pointing to a location. Currently, a story can have up to 10 location areas.
 *
 * @method string getType() Type of the area, always “location”
 * @method float getLatitude() Location latitude in degrees
 * @method float getLongitude() Location longitude in degrees
 * @method LocationAddress getAddress() Optional. Address of the location
 *
 * @method bool isType()
 * @method bool isLatitude()
 * @method bool isLongitude()
 * @method bool isAddress()
 *
 * @method $this setType()
 * @method $this setLatitude()
 * @method $this setLongitude()
 * @method $this setAddress()
 *
 * @method $this unsetType()
 * @method $this unsetLatitude()
 * @method $this unsetLongitude()
 * @method $this unsetAddress()
 *
 * @property string $type Type of the area, always “location”
 * @property float $latitude Location latitude in degrees
 * @property float $longitude Location longitude in degrees
 * @property LocationAddress $address Optional. Address of the location
 *
 * @see https://core.telegram.org/bots/api#storyareatypelocation
 */
class StoryAreaTypeLocation extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'latitude' => 'float',
        'longitude' => 'float',
        'address' => 'LocationAddress',
    ];
}
