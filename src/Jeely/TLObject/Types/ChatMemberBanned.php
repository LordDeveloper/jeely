<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class ChatMemberBanned
* @description Represents a chat member that was banned in the chat and can't return to the chat or view chat messages.
*
* @property	string $status The member's status in the chat, always “kicked”
* @method	string getStatus() The member's status in the chat, always “kicked”
* @method	bool isStatus()
* @method	$this setStatus()
* @method	$this unsetStatus()

* @property	User $user Information about the user
* @method	User getUser() Information about the user
* @method	bool isUser()
* @method	$this setUser()
* @method	$this unsetUser()

* @property	int $until_date Date when restrictions will be lifted for this user; Unix time. If 0, then the user is banned forever
* @method	int getUntilDate() Date when restrictions will be lifted for this user; Unix time. If 0, then the user is banned forever
* @method	bool isUntilDate()
* @method	$this setUntilDate()
* @method	$this unsetUntilDate()

*/

class ChatMemberBanned extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'status'=> 'string',
		'user'=> 'User',
		'until_date'=> 'int',
	];

}