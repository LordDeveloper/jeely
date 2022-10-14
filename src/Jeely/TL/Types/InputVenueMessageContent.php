<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class InputVenueMessageContent
 * @description Represents the content of a venue message to be sent as the result of an inline query.
 *
 * @method float getLatitude() Latitude of the venue in degrees
 * @method float getLongitude() Longitude of the venue in degrees
 * @method string getTitle() Name of the venue
 * @method string getAddress() Address of the venue
 * @method string getFoursquareId() Optional. Foursquare identifier of the venue, if known
 * @method string getFoursquareType() Optional. Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
 * @method string getGooglePlaceId() Optional. Google Places identifier of the venue
 * @method string getGooglePlaceType() Optional. Google Places type of the venue. (See supported types.)
 *
 * @method bool isLatitude()
 * @method bool isLongitude()
 * @method bool isTitle()
 * @method bool isAddress()
 * @method bool isFoursquareId()
 * @method bool isFoursquareType()
 * @method bool isGooglePlaceId()
 * @method bool isGooglePlaceType()
 *
 * @method $this setLatitude()
 * @method $this setLongitude()
 * @method $this setTitle()
 * @method $this setAddress()
 * @method $this setFoursquareId()
 * @method $this setFoursquareType()
 * @method $this setGooglePlaceId()
 * @method $this setGooglePlaceType()
 *
 * @method $this unsetLatitude()
 * @method $this unsetLongitude()
 * @method $this unsetTitle()
 * @method $this unsetAddress()
 * @method $this unsetFoursquareId()
 * @method $this unsetFoursquareType()
 * @method $this unsetGooglePlaceId()
 * @method $this unsetGooglePlaceType()
 *
 * @property float $latitude Latitude of the venue in degrees
 * @property float $longitude Longitude of the venue in degrees
 * @property string $title Name of the venue
 * @property string $address Address of the venue
 * @property string $foursquare_id Optional. Foursquare identifier of the venue, if known
 * @property string $foursquare_type Optional. Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
 * @property string $google_place_id Optional. Google Places identifier of the venue
 * @property string $google_place_type Optional. Google Places type of the venue. (See supported types.)
 *
 * @see https://core.telegram.org/bots/api#inputvenuemessagecontent 
 */
class InputVenueMessageContent extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
		'latitude' => 'float',
		'longitude' => 'float',
		'title' => 'string',
		'address' => 'string',
		'foursquare_id' => 'string',
		'foursquare_type' => 'string',
		'google_place_id' => 'string',
		'google_place_type' => 'string',
	];
}