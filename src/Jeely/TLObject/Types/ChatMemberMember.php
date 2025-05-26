<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class ChatMemberMember
* @description Represents a chat member that has no additional privileges or restrictions.
*
* @property	string $status The member's status in the chat, always “member”
* @method	string getStatus() The member's status in the chat, always “member”
* @method	bool isStatus()
* @method	$this setStatus()
* @method	$this unsetStatus()

* @property	User $user Information about the user
* @method	User getUser() Information about the user
* @method	bool isUser()
* @method	$this setUser()
* @method	$this unsetUser()

* @property	int $until_date Optional. Date when the user's subscription will expire; Unix time
* @method	int getUntilDate() Optional. Date when the user's subscription will expire; Unix time
* @method	bool isUntilDate()
* @method	$this setUntilDate()
* @method	$this unsetUntilDate()

*/

class ChatMemberMember extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'status'=> 'string',
		'user'=> 'User',
		'until_date'=> 'int',
	];

}