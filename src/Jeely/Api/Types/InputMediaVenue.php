<?php

namespace Jeely\Api\Types;

/**
 * @class InputMediaVenue
 * @description Represents a venue to be sent.
 *
 * @method string getType() Type of the media, must be venue
 * @method float getLatitude() Latitude of the location
 * @method float getLongitude() Longitude of the location
 * @method string getTitle() Name of the venue
 * @method string getAddress() Address of the venue
 * @method string getFoursquareId() Optional. Foursquare identifier of the venue
 * @method string getFoursquareType() Optional. Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
 * @method string getGooglePlaceId() Optional. Google Places identifier of the venue
 * @method string getGooglePlaceType() Optional. Google Places type of the venue. (See supported types.)
 *
 * @method bool isType()
 * @method bool isLatitude()
 * @method bool isLongitude()
 * @method bool isTitle()
 * @method bool isAddress()
 * @method bool isFoursquareId()
 * @method bool isFoursquareType()
 * @method bool isGooglePlaceId()
 * @method bool isGooglePlaceType()
 *
 * @method $this setType()
 * @method $this setLatitude()
 * @method $this setLongitude()
 * @method $this setTitle()
 * @method $this setAddress()
 * @method $this setFoursquareId()
 * @method $this setFoursquareType()
 * @method $this setGooglePlaceId()
 * @method $this setGooglePlaceType()
 *
 * @method $this unsetType()
 * @method $this unsetLatitude()
 * @method $this unsetLongitude()
 * @method $this unsetTitle()
 * @method $this unsetAddress()
 * @method $this unsetFoursquareId()
 * @method $this unsetFoursquareType()
 * @method $this unsetGooglePlaceId()
 * @method $this unsetGooglePlaceType()
 *
 * @property string $type Type of the media, must be venue
 * @property float $latitude Latitude of the location
 * @property float $longitude Longitude of the location
 * @property string $title Name of the venue
 * @property string $address Address of the venue
 * @property string $foursquare_id Optional. Foursquare identifier of the venue
 * @property string $foursquare_type Optional. Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
 * @property string $google_place_id Optional. Google Places identifier of the venue
 * @property string $google_place_type Optional. Google Places type of the venue. (See supported types.)
 *
 * @see https://core.telegram.org/bots/api#inputmediavenue
 */
class InputMediaVenue extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
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
