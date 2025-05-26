<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class InlineQueryResultCachedSticker
* @description Represents a link to a sticker stored on the Telegram servers. By default, this sticker will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the sticker.
*
* @property	string $type Type of the result, must be sticker
* @method	string getType() Type of the result, must be sticker
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	string $id Unique identifier for this result, 1-64 bytes
* @method	string getId() Unique identifier for this result, 1-64 bytes
* @method	bool isId()
* @method	$this setId()
* @method	$this unsetId()

* @property	string $sticker_file_id A valid file identifier of the sticker
* @method	string getStickerFileId() A valid file identifier of the sticker
* @method	bool isStickerFileId()
* @method	$this setStickerFileId()
* @method	$this unsetStickerFileId()

* @property	InlineKeyboardMarkup $reply_markup Optional. Inline keyboard attached to the message
* @method	InlineKeyboardMarkup getReplyMarkup() Optional. Inline keyboard attached to the message
* @method	bool isReplyMarkup()
* @method	$this setReplyMarkup()
* @method	$this unsetReplyMarkup()

* @property	InputMessageContent $input_message_content Optional. Content of the message to be sent instead of the sticker
* @method	InputMessageContent getInputMessageContent() Optional. Content of the message to be sent instead of the sticker
* @method	bool isInputMessageContent()
* @method	$this setInputMessageContent()
* @method	$this unsetInputMessageContent()

*/

class InlineQueryResultCachedSticker extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'id'=> 'string',
		'sticker_file_id'=> 'string',
		'reply_markup'=> 'InlineKeyboardMarkup',
		'input_message_content'=> 'InputMessageContent',
	];

}