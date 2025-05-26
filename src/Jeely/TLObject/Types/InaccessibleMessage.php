<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class InaccessibleMessage
* @description This object describes a message that was deleted or is otherwise inaccessible to the bot.
*
* @property	Chat $chat Chat the message belonged to
* @method	Chat getChat() Chat the message belonged to
* @method	bool isChat()
* @method	$this setChat()
* @method	$this unsetChat()

* @property	int $message_id Unique message identifier inside the chat
* @method	int getMessageId() Unique message identifier inside the chat
* @method	bool isMessageId()
* @method	$this setMessageId()
* @method	$this unsetMessageId()

* @property	int $date Always 0. The field can be used to differentiate regular and inaccessible messages.
* @method	int getDate() Always 0. The field can be used to differentiate regular and inaccessible messages.
* @method	bool isDate()
* @method	$this setDate()
* @method	$this unsetDate()

*/

class InaccessibleMessage extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'chat'=> 'Chat',
		'message_id'=> 'int',
		'date'=> 'int',
	];

}