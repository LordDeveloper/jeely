<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class InputVenueMessageContent
* @description Represents the content of a venue message to be sent as the result of an inline query.
*
* @property	float $latitude Latitude of the venue in degrees
* @method	float getLatitude() Latitude of the venue in degrees
* @method	bool isLatitude()
* @method	$this setLatitude()
* @method	$this unsetLatitude()

* @property	float $longitude Longitude of the venue in degrees
* @method	float getLongitude() Longitude of the venue in degrees
* @method	bool isLongitude()
* @method	$this setLongitude()
* @method	$this unsetLongitude()

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

* @property	string $foursquare_id Optional. Foursquare identifier of the venue, if known
* @method	string getFoursquareId() Optional. Foursquare identifier of the venue, if known
* @method	bool isFoursquareId()
* @method	$this setFoursquareId()
* @method	$this unsetFoursquareId()

* @property	string $foursquare_type Optional. Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
* @method	string getFoursquareType() Optional. Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
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

class InputVenueMessageContent extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'latitude'=> 'float',
		'longitude'=> 'float',
		'title'=> 'string',
		'address'=> 'string',
		'foursquare_id'=> 'string',
		'foursquare_type'=> 'string',
		'google_place_id'=> 'string',
		'google_place_type'=> 'string',
	];

}