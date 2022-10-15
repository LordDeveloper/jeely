<?php

namespace Jeely\TL\Types;

use Jeely\LazyUpdates;


/**
 * @class InlineQueryResultVenue
 * @description Represents a venue. By default, the venue will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the venue.
 *
 * @method string getType() Type of the result, must be venue
 * @method string getId() Unique identifier for this result, 1-64 Bytes
 * @method float getLatitude() Latitude of the venue location in degrees
 * @method float getLongitude() Longitude of the venue location in degrees
 * @method string getTitle() Title of the venue
 * @method string getAddress() Address of the venue
 * @method string getFoursquareId() Optional. Foursquare identifier of the venue if known
 * @method string getFoursquareType() Optional. Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
 * @method string getGooglePlaceId() Optional. Google Places identifier of the venue
 * @method string getGooglePlaceType() Optional. Google Places type of the venue. (See supported types.)
 * @method InlineKeyboardMarkup getReplyMarkup() Optional. Inline keyboard attached to the message
 * @method InputMessageContent getInputMessageContent() Optional. Content of the message to be sent instead of the venue
 * @method string getThumbUrl() Optional. Url of the thumbnail for the result
 * @method int getThumbWidth() Optional. Thumbnail width
 * @method int getThumbHeight() Optional. Thumbnail height
 *
 * @method bool isType()
 * @method bool isId()
 * @method bool isLatitude()
 * @method bool isLongitude()
 * @method bool isTitle()
 * @method bool isAddress()
 * @method bool isFoursquareId()
 * @method bool isFoursquareType()
 * @method bool isGooglePlaceId()
 * @method bool isGooglePlaceType()
 * @method bool isReplyMarkup()
 * @method bool isInputMessageContent()
 * @method bool isThumbUrl()
 * @method bool isThumbWidth()
 * @method bool isThumbHeight()
 *
 * @method $this setType()
 * @method $this setId()
 * @method $this setLatitude()
 * @method $this setLongitude()
 * @method $this setTitle()
 * @method $this setAddress()
 * @method $this setFoursquareId()
 * @method $this setFoursquareType()
 * @method $this setGooglePlaceId()
 * @method $this setGooglePlaceType()
 * @method $this setReplyMarkup()
 * @method $this setInputMessageContent()
 * @method $this setThumbUrl()
 * @method $this setThumbWidth()
 * @method $this setThumbHeight()
 *
 * @method $this unsetType()
 * @method $this unsetId()
 * @method $this unsetLatitude()
 * @method $this unsetLongitude()
 * @method $this unsetTitle()
 * @method $this unsetAddress()
 * @method $this unsetFoursquareId()
 * @method $this unsetFoursquareType()
 * @method $this unsetGooglePlaceId()
 * @method $this unsetGooglePlaceType()
 * @method $this unsetReplyMarkup()
 * @method $this unsetInputMessageContent()
 * @method $this unsetThumbUrl()
 * @method $this unsetThumbWidth()
 * @method $this unsetThumbHeight()
 *
 * @property string $type Type of the result, must be venue
 * @property string $id Unique identifier for this result, 1-64 Bytes
 * @property float $latitude Latitude of the venue location in degrees
 * @property float $longitude Longitude of the venue location in degrees
 * @property string $title Title of the venue
 * @property string $address Address of the venue
 * @property string $foursquare_id Optional. Foursquare identifier of the venue if known
 * @property string $foursquare_type Optional. Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
 * @property string $google_place_id Optional. Google Places identifier of the venue
 * @property string $google_place_type Optional. Google Places type of the venue. (See supported types.)
 * @property InlineKeyboardMarkup $reply_markup Optional. Inline keyboard attached to the message
 * @property InputMessageContent $input_message_content Optional. Content of the message to be sent instead of the venue
 * @property string $thumb_url Optional. Url of the thumbnail for the result
 * @property int $thumb_width Optional. Thumbnail width
 * @property int $thumb_height Optional. Thumbnail height
 *
 * @see https://core.telegram.org/bots/api#inlinequeryresultvenue
 */
class InlineQueryResultVenue extends LazyUpdates
{
    const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'id' => 'string',
        'latitude' => 'float',
        'longitude' => 'float',
        'title' => 'string',
        'address' => 'string',
        'foursquare_id' => 'string',
        'foursquare_type' => 'string',
        'google_place_id' => 'string',
        'google_place_type' => 'string',
        'reply_markup' => 'InlineKeyboardMarkup',
        'input_message_content' => 'InputMessageContent',
        'thumb_url' => 'string',
        'thumb_width' => 'int',
        'thumb_height' => 'int',
    ];
}