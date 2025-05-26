<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class InlineQueryResultDocument
* @description Represents a link to a file. By default, this file will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the file. Currently, only .PDF and .ZIP files can be sent using this method.
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

* @property	string $document_url A valid URL for the file
* @method	string getDocumentUrl() A valid URL for the file
* @method	bool isDocumentUrl()
* @method	$this setDocumentUrl()
* @method	$this unsetDocumentUrl()

* @property	string $mime_type MIME type of the content of the file, either “application/pdf” or “application/zip”
* @method	string getMimeType() MIME type of the content of the file, either “application/pdf” or “application/zip”
* @method	bool isMimeType()
* @method	$this setMimeType()
* @method	$this unsetMimeType()

* @property	string $description Optional. Short description of the result
* @method	string getDescription() Optional. Short description of the result
* @method	bool isDescription()
* @method	$this setDescription()
* @method	$this unsetDescription()

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

* @property	string $thumbnail_url Optional. URL of the thumbnail (JPEG only) for the file
* @method	string getThumbnailUrl() Optional. URL of the thumbnail (JPEG only) for the file
* @method	bool isThumbnailUrl()
* @method	$this setThumbnailUrl()
* @method	$this unsetThumbnailUrl()

* @property	int $thumbnail_width Optional. Thumbnail width
* @method	int getThumbnailWidth() Optional. Thumbnail width
* @method	bool isThumbnailWidth()
* @method	$this setThumbnailWidth()
* @method	$this unsetThumbnailWidth()

* @property	int $thumbnail_height Optional. Thumbnail height
* @method	int getThumbnailHeight() Optional. Thumbnail height
* @method	bool isThumbnailHeight()
* @method	$this setThumbnailHeight()
* @method	$this unsetThumbnailHeight()

*/

class InlineQueryResultDocument extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'id'=> 'string',
		'title'=> 'string',
		'caption'=> 'string',
		'parse_mode'=> 'string',
		'caption_entities'=> 'MessageEntity[]',
		'document_url'=> 'string',
		'mime_type'=> 'string',
		'description'=> 'string',
		'reply_markup'=> 'InlineKeyboardMarkup',
		'input_message_content'=> 'InputMessageContent',
		'thumbnail_url'=> 'string',
		'thumbnail_width'=> 'int',
		'thumbnail_height'=> 'int',
	];

}