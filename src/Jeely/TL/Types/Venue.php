<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class Venue
 * @description This object represents a venue.
 *
 * @method Location getLocation() Venue location. Can't be a live location
 * @method string getTitle() Name of the venue
 * @method string getAddress() Address of the venue
 * @method string getFoursquareId() Optional. Foursquare identifier of the venue
 * @method string getFoursquareType() Optional. Foursquare type of the venue. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
 * @method string getGooglePlaceId() Optional. Google Places identifier of the venue
 * @method string getGooglePlaceType() Optional. Google Places type of the venue. (See supported types.)
 *
 * @method bool isLocation()
 * @method bool isTitle()
 * @method bool isAddress()
 * @method bool isFoursquareId()
 * @method bool isFoursquareType()
 * @method bool isGooglePlaceId()
 * @method bool isGooglePlaceType()
 *
 * @method $this setLocation()
 * @method $this setTitle()
 * @method $this setAddress()
 * @method $this setFoursquareId()
 * @method $this setFoursquareType()
 * @method $this setGooglePlaceId()
 * @method $this setGooglePlaceType()
 *
 * @method $this unsetLocation()
 * @method $this unsetTitle()
 * @method $this unsetAddress()
 * @method $this unsetFoursquareId()
 * @method $this unsetFoursquareType()
 * @method $this unsetGooglePlaceId()
 * @method $this unsetGooglePlaceType()
 *
 * @property Location $location Venue location. Can't be a live location
 * @property string $title Name of the venue
 * @property string $address Address of the venue
 * @property string $foursquare_id Optional. Foursquare identifier of the venue
 * @property string $foursquare_type Optional. Foursquare type of the venue. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
 * @property string $google_place_id Optional. Google Places identifier of the venue
 * @property string $google_place_type Optional. Google Places type of the venue. (See supported types.)
 *
 * @see https://core.telegram.org/bots/api#venue 
 */
class Venue extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
		'location' => 'Location',
		'title' => 'string',
		'address' => 'string',
		'foursquare_id' => 'string',
		'foursquare_type' => 'string',
		'google_place_id' => 'string',
		'google_place_type' => 'string',
	];
}