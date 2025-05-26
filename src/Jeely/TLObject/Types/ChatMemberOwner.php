<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class ChatMemberOwner
* @description Represents a chat member that owns the chat and has all administrator privileges.
*
* @property	string $status The member's status in the chat, always “creator”
* @method	string getStatus() The member's status in the chat, always “creator”
* @method	bool isStatus()
* @method	$this setStatus()
* @method	$this unsetStatus()

* @property	User $user Information about the user
* @method	User getUser() Information about the user
* @method	bool isUser()
* @method	$this setUser()
* @method	$this unsetUser()

* @property	bool $is_anonymous True, if the user's presence in the chat is hidden
* @method	bool getIsAnonymous() True, if the user's presence in the chat is hidden
* @method	bool isIsAnonymous()
* @method	$this setIsAnonymous()
* @method	$this unsetIsAnonymous()

* @property	string $custom_title Optional. Custom title for this user
* @method	string getCustomTitle() Optional. Custom title for this user
* @method	bool isCustomTitle()
* @method	$this setCustomTitle()
* @method	$this unsetCustomTitle()

*/

class ChatMemberOwner extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'status'=> 'string',
		'user'=> 'User',
		'is_anonymous'=> 'bool',
		'custom_title'=> 'string',
	];

}