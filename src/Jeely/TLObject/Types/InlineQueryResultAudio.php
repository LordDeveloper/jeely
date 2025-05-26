<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class InlineQueryResultAudio
* @description Represents a link to an MP3 audio file. By default, this audio file will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the audio.
*
* @property	string $type Type of the result, must be audio
* @method	string getType() Type of the result, must be audio
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	string $id Unique identifier for this result, 1-64 bytes
* @method	string getId() Unique identifier for this result, 1-64 bytes
* @method	bool isId()
* @method	$this setId()
* @method	$this unsetId()

* @property	string $audio_url A valid URL for the audio file
* @method	string getAudioUrl() A valid URL for the audio file
* @method	bool isAudioUrl()
* @method	$this setAudioUrl()
* @method	$this unsetAudioUrl()

* @property	string $title Title
* @method	string getTitle() Title
* @method	bool isTitle()
* @method	$this setTitle()
* @method	$this unsetTitle()

* @property	string $caption Optional. Caption, 0-1024 characters after entities parsing
* @method	string getCaption() Optional. Caption, 0-1024 characters after entities parsing
* @method	bool isCaption()
* @method	$this setCaption()
* @method	$this unsetCaption()

* @property	string $parse_mode Optional. Mode for parsing entities in the audio caption. See formatting options for more details.
* @method	string getParseMode() Optional. Mode for parsing entities in the audio caption. See formatting options for more details.
* @method	bool isParseMode()
* @method	$this setParseMode()
* @method	$this unsetParseMode()

* @property	MessageEntity[] $caption_entities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
* @method	MessageEntity[] getCaptionEntities() Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
* @method	bool isCaptionEntities()
* @method	$this setCaptionEntities()
* @method	$this unsetCaptionEntities()

* @property	string $performer Optional. Performer
* @method	string getPerformer() Optional. Performer
* @method	bool isPerformer()
* @method	$this setPerformer()
* @method	$this unsetPerformer()

* @property	int $audio_duration Optional. Audio duration in seconds
* @method	int getAudioDuration() Optional. Audio duration in seconds
* @method	bool isAudioDuration()
* @method	$this setAudioDuration()
* @method	$this unsetAudioDuration()

* @property	InlineKeyboardMarkup $reply_markup Optional. Inline keyboard attached to the message
* @method	InlineKeyboardMarkup getReplyMarkup() Optional. Inline keyboard attached to the message
* @method	bool isReplyMarkup()
* @method	$this setReplyMarkup()
* @method	$this unsetReplyMarkup()

* @property	InputMessageContent $input_message_content Optional. Content of the message to be sent instead of the audio
* @method	InputMessageContent getInputMessageContent() Optional. Content of the message to be sent instead of the audio
* @method	bool isInputMessageContent()
* @method	$this setInputMessageContent()
* @method	$this unsetInputMessageContent()

*/

class InlineQueryResultAudio extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'id'=> 'string',
		'audio_url'=> 'string',
		'title'=> 'string',
		'caption'=> 'string',
		'parse_mode'=> 'string',
		'caption_entities'=> 'MessageEntity[]',
		'performer'=> 'string',
		'audio_duration'=> 'int',
		'reply_markup'=> 'InlineKeyboardMarkup',
		'input_message_content'=> 'InputMessageContent',
	];

}