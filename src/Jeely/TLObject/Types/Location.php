<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class Location
* @description This object represents a point on the map.
*
* @property	float $latitude Latitude as defined by the sender
* @method	float getLatitude() Latitude as defined by the sender
* @method	bool isLatitude()
* @method	$this setLatitude()
* @method	$this unsetLatitude()

* @property	float $longitude Longitude as defined by the sender
* @method	float getLongitude() Longitude as defined by the sender
* @method	bool isLongitude()
* @method	$this setLongitude()
* @method	$this unsetLongitude()

* @property	float $horizontal_accuracy Optional. The radius of uncertainty for the location, measured in meters; 0-1500
* @method	float getHorizontalAccuracy() Optional. The radius of uncertainty for the location, measured in meters; 0-1500
* @method	bool isHorizontalAccuracy()
* @method	$this setHorizontalAccuracy()
* @method	$this unsetHorizontalAccuracy()

* @property	int $live_period Optional. Time relative to the message sending date, during which the location can be updated; in seconds. For active live locations only.
* @method	int getLivePeriod() Optional. Time relative to the message sending date, during which the location can be updated; in seconds. For active live locations only.
* @method	bool isLivePeriod()
* @method	$this setLivePeriod()
* @method	$this unsetLivePeriod()

* @property	int $heading Optional. The direction in which user is moving, in degrees; 1-360. For active live locations only.
* @method	int getHeading() Optional. The direction in which user is moving, in degrees; 1-360. For active live locations only.
* @method	bool isHeading()
* @method	$this setHeading()
* @method	$this unsetHeading()

* @property	int $proximity_alert_radius Optional. The maximum distance for proximity alerts about approaching another chat member, in meters. For sent live locations only.
* @method	int getProximityAlertRadius() Optional. The maximum distance for proximity alerts about approaching another chat member, in meters. For sent live locations only.
* @method	bool isProximityAlertRadius()
* @method	$this setProximityAlertRadius()
* @method	$this unsetProximityAlertRadius()

*/

class Location extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'latitude'=> 'float',
		'longitude'=> 'float',
		'horizontal_accuracy'=> 'float',
		'live_period'=> 'int',
		'heading'=> 'int',
		'proximity_alert_radius'=> 'int',
	];

}