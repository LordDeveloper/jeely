<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class InlineQueryResultMpeg4Gif
 * @description Represents a link to a video animation (H.264/MPEG-4 AVC video without sound). By default, this animated MPEG-4 file will be sent by the user with optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the animation.
 *
 * @method string getType() Type of the result, must be mpeg4_gif
 * @method string getId() Unique identifier for this result, 1-64 bytes
 * @method string getMpeg4Url() A valid URL for the MPEG4 file. File size must not exceed 1MB
 * @method int getMpeg4Width() Optional. Video width
 * @method int getMpeg4Height() Optional. Video height
 * @method int getMpeg4Duration() Optional. Video duration in seconds
 * @method string getThumbUrl() URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result
 * @method string getThumbMimeType() Optional. MIME type of the thumbnail, must be one of “image/jpeg”, “image/gif”, or “video/mp4”. Defaults to “image/jpeg”
 * @method string getTitle() Optional. Title for the result
 * @method string getCaption() Optional. Caption of the MPEG-4 file to be sent, 0-1024 characters after entities parsing
 * @method string getParseMode() Optional. Mode for parsing entities in the caption. See formatting options for more details.
 * @method MessageEntity[] getCaptionEntities() Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
 * @method InlineKeyboardMarkup getReplyMarkup() Optional. Inline keyboard attached to the message
 * @method InputMessageContent getInputMessageContent() Optional. Content of the message to be sent instead of the video animation
 *
 * @method bool isType()
 * @method bool isId()
 * @method bool isMpeg4Url()
 * @method bool isMpeg4Width()
 * @method bool isMpeg4Height()
 * @method bool isMpeg4Duration()
 * @method bool isThumbUrl()
 * @method bool isThumbMimeType()
 * @method bool isTitle()
 * @method bool isCaption()
 * @method bool isParseMode()
 * @method bool isCaptionEntities()
 * @method bool isReplyMarkup()
 * @method bool isInputMessageContent()
 *
 * @method $this setType()
 * @method $this setId()
 * @method $this setMpeg4Url()
 * @method $this setMpeg4Width()
 * @method $this setMpeg4Height()
 * @method $this setMpeg4Duration()
 * @method $this setThumbUrl()
 * @method $this setThumbMimeType()
 * @method $this setTitle()
 * @method $this setCaption()
 * @method $this setParseMode()
 * @method $this setCaptionEntities()
 * @method $this setReplyMarkup()
 * @method $this setInputMessageContent()
 *
 * @method $this unsetType()
 * @method $this unsetId()
 * @method $this unsetMpeg4Url()
 * @method $this unsetMpeg4Width()
 * @method $this unsetMpeg4Height()
 * @method $this unsetMpeg4Duration()
 * @method $this unsetThumbUrl()
 * @method $this unsetThumbMimeType()
 * @method $this unsetTitle()
 * @method $this unsetCaption()
 * @method $this unsetParseMode()
 * @method $this unsetCaptionEntities()
 * @method $this unsetReplyMarkup()
 * @method $this unsetInputMessageContent()
 *
 * @property string $type Type of the result, must be mpeg4_gif
 * @property string $id Unique identifier for this result, 1-64 bytes
 * @property string $mpeg4_url A valid URL for the MPEG4 file. File size must not exceed 1MB
 * @property int $mpeg4_width Optional. Video width
 * @property int $mpeg4_height Optional. Video height
 * @property int $mpeg4_duration Optional. Video duration in seconds
 * @property string $thumb_url URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result
 * @property string $thumb_mime_type Optional. MIME type of the thumbnail, must be one of “image/jpeg”, “image/gif”, or “video/mp4”. Defaults to “image/jpeg”
 * @property string $title Optional. Title for the result
 * @property string $caption Optional. Caption of the MPEG-4 file to be sent, 0-1024 characters after entities parsing
 * @property string $parse_mode Optional. Mode for parsing entities in the caption. See formatting options for more details.
 * @property MessageEntity[] $caption_entities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
 * @property InlineKeyboardMarkup $reply_markup Optional. Inline keyboard attached to the message
 * @property InputMessageContent $input_message_content Optional. Content of the message to be sent instead of the video animation
 *
 * @see https://core.telegram.org/bots/api#inlinequeryresultmpeg4gif 
 */
class InlineQueryResultMpeg4Gif extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
		'type' => 'string',
		'id' => 'string',
		'mpeg4_url' => 'string',
		'mpeg4_width' => 'int',
		'mpeg4_height' => 'int',
		'mpeg4_duration' => 'int',
		'thumb_url' => 'string',
		'thumb_mime_type' => 'string',
		'title' => 'string',
		'caption' => 'string',
		'parse_mode' => 'string',
		'caption_entities' => 'MessageEntity[]',
		'reply_markup' => 'InlineKeyboardMarkup',
		'input_message_content' => 'InputMessageContent',
	];
}