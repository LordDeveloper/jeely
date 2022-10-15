<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class InlineQueryResultLocation
 * @description Represents a location on a map. By default, the location will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the location.
 *
 * @method string getType() Type of the result, must be location
 * @method string getId() Unique identifier for this result, 1-64 Bytes
 * @method float getLatitude() Location latitude in degrees
 * @method float getLongitude() Location longitude in degrees
 * @method string getTitle() Location title
 * @method float getHorizontalAccuracy() Optional. The radius of uncertainty for the location, measured in meters;
0-1500
 * @method int getLivePeriod() Optional. Period in seconds for which the location can be updated, should be between 60 and 86400.
 * @method int getHeading() Optional. For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
 * @method int getProximityAlertRadius() Optional. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
 * @method InlineKeyboardMarkup getReplyMarkup() Optional. Inline keyboard attached to the message
 * @method InputMessageContent getInputMessageContent() Optional. Content of the message to be sent instead of the location
 * @method string getThumbUrl() Optional. Url of the thumbnail for the result
 * @method int getThumbWidth() Optional. Thumbnail width
 * @method int getThumbHeight() Optional. Thumbnail height
 *
 * @method bool isType()
 * @method bool isId()
 * @method bool isLatitude()
 * @method bool isLongitude()
 * @method bool isTitle()
 * @method bool isHorizontalAccuracy()
 * @method bool isLivePeriod()
 * @method bool isHeading()
 * @method bool isProximityAlertRadius()
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
 * @method $this setHorizontalAccuracy()
 * @method $this setLivePeriod()
 * @method $this setHeading()
 * @method $this setProximityAlertRadius()
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
 * @method $this unsetHorizontalAccuracy()
 * @method $this unsetLivePeriod()
 * @method $this unsetHeading()
 * @method $this unsetProximityAlertRadius()
 * @method $this unsetReplyMarkup()
 * @method $this unsetInputMessageContent()
 * @method $this unsetThumbUrl()
 * @method $this unsetThumbWidth()
 * @method $this unsetThumbHeight()
 *
 * @property string $type Type of the result, must be location
 * @property string $id Unique identifier for this result, 1-64 Bytes
 * @property float $latitude Location latitude in degrees
 * @property float $longitude Location longitude in degrees
 * @property string $title Location title
 * @property float $horizontal_accuracy Optional. The radius of uncertainty for the location, measured in meters; 0-1500
 * @property int $live_period Optional. Period in seconds for which the location can be updated, should be between 60 and 86400.
 * @property int $heading Optional. For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
 * @property int $proximity_alert_radius Optional. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
 * @property InlineKeyboardMarkup $reply_markup Optional. Inline keyboard attached to the message
 * @property InputMessageContent $input_message_content Optional. Content of the message to be sent instead of the location
 * @property string $thumb_url Optional. Url of the thumbnail for the result
 * @property int $thumb_width Optional. Thumbnail width
 * @property int $thumb_height Optional. Thumbnail height
 *
 * @see https://core.telegram.org/bots/api#inlinequeryresultlocation
 */
class InlineQueryResultLocation extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'id' => 'string',
        'latitude' => 'float',
        'longitude' => 'float',
        'title' => 'string',
        'horizontal_accuracy' => 'float',
        'live_period' => 'int',
        'heading' => 'int',
        'proximity_alert_radius' => 'int',
        'reply_markup' => 'InlineKeyboardMarkup',
        'input_message_content' => 'InputMessageContent',
        'thumb_url' => 'string',
        'thumb_width' => 'int',
        'thumb_height' => 'int',
    ];
}