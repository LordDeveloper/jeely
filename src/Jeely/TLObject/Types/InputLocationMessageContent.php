<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class InputLocationMessageContent
* @description Represents the content of a location message to be sent as the result of an inline query.
*
* @property	float $latitude Latitude of the location in degrees
* @method	float getLatitude() Latitude of the location in degrees
* @method	bool isLatitude()
* @method	$this setLatitude()
* @method	$this unsetLatitude()

* @property	float $longitude Longitude of the location in degrees
* @method	float getLongitude() Longitude of the location in degrees
* @method	bool isLongitude()
* @method	$this setLongitude()
* @method	$this unsetLongitude()

* @property	float $horizontal_accuracy Optional. The radius of uncertainty for the location, measured in meters; 0-1500
* @method	float getHorizontalAccuracy() Optional. The radius of uncertainty for the location, measured in meters; 0-1500
* @method	bool isHorizontalAccuracy()
* @method	$this setHorizontalAccuracy()
* @method	$this unsetHorizontalAccuracy()

* @property	int $live_period Optional. Period in seconds during which the location can be updated, should be between 60 and 86400, or 0x7FFFFFFF for live locations that can be edited indefinitely.
* @method	int getLivePeriod() Optional. Period in seconds during which the location can be updated, should be between 60 and 86400, or 0x7FFFFFFF for live locations that can be edited indefinitely.
* @method	bool isLivePeriod()
* @method	$this setLivePeriod()
* @method	$this unsetLivePeriod()

* @property	int $heading Optional. For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
* @method	int getHeading() Optional. For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
* @method	bool isHeading()
* @method	$this setHeading()
* @method	$this unsetHeading()

* @property	int $proximity_alert_radius Optional. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
* @method	int getProximityAlertRadius() Optional. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
* @method	bool isProximityAlertRadius()
* @method	$this setProximityAlertRadius()
* @method	$this unsetProximityAlertRadius()

*/

class InputLocationMessageContent extends TLObject
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