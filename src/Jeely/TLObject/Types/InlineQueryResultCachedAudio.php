<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class InlineQueryResultCachedAudio
* @description Represents a link to an MP3 audio file stored on the Telegram servers. By default, this audio file will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the audio.
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

* @property	string $audio_file_id A valid file identifier for the audio file
* @method	string getAudioFileId() A valid file identifier for the audio file
* @method	bool isAudioFileId()
* @method	$this setAudioFileId()
* @method	$this unsetAudioFileId()

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

class InlineQueryResultCachedAudio extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'id'=> 'string',
		'audio_file_id'=> 'string',
		'caption'=> 'string',
		'parse_mode'=> 'string',
		'caption_entities'=> 'MessageEntity[]',
		'reply_markup'=> 'InlineKeyboardMarkup',
		'input_message_content'=> 'InputMessageContent',
	];

}