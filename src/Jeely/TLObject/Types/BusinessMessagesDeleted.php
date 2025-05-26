<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class BusinessMessagesDeleted
* @description This object is received when messages are deleted from a connected business account.
*
* @property	string $business_connection_id Unique identifier of the business connection
* @method	string getBusinessConnectionId() Unique identifier of the business connection
* @method	bool isBusinessConnectionId()
* @method	$this setBusinessConnectionId()
* @method	$this unsetBusinessConnectionId()

* @property	Chat $chat Information about a chat in the business account. The bot may not have access to the chat or the corresponding user.
* @method	Chat getChat() Information about a chat in the business account. The bot may not have access to the chat or the corresponding user.
* @method	bool isChat()
* @method	$this setChat()
* @method	$this unsetChat()

* @property	int[] $message_ids The list of identifiers of deleted messages in the chat of the business account
* @method	int[] getMessageIds() The list of identifiers of deleted messages in the chat of the business account
* @method	bool isMessageIds()
* @method	$this setMessageIds()
* @method	$this unsetMessageIds()

*/

class BusinessMessagesDeleted extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'business_connection_id'=> 'string',
		'chat'=> 'Chat',
		'message_ids'=> 'int[]',
	];

}