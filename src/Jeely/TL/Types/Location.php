<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class Location
 * @description This object represents a point on the map.
 *
 * @method float getLongitude() Longitude as defined by sender
 * @method float getLatitude() Latitude as defined by sender
 * @method float getHorizontalAccuracy() Optional. The radius of uncertainty for the location, measured in meters;
0-1500
 * @method int getLivePeriod() Optional. Time relative to the message sending date, during which the location can be updated;
in seconds. For active live locations only.
 * @method int getHeading() Optional. The direction in which user is moving, in degrees;
1-360. For active live locations only.
 * @method int getProximityAlertRadius() Optional. The maximum distance for proximity alerts about approaching another chat member, in meters. For sent live locations only.
 *
 * @method bool isLongitude()
 * @method bool isLatitude()
 * @method bool isHorizontalAccuracy()
 * @method bool isLivePeriod()
 * @method bool isHeading()
 * @method bool isProximityAlertRadius()
 *
 * @method $this setLongitude()
 * @method $this setLatitude()
 * @method $this setHorizontalAccuracy()
 * @method $this setLivePeriod()
 * @method $this setHeading()
 * @method $this setProximityAlertRadius()
 *
 * @method $this unsetLongitude()
 * @method $this unsetLatitude()
 * @method $this unsetHorizontalAccuracy()
 * @method $this unsetLivePeriod()
 * @method $this unsetHeading()
 * @method $this unsetProximityAlertRadius()
 *
 * @property float $longitude Longitude as defined by sender
 * @property float $latitude Latitude as defined by sender
 * @property float $horizontal_accuracy Optional. The radius of uncertainty for the location, measured in meters; 0-1500
 * @property int $live_period Optional. Time relative to the message sending date, during which the location can be updated; in seconds. For active live locations only.
 * @property int $heading Optional. The direction in which user is moving, in degrees; 1-360. For active live locations only.
 * @property int $proximity_alert_radius Optional. The maximum distance for proximity alerts about approaching another chat member, in meters. For sent live locations only.
 *
 * @see https://core.telegram.org/bots/api#location
 */
class Location extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'longitude' => 'float',
        'latitude' => 'float',
        'horizontal_accuracy' => 'float',
        'live_period' => 'int',
        'heading' => 'int',
        'proximity_alert_radius' => 'int',
    ];
}