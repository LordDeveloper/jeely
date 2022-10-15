<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class InlineQueryResultVoice
 * @description Represents a link to a voice recording in an .OGG container encoded with OPUS. By default, this voice recording will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the the voice message.
 *
 * @method string getType() Type of the result, must be voice
 * @method string getId() Unique identifier for this result, 1-64 bytes
 * @method string getVoiceUrl() A valid URL for the voice recording
 * @method string getTitle() Recording title
 * @method string getCaption() Optional. Caption, 0-1024 characters after entities parsing
 * @method string getParseMode() Optional. Mode for parsing entities in the voice message caption. See formatting options for more details.
 * @method MessageEntity[] getCaptionEntities() Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
 * @method int getVoiceDuration() Optional. Recording duration in seconds
 * @method InlineKeyboardMarkup getReplyMarkup() Optional. Inline keyboard attached to the message
 * @method InputMessageContent getInputMessageContent() Optional. Content of the message to be sent instead of the voice recording
 *
 * @method bool isType()
 * @method bool isId()
 * @method bool isVoiceUrl()
 * @method bool isTitle()
 * @method bool isCaption()
 * @method bool isParseMode()
 * @method bool isCaptionEntities()
 * @method bool isVoiceDuration()
 * @method bool isReplyMarkup()
 * @method bool isInputMessageContent()
 *
 * @method $this setType()
 * @method $this setId()
 * @method $this setVoiceUrl()
 * @method $this setTitle()
 * @method $this setCaption()
 * @method $this setParseMode()
 * @method $this setCaptionEntities()
 * @method $this setVoiceDuration()
 * @method $this setReplyMarkup()
 * @method $this setInputMessageContent()
 *
 * @method $this unsetType()
 * @method $this unsetId()
 * @method $this unsetVoiceUrl()
 * @method $this unsetTitle()
 * @method $this unsetCaption()
 * @method $this unsetParseMode()
 * @method $this unsetCaptionEntities()
 * @method $this unsetVoiceDuration()
 * @method $this unsetReplyMarkup()
 * @method $this unsetInputMessageContent()
 *
 * @property string $type Type of the result, must be voice
 * @property string $id Unique identifier for this result, 1-64 bytes
 * @property string $voice_url A valid URL for the voice recording
 * @property string $title Recording title
 * @property string $caption Optional. Caption, 0-1024 characters after entities parsing
 * @property string $parse_mode Optional. Mode for parsing entities in the voice message caption. See formatting options for more details.
 * @property MessageEntity[] $caption_entities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
 * @property int $voice_duration Optional. Recording duration in seconds
 * @property InlineKeyboardMarkup $reply_markup Optional. Inline keyboard attached to the message
 * @property InputMessageContent $input_message_content Optional. Content of the message to be sent instead of the voice recording
 *
 * @see https://core.telegram.org/bots/api#inlinequeryresultvoice
 */
class InlineQueryResultVoice extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'id' => 'string',
        'voice_url' => 'string',
        'title' => 'string',
        'caption' => 'string',
        'parse_mode' => 'string',
        'caption_entities' => 'MessageEntity[]',
        'voice_duration' => 'int',
        'reply_markup' => 'InlineKeyboardMarkup',
        'input_message_content' => 'InputMessageContent',
    ];
}