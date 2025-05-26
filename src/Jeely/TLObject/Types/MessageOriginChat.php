<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class MessageOriginChat
* @description The message was originally sent on behalf of a chat to a group chat.
*
* @property	string $type Type of the message origin, always “chat”
* @method	string getType() Type of the message origin, always “chat”
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	int $date Date the message was sent originally in Unix time
* @method	int getDate() Date the message was sent originally in Unix time
* @method	bool isDate()
* @method	$this setDate()
* @method	$this unsetDate()

* @property	Chat $sender_chat Chat that sent the message originally
* @method	Chat getSenderChat() Chat that sent the message originally
* @method	bool isSenderChat()
* @method	$this setSenderChat()
* @method	$this unsetSenderChat()

* @property	string $author_signature Optional. For messages originally sent by an anonymous chat administrator, original message author signature
* @method	string getAuthorSignature() Optional. For messages originally sent by an anonymous chat administrator, original message author signature
* @method	bool isAuthorSignature()
* @method	$this setAuthorSignature()
* @method	$this unsetAuthorSignature()

*/

class MessageOriginChat extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'date'=> 'int',
		'sender_chat'=> 'Chat',
		'author_signature'=> 'string',
	];

}