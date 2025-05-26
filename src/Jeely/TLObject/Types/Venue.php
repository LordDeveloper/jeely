<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class Venue
* @description This object represents a venue.
*
* @property	Location $location Venue location. Can't be a live location
* @method	Location getLocation() Venue location. Can't be a live location
* @method	bool isLocation()
* @method	$this setLocation()
* @method	$this unsetLocation()

* @property	string $title Name of the venue
* @method	string getTitle() Name of the venue
* @method	bool isTitle()
* @method	$this setTitle()
* @method	$this unsetTitle()

* @property	string $address Address of the venue
* @method	string getAddress() Address of the venue
* @method	bool isAddress()
* @method	$this setAddress()
* @method	$this unsetAddress()

* @property	string $foursquare_id Optional. Foursquare identifier of the venue
* @method	string getFoursquareId() Optional. Foursquare identifier of the venue
* @method	bool isFoursquareId()
* @method	$this setFoursquareId()
* @method	$this unsetFoursquareId()

* @property	string $foursquare_type Optional. Foursquare type of the venue. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
* @method	string getFoursquareType() Optional. Foursquare type of the venue. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
* @method	bool isFoursquareType()
* @method	$this setFoursquareType()
* @method	$this unsetFoursquareType()

* @property	string $google_place_id Optional. Google Places identifier of the venue
* @method	string getGooglePlaceId() Optional. Google Places identifier of the venue
* @method	bool isGooglePlaceId()
* @method	$this setGooglePlaceId()
* @method	$this unsetGooglePlaceId()

* @property	string $google_place_type Optional. Google Places type of the venue. (See supported types.)
* @method	string getGooglePlaceType() Optional. Google Places type of the venue. (See supported types.)
* @method	bool isGooglePlaceType()
* @method	$this setGooglePlaceType()
* @method	$this unsetGooglePlaceType()

*/

class Venue extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'location'=> 'Location',
		'title'=> 'string',
		'address'=> 'string',
		'foursquare_id'=> 'string',
		'foursquare_type'=> 'string',
		'google_place_id'=> 'string',
		'google_place_type'=> 'string',
	];

}