<?php

namespace Jeely\TL\Types;

use Jeely\LazyUpdates;


/**
 * @class InlineQueryResultCachedVideo
 * @description Represents a link to a video file stored on the Telegram servers. By default, this video file will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the video.
 *
 * @method string getType() Type of the result, must be video
 * @method string getId() Unique identifier for this result, 1-64 bytes
 * @method string getVideoFileId() A valid file identifier for the video file
 * @method string getTitle() Title for the result
 * @method string getDescription() Optional. Short description of the result
 * @method string getCaption() Optional. Caption of the video to be sent, 0-1024 characters after entities parsing
 * @method string getParseMode() Optional. Mode for parsing entities in the video caption. See formatting options for more details.
 * @method MessageEntity[] getCaptionEntities() Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
 * @method InlineKeyboardMarkup getReplyMarkup() Optional. Inline keyboard attached to the message
 * @method InputMessageContent getInputMessageContent() Optional. Content of the message to be sent instead of the video
 *
 * @method bool isType()
 * @method bool isId()
 * @method bool isVideoFileId()
 * @method bool isTitle()
 * @method bool isDescription()
 * @method bool isCaption()
 * @method bool isParseMode()
 * @method bool isCaptionEntities()
 * @method bool isReplyMarkup()
 * @method bool isInputMessageContent()
 *
 * @method $this setType()
 * @method $this setId()
 * @method $this setVideoFileId()
 * @method $this setTitle()
 * @method $this setDescription()
 * @method $this setCaption()
 * @method $this setParseMode()
 * @method $this setCaptionEntities()
 * @method $this setReplyMarkup()
 * @method $this setInputMessageContent()
 *
 * @method $this unsetType()
 * @method $this unsetId()
 * @method $this unsetVideoFileId()
 * @method $this unsetTitle()
 * @method $this unsetDescription()
 * @method $this unsetCaption()
 * @method $this unsetParseMode()
 * @method $this unsetCaptionEntities()
 * @method $this unsetReplyMarkup()
 * @method $this unsetInputMessageContent()
 *
 * @property string $type Type of the result, must be video
 * @property string $id Unique identifier for this result, 1-64 bytes
 * @property string $video_file_id A valid file identifier for the video file
 * @property string $title Title for the result
 * @property string $description Optional. Short description of the result
 * @property string $caption Optional. Caption of the video to be sent, 0-1024 characters after entities parsing
 * @property string $parse_mode Optional. Mode for parsing entities in the video caption. See formatting options for more details.
 * @property MessageEntity[] $caption_entities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
 * @property InlineKeyboardMarkup $reply_markup Optional. Inline keyboard attached to the message
 * @property InputMessageContent $input_message_content Optional. Content of the message to be sent instead of the video
 *
 * @see https://core.telegram.org/bots/api#inlinequeryresultcachedvideo
 */
class InlineQueryResultCachedVideo extends LazyUpdates
{
    const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'id' => 'string',
        'video_file_id' => 'string',
        'title' => 'string',
        'description' => 'string',
        'caption' => 'string',
        'parse_mode' => 'string',
        'caption_entities' => 'MessageEntity[]',
        'reply_markup' => 'InlineKeyboardMarkup',
        'input_message_content' => 'InputMessageContent',
    ];
}