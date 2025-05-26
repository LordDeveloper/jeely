<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class InlineQueryResultGif
* @description Represents a link to an animated GIF file. By default, this animated GIF file will be sent by the user with optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the animation.
*
* @property	string $type Type of the result, must be gif
* @method	string getType() Type of the result, must be gif
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	string $id Unique identifier for this result, 1-64 bytes
* @method	string getId() Unique identifier for this result, 1-64 bytes
* @method	bool isId()
* @method	$this setId()
* @method	$this unsetId()

* @property	string $gif_url A valid URL for the GIF file
* @method	string getGifUrl() A valid URL for the GIF file
* @method	bool isGifUrl()
* @method	$this setGifUrl()
* @method	$this unsetGifUrl()

* @property	int $gif_width Optional. Width of the GIF
* @method	int getGifWidth() Optional. Width of the GIF
* @method	bool isGifWidth()
* @method	$this setGifWidth()
* @method	$this unsetGifWidth()

* @property	int $gif_height Optional. Height of the GIF
* @method	int getGifHeight() Optional. Height of the GIF
* @method	bool isGifHeight()
* @method	$this setGifHeight()
* @method	$this unsetGifHeight()

* @property	int $gif_duration Optional. Duration of the GIF in seconds
* @method	int getGifDuration() Optional. Duration of the GIF in seconds
* @method	bool isGifDuration()
* @method	$this setGifDuration()
* @method	$this unsetGifDuration()

* @property	string $thumbnail_url URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result
* @method	string getThumbnailUrl() URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result
* @method	bool isThumbnailUrl()
* @method	$this setThumbnailUrl()
* @method	$this unsetThumbnailUrl()

* @property	string $thumbnail_mime_type Optional. MIME type of the thumbnail, must be one of “image/jpeg”, “image/gif”, or “video/mp4”. Defaults to “image/jpeg”
* @method	string getThumbnailMimeType() Optional. MIME type of the thumbnail, must be one of “image/jpeg”, “image/gif”, or “video/mp4”. Defaults to “image/jpeg”
* @method	bool isThumbnailMimeType()
* @method	$this setThumbnailMimeType()
* @method	$this unsetThumbnailMimeType()

* @property	string $title Optional. Title for the result
* @method	string getTitle() Optional. Title for the result
* @method	bool isTitle()
* @method	$this setTitle()
* @method	$this unsetTitle()

* @property	string $caption Optional. Caption of the GIF file to be sent, 0-1024 characters after entities parsing
* @method	string getCaption() Optional. Caption of the GIF file to be sent, 0-1024 characters after entities parsing
* @method	bool isCaption()
* @method	$this setCaption()
* @method	$this unsetCaption()

* @property	string $parse_mode Optional. Mode for parsing entities in the caption. See formatting options for more details.
* @method	string getParseMode() Optional. Mode for parsing entities in the caption. See formatting options for more details.
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

* @property	InputMessageContent $input_message_content Optional. Content of the message to be sent instead of the GIF animation
* @method	InputMessageContent getInputMessageContent() Optional. Content of the message to be sent instead of the GIF animation
* @method	bool isInputMessageContent()
* @method	$this setInputMessageContent()
* @method	$this unsetInputMessageContent()

*/

class InlineQueryResultGif extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'id'=> 'string',
		'gif_url'=> 'string',
		'gif_width'=> 'int',
		'gif_height'=> 'int',
		'gif_duration'=> 'int',
		'thumbnail_url'=> 'string',
		'thumbnail_mime_type'=> 'string',
		'title'=> 'string',
		'caption'=> 'string',
		'parse_mode'=> 'string',
		'caption_entities'=> 'MessageEntity[]',
		'show_caption_above_media'=> 'bool',
		'reply_markup'=> 'InlineKeyboardMarkup',
		'input_message_content'=> 'InputMessageContent',
	];

}