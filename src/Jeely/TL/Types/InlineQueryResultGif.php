<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class InlineQueryResultGif
 * @description Represents a link to an animated GIF file. By default, this animated GIF file will be sent by the user with optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the animation.
 *
 * @method string getType() Type of the result, must be gif
 * @method string getId() Unique identifier for this result, 1-64 bytes
 * @method string getGifUrl() A valid URL for the GIF file. File size must not exceed 1MB
 * @method int getGifWidth() Optional. Width of the GIF
 * @method int getGifHeight() Optional. Height of the GIF
 * @method int getGifDuration() Optional. Duration of the GIF in seconds
 * @method string getThumbUrl() URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result
 * @method string getThumbMimeType() Optional. MIME type of the thumbnail, must be one of “image/jpeg”, “image/gif”, or “video/mp4”. Defaults to “image/jpeg”
 * @method string getTitle() Optional. Title for the result
 * @method string getCaption() Optional. Caption of the GIF file to be sent, 0-1024 characters after entities parsing
 * @method string getParseMode() Optional. Mode for parsing entities in the caption. See formatting options for more details.
 * @method MessageEntity[] getCaptionEntities() Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
 * @method InlineKeyboardMarkup getReplyMarkup() Optional. Inline keyboard attached to the message
 * @method InputMessageContent getInputMessageContent() Optional. Content of the message to be sent instead of the GIF animation
 *
 * @method bool isType()
 * @method bool isId()
 * @method bool isGifUrl()
 * @method bool isGifWidth()
 * @method bool isGifHeight()
 * @method bool isGifDuration()
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
 * @method $this setGifUrl()
 * @method $this setGifWidth()
 * @method $this setGifHeight()
 * @method $this setGifDuration()
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
 * @method $this unsetGifUrl()
 * @method $this unsetGifWidth()
 * @method $this unsetGifHeight()
 * @method $this unsetGifDuration()
 * @method $this unsetThumbUrl()
 * @method $this unsetThumbMimeType()
 * @method $this unsetTitle()
 * @method $this unsetCaption()
 * @method $this unsetParseMode()
 * @method $this unsetCaptionEntities()
 * @method $this unsetReplyMarkup()
 * @method $this unsetInputMessageContent()
 *
 * @property string $type Type of the result, must be gif
 * @property string $id Unique identifier for this result, 1-64 bytes
 * @property string $gif_url A valid URL for the GIF file. File size must not exceed 1MB
 * @property int $gif_width Optional. Width of the GIF
 * @property int $gif_height Optional. Height of the GIF
 * @property int $gif_duration Optional. Duration of the GIF in seconds
 * @property string $thumb_url URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result
 * @property string $thumb_mime_type Optional. MIME type of the thumbnail, must be one of “image/jpeg”, “image/gif”, or “video/mp4”. Defaults to “image/jpeg”
 * @property string $title Optional. Title for the result
 * @property string $caption Optional. Caption of the GIF file to be sent, 0-1024 characters after entities parsing
 * @property string $parse_mode Optional. Mode for parsing entities in the caption. See formatting options for more details.
 * @property MessageEntity[] $caption_entities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
 * @property InlineKeyboardMarkup $reply_markup Optional. Inline keyboard attached to the message
 * @property InputMessageContent $input_message_content Optional. Content of the message to be sent instead of the GIF animation
 *
 * @see https://core.telegram.org/bots/api#inlinequeryresultgif
 */
class InlineQueryResultGif extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'id' => 'string',
        'gif_url' => 'string',
        'gif_width' => 'int',
        'gif_height' => 'int',
        'gif_duration' => 'int',
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