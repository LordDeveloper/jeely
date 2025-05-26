<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class InlineQueryResultLocation
* @description Represents a location on a map. By default, the location will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the location.
*
* @property	string $type Type of the result, must be location
* @method	string getType() Type of the result, must be location
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	string $id Unique identifier for this result, 1-64 Bytes
* @method	string getId() Unique identifier for this result, 1-64 Bytes
* @method	bool isId()
* @method	$this setId()
* @method	$this unsetId()

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

* @property	string $title Location title
* @method	string getTitle() Location title
* @method	bool isTitle()
* @method	$this setTitle()
* @method	$this unsetTitle()

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

* @property	InlineKeyboardMarkup $reply_markup Optional. Inline keyboard attached to the message
* @method	InlineKeyboardMarkup getReplyMarkup() Optional. Inline keyboard attached to the message
* @method	bool isReplyMarkup()
* @method	$this setReplyMarkup()
* @method	$this unsetReplyMarkup()

* @property	InputMessageContent $input_message_content Optional. Content of the message to be sent instead of the location
* @method	InputMessageContent getInputMessageContent() Optional. Content of the message to be sent instead of the location
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

class InlineQueryResultLocation extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'id'=> 'string',
		'latitude'=> 'float',
		'longitude'=> 'float',
		'title'=> 'string',
		'horizontal_accuracy'=> 'float',
		'live_period'=> 'int',
		'heading'=> 'int',
		'proximity_alert_radius'=> 'int',
		'reply_markup'=> 'InlineKeyboardMarkup',
		'input_message_content'=> 'InputMessageContent',
		'thumbnail_url'=> 'string',
		'thumbnail_width'=> 'int',
		'thumbnail_height'=> 'int',
	];

}