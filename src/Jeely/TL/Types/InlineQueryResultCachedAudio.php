<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class InlineQueryResultCachedAudio
 * @description Represents a link to an MP3 audio file stored on the Telegram servers. By default, this audio file will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the audio.
 *
 * @method string getType() Type of the result, must be audio
 * @method string getId() Unique identifier for this result, 1-64 bytes
 * @method string getAudioFileId() A valid file identifier for the audio file
 * @method string getCaption() Optional. Caption, 0-1024 characters after entities parsing
 * @method string getParseMode() Optional. Mode for parsing entities in the audio caption. See formatting options for more details.
 * @method MessageEntity[] getCaptionEntities() Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
 * @method InlineKeyboardMarkup getReplyMarkup() Optional. Inline keyboard attached to the message
 * @method InputMessageContent getInputMessageContent() Optional. Content of the message to be sent instead of the audio
 *
 * @method bool isType()
 * @method bool isId()
 * @method bool isAudioFileId()
 * @method bool isCaption()
 * @method bool isParseMode()
 * @method bool isCaptionEntities()
 * @method bool isReplyMarkup()
 * @method bool isInputMessageContent()
 *
 * @method $this setType()
 * @method $this setId()
 * @method $this setAudioFileId()
 * @method $this setCaption()
 * @method $this setParseMode()
 * @method $this setCaptionEntities()
 * @method $this setReplyMarkup()
 * @method $this setInputMessageContent()
 *
 * @method $this unsetType()
 * @method $this unsetId()
 * @method $this unsetAudioFileId()
 * @method $this unsetCaption()
 * @method $this unsetParseMode()
 * @method $this unsetCaptionEntities()
 * @method $this unsetReplyMarkup()
 * @method $this unsetInputMessageContent()
 *
 * @property string $type Type of the result, must be audio
 * @property string $id Unique identifier for this result, 1-64 bytes
 * @property string $audio_file_id A valid file identifier for the audio file
 * @property string $caption Optional. Caption, 0-1024 characters after entities parsing
 * @property string $parse_mode Optional. Mode for parsing entities in the audio caption. See formatting options for more details.
 * @property MessageEntity[] $caption_entities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
 * @property InlineKeyboardMarkup $reply_markup Optional. Inline keyboard attached to the message
 * @property InputMessageContent $input_message_content Optional. Content of the message to be sent instead of the audio
 *
 * @see https://core.telegram.org/bots/api#inlinequeryresultcachedaudio
 */
class InlineQueryResultCachedAudio extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'id' => 'string',
        'audio_file_id' => 'string',
        'caption' => 'string',
        'parse_mode' => 'string',
        'caption_entities' => 'MessageEntity[]',
        'reply_markup' => 'InlineKeyboardMarkup',
        'input_message_content' => 'InputMessageContent',
    ];
}