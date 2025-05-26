<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class ReplyParameters
* @description Describes reply parameters for the message that is being sent.
*
* @property	int $message_id Identifier of the message that will be replied to in the current chat, or in the chat chat_id if it is specified
* @method	int getMessageId() Identifier of the message that will be replied to in the current chat, or in the chat chat_id if it is specified
* @method	bool isMessageId()
* @method	$this setMessageId()
* @method	$this unsetMessageId()

* @property	int|string $chat_id Optional. If the message to be replied to is from a different chat, unique identifier for the chat or username of the channel (in the format @channelusername). Not supported for messages sent on behalf of a business account.
* @method	int|string getChatId() Optional. If the message to be replied to is from a different chat, unique identifier for the chat or username of the channel (in the format @channelusername). Not supported for messages sent on behalf of a business account.
* @method	bool isChatId()
* @method	$this setChatId()
* @method	$this unsetChatId()

* @property	bool $allow_sending_without_reply Optional. Pass True if the message should be sent even if the specified message to be replied to is not found. Always False for replies in another chat or forum topic. Always True for messages sent on behalf of a business account.
* @method	bool getAllowSendingWithoutReply() Optional. Pass True if the message should be sent even if the specified message to be replied to is not found. Always False for replies in another chat or forum topic. Always True for messages sent on behalf of a business account.
* @method	bool isAllowSendingWithoutReply()
* @method	$this setAllowSendingWithoutReply()
* @method	$this unsetAllowSendingWithoutReply()

* @property	string $quote Optional. Quoted part of the message to be replied to; 0-1024 characters after entities parsing. The quote must be an exact substring of the message to be replied to, including bold, italic, underline, strikethrough, spoiler, and custom_emoji entities. The message will fail to send if the quote isn't found in the original message.
* @method	string getQuote() Optional. Quoted part of the message to be replied to; 0-1024 characters after entities parsing. The quote must be an exact substring of the message to be replied to, including bold, italic, underline, strikethrough, spoiler, and custom_emoji entities. The message will fail to send if the quote isn't found in the original message.
* @method	bool isQuote()
* @method	$this setQuote()
* @method	$this unsetQuote()

* @property	string $quote_parse_mode Optional. Mode for parsing entities in the quote. See formatting options for more details.
* @method	string getQuoteParseMode() Optional. Mode for parsing entities in the quote. See formatting options for more details.
* @method	bool isQuoteParseMode()
* @method	$this setQuoteParseMode()
* @method	$this unsetQuoteParseMode()

* @property	MessageEntity[] $quote_entities Optional. A JSON-serialized list of special entities that appear in the quote. It can be specified instead of quote_parse_mode.
* @method	MessageEntity[] getQuoteEntities() Optional. A JSON-serialized list of special entities that appear in the quote. It can be specified instead of quote_parse_mode.
* @method	bool isQuoteEntities()
* @method	$this setQuoteEntities()
* @method	$this unsetQuoteEntities()

* @property	int $quote_position Optional. Position of the quote in the original message in UTF-16 code units
* @method	int getQuotePosition() Optional. Position of the quote in the original message in UTF-16 code units
* @method	bool isQuotePosition()
* @method	$this setQuotePosition()
* @method	$this unsetQuotePosition()

*/

class ReplyParameters extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'message_id'=> 'int',
		'chat_id'=> 'int|string',
		'allow_sending_without_reply'=> 'bool',
		'quote'=> 'string',
		'quote_parse_mode'=> 'string',
		'quote_entities'=> 'MessageEntity[]',
		'quote_position'=> 'int',
	];

}