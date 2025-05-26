<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class ChatMemberLeft
* @description Represents a chat member that isn't currently a member of the chat, but may join it themselves.
*
* @property	string $status The member's status in the chat, always “left”
* @method	string getStatus() The member's status in the chat, always “left”
* @method	bool isStatus()
* @method	$this setStatus()
* @method	$this unsetStatus()

* @property	User $user Information about the user
* @method	User getUser() Information about the user
* @method	bool isUser()
* @method	$this setUser()
* @method	$this unsetUser()

*/

class ChatMemberLeft extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'status'=> 'string',
		'user'=> 'User',
	];

}