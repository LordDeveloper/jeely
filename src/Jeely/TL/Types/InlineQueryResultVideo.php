<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class InlineQueryResultVideo
 * @description Represents a link to a page containing an embedded video player or a video file. By default, this video file will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the video.
 *
 * @method string getType() Type of the result, must be video
 * @method string getId() Unique identifier for this result, 1-64 bytes
 * @method string getVideoUrl() A valid URL for the embedded video player or video file
 * @method string getMimeType() MIME type of the content of the video URL, “text/html” or “video/mp4”
 * @method string getThumbUrl() URL of the thumbnail (JPEG only) for the video
 * @method string getTitle() Title for the result
 * @method string getCaption() Optional. Caption of the video to be sent, 0-1024 characters after entities parsing
 * @method string getParseMode() Optional. Mode for parsing entities in the video caption. See formatting options for more details.
 * @method MessageEntity[] getCaptionEntities() Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
 * @method int getVideoWidth() Optional. Video width
 * @method int getVideoHeight() Optional. Video height
 * @method int getVideoDuration() Optional. Video duration in seconds
 * @method string getDescription() Optional. Short description of the result
 * @method InlineKeyboardMarkup getReplyMarkup() Optional. Inline keyboard attached to the message
 * @method InputMessageContent getInputMessageContent() Optional. Content of the message to be sent instead of the video. This field is required if InlineQueryResultVideo is used to send an HTML-page as a result (e.g., a YouTube video).
 *
 * @method bool isType()
 * @method bool isId()
 * @method bool isVideoUrl()
 * @method bool isMimeType()
 * @method bool isThumbUrl()
 * @method bool isTitle()
 * @method bool isCaption()
 * @method bool isParseMode()
 * @method bool isCaptionEntities()
 * @method bool isVideoWidth()
 * @method bool isVideoHeight()
 * @method bool isVideoDuration()
 * @method bool isDescription()
 * @method bool isReplyMarkup()
 * @method bool isInputMessageContent()
 *
 * @method $this setType()
 * @method $this setId()
 * @method $this setVideoUrl()
 * @method $this setMimeType()
 * @method $this setThumbUrl()
 * @method $this setTitle()
 * @method $this setCaption()
 * @method $this setParseMode()
 * @method $this setCaptionEntities()
 * @method $this setVideoWidth()
 * @method $this setVideoHeight()
 * @method $this setVideoDuration()
 * @method $this setDescription()
 * @method $this setReplyMarkup()
 * @method $this setInputMessageContent()
 *
 * @method $this unsetType()
 * @method $this unsetId()
 * @method $this unsetVideoUrl()
 * @method $this unsetMimeType()
 * @method $this unsetThumbUrl()
 * @method $this unsetTitle()
 * @method $this unsetCaption()
 * @method $this unsetParseMode()
 * @method $this unsetCaptionEntities()
 * @method $this unsetVideoWidth()
 * @method $this unsetVideoHeight()
 * @method $this unsetVideoDuration()
 * @method $this unsetDescription()
 * @method $this unsetReplyMarkup()
 * @method $this unsetInputMessageContent()
 *
 * @property string $type Type of the result, must be video
 * @property string $id Unique identifier for this result, 1-64 bytes
 * @property string $video_url A valid URL for the embedded video player or video file
 * @property string $mime_type MIME type of the content of the video URL, “text/html” or “video/mp4”
 * @property string $thumb_url URL of the thumbnail (JPEG only) for the video
 * @property string $title Title for the result
 * @property string $caption Optional. Caption of the video to be sent, 0-1024 characters after entities parsing
 * @property string $parse_mode Optional. Mode for parsing entities in the video caption. See formatting options for more details.
 * @property MessageEntity[] $caption_entities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
 * @property int $video_width Optional. Video width
 * @property int $video_height Optional. Video height
 * @property int $video_duration Optional. Video duration in seconds
 * @property string $description Optional. Short description of the result
 * @property InlineKeyboardMarkup $reply_markup Optional. Inline keyboard attached to the message
 * @property InputMessageContent $input_message_content Optional. Content of the message to be sent instead of the video. This field is required if InlineQueryResultVideo is used to send an HTML-page as a result (e.g., a YouTube video).
 *
 * @see https://core.telegram.org/bots/api#inlinequeryresultvideo
 */
class InlineQueryResultVideo extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'id' => 'string',
        'video_url' => 'string',
        'mime_type' => 'string',
        'thumb_url' => 'string',
        'title' => 'string',
        'caption' => 'string',
        'parse_mode' => 'string',
        'caption_entities' => 'MessageEntity[]',
        'video_width' => 'int',
        'video_height' => 'int',
        'video_duration' => 'int',
        'description' => 'string',
        'reply_markup' => 'InlineKeyboardMarkup',
        'input_message_content' => 'InputMessageContent',
    ];
}