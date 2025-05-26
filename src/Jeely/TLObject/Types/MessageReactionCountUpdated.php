<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class MessageReactionCountUpdated
* @description This object represents reaction changes on a message with anonymous reactions.
*
* @property	Chat $chat The chat containing the message
* @method	Chat getChat() The chat containing the message
* @method	bool isChat()
* @method	$this setChat()
* @method	$this unsetChat()

* @property	int $message_id Unique message identifier inside the chat
* @method	int getMessageId() Unique message identifier inside the chat
* @method	bool isMessageId()
* @method	$this setMessageId()
* @method	$this unsetMessageId()

* @property	int $date Date of the change in Unix time
* @method	int getDate() Date of the change in Unix time
* @method	bool isDate()
* @method	$this setDate()
* @method	$this unsetDate()

* @property	ReactionCount[] $reactions List of reactions that are present on the message
* @method	ReactionCount[] getReactions() List of reactions that are present on the message
* @method	bool isReactions()
* @method	$this setReactions()
* @method	$this unsetReactions()

*/

class MessageReactionCountUpdated extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'chat'=> 'Chat',
		'message_id'=> 'int',
		'date'=> 'int',
		'reactions'=> 'ReactionCount[]',
	];

}