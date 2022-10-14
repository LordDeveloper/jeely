<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class InlineQueryResultDocument
 * @description Represents a link to a file. By default, this file will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the file. Currently, only .PDF and .ZIP files can be sent using this method.
 *
 * @method string getType() Type of the result, must be document
 * @method string getId() Unique identifier for this result, 1-64 bytes
 * @method string getTitle() Title for the result
 * @method string getCaption() Optional. Caption of the document to be sent, 0-1024 characters after entities parsing
 * @method string getParseMode() Optional. Mode for parsing entities in the document caption. See formatting options for more details.
 * @method MessageEntity[] getCaptionEntities() Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
 * @method string getDocumentUrl() A valid URL for the file
 * @method string getMimeType() MIME type of the content of the file, either “application/pdf” or “application/zip”
 * @method string getDescription() Optional. Short description of the result
 * @method InlineKeyboardMarkup getReplyMarkup() Optional. Inline keyboard attached to the message
 * @method InputMessageContent getInputMessageContent() Optional. Content of the message to be sent instead of the file
 * @method string getThumbUrl() Optional. URL of the thumbnail (JPEG only) for the file
 * @method int getThumbWidth() Optional. Thumbnail width
 * @method int getThumbHeight() Optional. Thumbnail height
 *
 * @method bool isType()
 * @method bool isId()
 * @method bool isTitle()
 * @method bool isCaption()
 * @method bool isParseMode()
 * @method bool isCaptionEntities()
 * @method bool isDocumentUrl()
 * @method bool isMimeType()
 * @method bool isDescription()
 * @method bool isReplyMarkup()
 * @method bool isInputMessageContent()
 * @method bool isThumbUrl()
 * @method bool isThumbWidth()
 * @method bool isThumbHeight()
 *
 * @method $this setType()
 * @method $this setId()
 * @method $this setTitle()
 * @method $this setCaption()
 * @method $this setParseMode()
 * @method $this setCaptionEntities()
 * @method $this setDocumentUrl()
 * @method $this setMimeType()
 * @method $this setDescription()
 * @method $this setReplyMarkup()
 * @method $this setInputMessageContent()
 * @method $this setThumbUrl()
 * @method $this setThumbWidth()
 * @method $this setThumbHeight()
 *
 * @method $this unsetType()
 * @method $this unsetId()
 * @method $this unsetTitle()
 * @method $this unsetCaption()
 * @method $this unsetParseMode()
 * @method $this unsetCaptionEntities()
 * @method $this unsetDocumentUrl()
 * @method $this unsetMimeType()
 * @method $this unsetDescription()
 * @method $this unsetReplyMarkup()
 * @method $this unsetInputMessageContent()
 * @method $this unsetThumbUrl()
 * @method $this unsetThumbWidth()
 * @method $this unsetThumbHeight()
 *
 * @property string $type Type of the result, must be document
 * @property string $id Unique identifier for this result, 1-64 bytes
 * @property string $title Title for the result
 * @property string $caption Optional. Caption of the document to be sent, 0-1024 characters after entities parsing
 * @property string $parse_mode Optional. Mode for parsing entities in the document caption. See formatting options for more details.
 * @property MessageEntity[] $caption_entities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
 * @property string $document_url A valid URL for the file
 * @property string $mime_type MIME type of the content of the file, either “application/pdf” or “application/zip”
 * @property string $description Optional. Short description of the result
 * @property InlineKeyboardMarkup $reply_markup Optional. Inline keyboard attached to the message
 * @property InputMessageContent $input_message_content Optional. Content of the message to be sent instead of the file
 * @property string $thumb_url Optional. URL of the thumbnail (JPEG only) for the file
 * @property int $thumb_width Optional. Thumbnail width
 * @property int $thumb_height Optional. Thumbnail height
 *
 * @see https://core.telegram.org/bots/api#inlinequeryresultdocument 
 */
class InlineQueryResultDocument extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
		'type' => 'string',
		'id' => 'string',
		'title' => 'string',
		'caption' => 'string',
		'parse_mode' => 'string',
		'caption_entities' => 'MessageEntity[]',
		'document_url' => 'string',
		'mime_type' => 'string',
		'description' => 'string',
		'reply_markup' => 'InlineKeyboardMarkup',
		'input_message_content' => 'InputMessageContent',
		'thumb_url' => 'string',
		'thumb_width' => 'int',
		'thumb_height' => 'int',
	];
}