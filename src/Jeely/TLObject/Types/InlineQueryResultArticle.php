<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class InlineQueryResultArticle
* @description Represents a link to an article or web page.
*
* @property	string $type Type of the result, must be article
* @method	string getType() Type of the result, must be article
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	string $id Unique identifier for this result, 1-64 Bytes
* @method	string getId() Unique identifier for this result, 1-64 Bytes
* @method	bool isId()
* @method	$this setId()
* @method	$this unsetId()

* @property	string $title Title of the result
* @method	string getTitle() Title of the result
* @method	bool isTitle()
* @method	$this setTitle()
* @method	$this unsetTitle()

* @property	InputMessageContent $input_message_content Content of the message to be sent
* @method	InputMessageContent getInputMessageContent() Content of the message to be sent
* @method	bool isInputMessageContent()
* @method	$this setInputMessageContent()
* @method	$this unsetInputMessageContent()

* @property	InlineKeyboardMarkup $reply_markup Optional. Inline keyboard attached to the message
* @method	InlineKeyboardMarkup getReplyMarkup() Optional. Inline keyboard attached to the message
* @method	bool isReplyMarkup()
* @method	$this setReplyMarkup()
* @method	$this unsetReplyMarkup()

* @property	string $url Optional. URL of the result
* @method	string getUrl() Optional. URL of the result
* @method	bool isUrl()
* @method	$this setUrl()
* @method	$this unsetUrl()

* @property	string $description Optional. Short description of the result
* @method	string getDescription() Optional. Short description of the result
* @method	bool isDescription()
* @method	$this setDescription()
* @method	$this unsetDescription()

* @property	string $thumbnail_url Optional. Url of the thumbnail for the result
* @method	string getThumbnailUrl() Optional. Url of the thumbnail for the result
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

class InlineQueryResultArticle extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'id'=> 'string',
		'title'=> 'string',
		'input_message_content'=> 'InputMessageContent',
		'reply_markup'=> 'InlineKeyboardMarkup',
		'url'=> 'string',
		'description'=> 'string',
		'thumbnail_url'=> 'string',
		'thumbnail_width'=> 'int',
		'thumbnail_height'=> 'int',
	];

}