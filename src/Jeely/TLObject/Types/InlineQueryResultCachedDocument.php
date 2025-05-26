<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class InlineQueryResultCachedDocument
* @description Represents a link to a file stored on the Telegram servers. By default, this file will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the file.
*
* @property	string $type Type of the result, must be document
* @method	string getType() Type of the result, must be document
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	string $id Unique identifier for this result, 1-64 bytes
* @method	string getId() Unique identifier for this result, 1-64 bytes
* @method	bool isId()
* @method	$this setId()
* @method	$this unsetId()

* @property	string $title Title for the result
* @method	string getTitle() Title for the result
* @method	bool isTitle()
* @method	$this setTitle()
* @method	$this unsetTitle()

* @property	string $document_file_id A valid file identifier for the file
* @method	string getDocumentFileId() A valid file identifier for the file
* @method	bool isDocumentFileId()
* @method	$this setDocumentFileId()
* @method	$this unsetDocumentFileId()

* @property	string $description Optional. Short description of the result
* @method	string getDescription() Optional. Short description of the result
* @method	bool isDescription()
* @method	$this setDescription()
* @method	$this unsetDescription()

* @property	string $caption Optional. Caption of the document to be sent, 0-1024 characters after entities parsing
* @method	string getCaption() Optional. Caption of the document to be sent, 0-1024 characters after entities parsing
* @method	bool isCaption()
* @method	$this setCaption()
* @method	$this unsetCaption()

* @property	string $parse_mode Optional. Mode for parsing entities in the document caption. See formatting options for more details.
* @method	string getParseMode() Optional. Mode for parsing entities in the document caption. See formatting options for more details.
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

* @property	InputMessageContent $input_message_content Optional. Content of the message to be sent instead of the file
* @method	InputMessageContent getInputMessageContent() Optional. Content of the message to be sent instead of the file
* @method	bool isInputMessageContent()
* @method	$this setInputMessageContent()
* @method	$this unsetInputMessageContent()

*/

class InlineQueryResultCachedDocument extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'id'=> 'string',
		'title'=> 'string',
		'document_file_id'=> 'string',
		'description'=> 'string',
		'caption'=> 'string',
		'parse_mode'=> 'string',
		'caption_entities'=> 'MessageEntity[]',
		'reply_markup'=> 'InlineKeyboardMarkup',
		'input_message_content'=> 'InputMessageContent',
	];

}