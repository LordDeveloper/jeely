<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class MessageOriginChannel
* @description The message was originally sent to a channel chat.
*
* @property	string $type Type of the message origin, always “channel”
* @method	string getType() Type of the message origin, always “channel”
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	int $date Date the message was sent originally in Unix time
* @method	int getDate() Date the message was sent originally in Unix time
* @method	bool isDate()
* @method	$this setDate()
* @method	$this unsetDate()

* @property	Chat $chat Channel chat to which the message was originally sent
* @method	Chat getChat() Channel chat to which the message was originally sent
* @method	bool isChat()
* @method	$this setChat()
* @method	$this unsetChat()

* @property	int $message_id Unique message identifier inside the chat
* @method	int getMessageId() Unique message identifier inside the chat
* @method	bool isMessageId()
* @method	$this setMessageId()
* @method	$this unsetMessageId()

* @property	string $author_signature Optional. Signature of the original post author
* @method	string getAuthorSignature() Optional. Signature of the original post author
* @method	bool isAuthorSignature()
* @method	$this setAuthorSignature()
* @method	$this unsetAuthorSignature()

*/

class MessageOriginChannel extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'date'=> 'int',
		'chat'=> 'Chat',
		'message_id'=> 'int',
		'author_signature'=> 'string',
	];

}