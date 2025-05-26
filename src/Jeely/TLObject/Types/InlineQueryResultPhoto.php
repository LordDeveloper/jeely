<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class InlineQueryResultPhoto
* @description Represents a link to a photo. By default, this photo will be sent by the user with optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the photo.
*
* @property	string $type Type of the result, must be photo
* @method	string getType() Type of the result, must be photo
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	string $id Unique identifier for this result, 1-64 bytes
* @method	string getId() Unique identifier for this result, 1-64 bytes
* @method	bool isId()
* @method	$this setId()
* @method	$this unsetId()

* @property	string $photo_url A valid URL of the photo. Photo must be in JPEG format. Photo size must not exceed 5MB
* @method	string getPhotoUrl() A valid URL of the photo. Photo must be in JPEG format. Photo size must not exceed 5MB
* @method	bool isPhotoUrl()
* @method	$this setPhotoUrl()
* @method	$this unsetPhotoUrl()

* @property	string $thumbnail_url URL of the thumbnail for the photo
* @method	string getThumbnailUrl() URL of the thumbnail for the photo
* @method	bool isThumbnailUrl()
* @method	$this setThumbnailUrl()
* @method	$this unsetThumbnailUrl()

* @property	int $photo_width Optional. Width of the photo
* @method	int getPhotoWidth() Optional. Width of the photo
* @method	bool isPhotoWidth()
* @method	$this setPhotoWidth()
* @method	$this unsetPhotoWidth()

* @property	int $photo_height Optional. Height of the photo
* @method	int getPhotoHeight() Optional. Height of the photo
* @method	bool isPhotoHeight()
* @method	$this setPhotoHeight()
* @method	$this unsetPhotoHeight()

* @property	string $title Optional. Title for the result
* @method	string getTitle() Optional. Title for the result
* @method	bool isTitle()
* @method	$this setTitle()
* @method	$this unsetTitle()

* @property	string $description Optional. Short description of the result
* @method	string getDescription() Optional. Short description of the result
* @method	bool isDescription()
* @method	$this setDescription()
* @method	$this unsetDescription()

* @property	string $caption Optional. Caption of the photo to be sent, 0-1024 characters after entities parsing
* @method	string getCaption() Optional. Caption of the photo to be sent, 0-1024 characters after entities parsing
* @method	bool isCaption()
* @method	$this setCaption()
* @method	$this unsetCaption()

* @property	string $parse_mode Optional. Mode for parsing entities in the photo caption. See formatting options for more details.
* @method	string getParseMode() Optional. Mode for parsing entities in the photo caption. See formatting options for more details.
* @method	bool isParseMode()
* @method	$this setParseMode()
* @method	$this unsetParseMode()

* @property	MessageEntity[] $caption_entities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
* @method	MessageEntity[] getCaptionEntities() Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
* @method	bool isCaptionEntities()
* @method	$this setCaptionEntities()
* @method	$this unsetCaptionEntities()

* @property	bool $show_caption_above_media Optional. Pass True, if the caption must be shown above the message media
* @method	bool getShowCaptionAboveMedia() Optional. Pass True, if the caption must be shown above the message media
* @method	bool isShowCaptionAboveMedia()
* @method	$this setShowCaptionAboveMedia()
* @method	$this unsetShowCaptionAboveMedia()

* @property	InlineKeyboardMarkup $reply_markup Optional. Inline keyboard attached to the message
* @method	InlineKeyboardMarkup getReplyMarkup() Optional. Inline keyboard attached to the message
* @method	bool isReplyMarkup()
* @method	$this setReplyMarkup()
* @method	$this unsetReplyMarkup()

* @property	InputMessageContent $input_message_content Optional. Content of the message to be sent instead of the photo
* @method	InputMessageContent getInputMessageContent() Optional. Content of the message to be sent instead of the photo
* @method	bool isInputMessageContent()
* @method	$this setInputMessageContent()
* @method	$this unsetInputMessageContent()

*/

class InlineQueryResultPhoto extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'id'=> 'string',
		'photo_url'=> 'string',
		'thumbnail_url'=> 'string',
		'photo_width'=> 'int',
		'photo_height'=> 'int',
		'title'=> 'string',
		'description'=> 'string',
		'caption'=> 'string',
		'parse_mode'=> 'string',
		'caption_entities'=> 'MessageEntity[]',
		'show_caption_above_media'=> 'bool',
		'reply_markup'=> 'InlineKeyboardMarkup',
		'input_message_content'=> 'InputMessageContent',
	];

}