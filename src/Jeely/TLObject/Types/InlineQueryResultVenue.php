<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class InlineQueryResultVenue
* @description Represents a venue. By default, the venue will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the venue.
*
* @property	string $type Type of the result, must be venue
* @method	string getType() Type of the result, must be venue
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	string $id Unique identifier for this result, 1-64 Bytes
* @method	string getId() Unique identifier for this result, 1-64 Bytes
* @method	bool isId()
* @method	$this setId()
* @method	$this unsetId()

* @property	float $latitude Latitude of the venue location in degrees
* @method	float getLatitude() Latitude of the venue location in degrees
* @method	bool isLatitude()
* @method	$this setLatitude()
* @method	$this unsetLatitude()

* @property	float $longitude Longitude of the venue location in degrees
* @method	float getLongitude() Longitude of the venue location in degrees
* @method	bool isLongitude()
* @method	$this setLongitude()
* @method	$this unsetLongitude()

* @property	string $title Title of the venue
* @method	string getTitle() Title of the venue
* @method	bool isTitle()
* @method	$this setTitle()
* @method	$this unsetTitle()

* @property	string $address Address of the venue
* @method	string getAddress() Address of the venue
* @method	bool isAddress()
* @method	$this setAddress()
* @method	$this unsetAddress()

* @property	string $foursquare_id Optional. Foursquare identifier of the venue if known
* @method	string getFoursquareId() Optional. Foursquare identifier of the venue if known
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

* @property	InlineKeyboardMarkup $reply_markup Optional. Inline keyboard attached to the message
* @method	InlineKeyboardMarkup getReplyMarkup() Optional. Inline keyboard attached to the message
* @method	bool isReplyMarkup()
* @method	$this setReplyMarkup()
* @method	$this unsetReplyMarkup()

* @property	InputMessageContent $input_message_content Optional. Content of the message to be sent instead of the venue
* @method	InputMessageContent getInputMessageContent() Optional. Content of the message to be sent instead of the venue
* @method	bool isInputMessageContent()
* @method	$this setInputMessageContent()
* @method	$this unsetInputMessageContent()

* @property	string $thumbnail_url Optional. Url of the thumbnail for the result
* @method	string getThumbnailUrl() Optional. Url of the thumbnail for the result
* @method	bool isThumbnailUrl()
* @method	$this setThumbnailUrl()
* @method	$this unsetThumbnailUrl()

* @property	int $thumbnail_width Optional. Thumbnail width
* @method	int getThumbnailWidth() Optional. Thumbnail width
* @method	bool isThumbnailWidth()
* @method	$this setThumbnailWidth()
* @method	$this unsetThumbnailWidth()

* @property	int $thumbnail_height Optional. Thumbnail height
* @method	int getThumbnailHeight() Optional. Thumbnail height
* @method	bool isThumbnailHeight()
* @method	$this setThumbnailHeight()
* @method	$this unsetThumbnailHeight()

*/

class InlineQueryResultVenue extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'id'=> 'string',
		'latitude'=> 'float',
		'longitude'=> 'float',
		'title'=> 'string',
		'address'=> 'string',
		'foursquare_id'=> 'string',
		'foursquare_type'=> 'string',
		'google_place_id'=> 'string',
		'google_place_type'=> 'string',
		'reply_markup'=> 'InlineKeyboardMarkup',
		'input_message_content'=> 'InputMessageContent',
		'thumbnail_url'=> 'string',
		'thumbnail_width'=> 'int',
		'thumbnail_height'=> 'int',
	];

}