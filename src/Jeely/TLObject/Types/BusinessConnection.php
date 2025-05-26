<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class BusinessConnection
* @description Describes the connection of the bot with a business account.
*
* @property	string $id Unique identifier of the business connection
* @method	string getId() Unique identifier of the business connection
* @method	bool isId()
* @method	$this setId()
* @method	$this unsetId()

* @property	User $user Business account user that created the business connection
* @method	User getUser() Business account user that created the business connection
* @method	bool isUser()
* @method	$this setUser()
* @method	$this unsetUser()

* @property	int $user_chat_id Identifier of a private chat with the user who created the business connection. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
* @method	int getUserChatId() Identifier of a private chat with the user who created the business connection. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
* @method	bool isUserChatId()
* @method	$this setUserChatId()
* @method	$this unsetUserChatId()

* @property	int $date Date the connection was established in Unix time
* @method	int getDate() Date the connection was established in Unix time
* @method	bool isDate()
* @method	$this setDate()
* @method	$this unsetDate()

* @property	BusinessBotRights $rights Optional. Rights of the business bot
* @method	BusinessBotRights getRights() Optional. Rights of the business bot
* @method	bool isRights()
* @method	$this setRights()
* @method	$this unsetRights()

* @property	bool $is_enabled True, if the connection is active
* @method	bool getIsEnabled() True, if the connection is active
* @method	bool isIsEnabled()
* @method	$this setIsEnabled()
* @method	$this unsetIsEnabled()

*/

class BusinessConnection extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'id'=> 'string',
		'user'=> 'User',
		'user_chat_id'=> 'int',
		'date'=> 'int',
		'rights'=> 'BusinessBotRights',
		'is_enabled'=> 'bool',
	];

}