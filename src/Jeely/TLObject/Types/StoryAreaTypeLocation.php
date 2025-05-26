<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class StoryAreaTypeLocation
* @description Describes a story area pointing to a location. Currently, a story can have up to 10 location areas.
*
* @property	string $type Type of the area, always “location”
* @method	string getType() Type of the area, always “location”
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	float $latitude Location latitude in degrees
* @method	float getLatitude() Location latitude in degrees
* @method	bool isLatitude()
* @method	$this setLatitude()
* @method	$this unsetLatitude()

* @property	float $longitude Location longitude in degrees
* @method	float getLongitude() Location longitude in degrees
* @method	bool isLongitude()
* @method	$this setLongitude()
* @method	$this unsetLongitude()

* @property	LocationAddress $address Optional. Address of the location
* @method	LocationAddress getAddress() Optional. Address of the location
* @method	bool isAddress()
* @method	$this setAddress()
* @method	$this unsetAddress()

*/

class StoryAreaTypeLocation extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'latitude'=> 'float',
		'longitude'=> 'float',
		'address'=> 'LocationAddress',
	];

}