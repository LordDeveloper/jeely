<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class InlineQueryResultMpeg4Gif
* @description Represents a link to a video animation (H.264/MPEG-4 AVC video without sound). By default, this animated MPEG-4 file will be sent by the user with optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the animation.
*
* @property	string $type Type of the result, must be mpeg4_gif
* @method	string getType() Type of the result, must be mpeg4_gif
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	string $id Unique identifier for this result, 1-64 bytes
* @method	string getId() Unique identifier for this result, 1-64 bytes
* @method	bool isId()
* @method	$this setId()
* @method	$this unsetId()

* @property	string $mpeg4_url A valid URL for the MPEG4 file
* @method	string getMpeg4Url() A valid URL for the MPEG4 file
* @method	bool isMpeg4Url()
* @method	$this setMpeg4Url()
* @method	$this unsetMpeg4Url()

* @property	int $mpeg4_width Optional. Video width
* @method	int getMpeg4Width() Optional. Video width
* @method	bool isMpeg4Width()
* @method	$this setMpeg4Width()
* @method	$this unsetMpeg4Width()

* @property	int $mpeg4_height Optional. Video height
* @method	int getMpeg4Height() Optional. Video height
* @method	bool isMpeg4Height()
* @method	$this setMpeg4Height()
* @method	$this unsetMpeg4Height()

* @property	int $mpeg4_duration Optional. Video duration in seconds
* @method	int getMpeg4Duration() Optional. Video duration in seconds
* @method	bool isMpeg4Duration()
* @method	$this setMpeg4Duration()
* @method	$this unsetMpeg4Duration()

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

* @property	string $caption Optional. Caption of the MPEG-4 file to be sent, 0-1024 characters after entities parsing
* @method	string getCaption() Optional. Caption of the MPEG-4 file to be sent, 0-1024 characters after entities parsing
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

* @property	InputMessageContent $input_message_content Optional. Content of the message to be sent instead of the video animation
* @method	InputMessageContent getInputMessageContent() Optional. Content of the message to be sent instead of the video animation
* @method	bool isInputMessageContent()
* @method	$this setInputMessageContent()
* @method	$this unsetInputMessageContent()

*/

class InlineQueryResultMpeg4Gif extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'id'=> 'string',
		'mpeg4_url'=> 'string',
		'mpeg4_width'=> 'int',
		'mpeg4_height'=> 'int',
		'mpeg4_duration'=> 'int',
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