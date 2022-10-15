<?php

namespace Jeely\TL\Types;

use Jeely\LazyUpdates;


/**
 * @class InputLocationMessageContent
 * @description Represents the content of a location message to be sent as the result of an inline query.
 *
 * @method float getLatitude() Latitude of the location in degrees
 * @method float getLongitude() Longitude of the location in degrees
 * @method float getHorizontalAccuracy() Optional. The radius of uncertainty for the location, measured in meters;
 * 0-1500
 * @method int getLivePeriod() Optional. Period in seconds for which the location can be updated, should be between 60 and 86400.
 * @method int getHeading() Optional. For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
 * @method int getProximityAlertRadius() Optional. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
 *
 * @method bool isLatitude()
 * @method bool isLongitude()
 * @method bool isHorizontalAccuracy()
 * @method bool isLivePeriod()
 * @method bool isHeading()
 * @method bool isProximityAlertRadius()
 *
 * @method $this setLatitude()
 * @method $this setLongitude()
 * @method $this setHorizontalAccuracy()
 * @method $this setLivePeriod()
 * @method $this setHeading()
 * @method $this setProximityAlertRadius()
 *
 * @method $this unsetLatitude()
 * @method $this unsetLongitude()
 * @method $this unsetHorizontalAccuracy()
 * @method $this unsetLivePeriod()
 * @method $this unsetHeading()
 * @method $this unsetProximityAlertRadius()
 *
 * @property float $latitude Latitude of the location in degrees
 * @property float $longitude Longitude of the location in degrees
 * @property float $horizontal_accuracy Optional. The radius of uncertainty for the location, measured in meters; 0-1500
 * @property int $live_period Optional. Period in seconds for which the location can be updated, should be between 60 and 86400.
 * @property int $heading Optional. For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
 * @property int $proximity_alert_radius Optional. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
 *
 * @see https://core.telegram.org/bots/api#inputlocationmessagecontent
 */
class InputLocationMessageContent extends LazyUpdates
{
    const JSON_PROPERTY_MAP = [
        'latitude' => 'float',
        'longitude' => 'float',
        'horizontal_accuracy' => 'float',
        'live_period' => 'int',
        'heading' => 'int',
        'proximity_alert_radius' => 'int',
    ];
}