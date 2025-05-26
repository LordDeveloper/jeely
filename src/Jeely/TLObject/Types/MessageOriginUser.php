<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class MessageOriginUser
* @description The message was originally sent by a known user.
*
* @property	string $type Type of the message origin, always “user”
* @method	string getType() Type of the message origin, always “user”
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	int $date Date the message was sent originally in Unix time
* @method	int getDate() Date the message was sent originally in Unix time
* @method	bool isDate()
* @method	$this setDate()
* @method	$this unsetDate()

* @property	User $sender_user User that sent the message originally
* @method	User getSenderUser() User that sent the message originally
* @method	bool isSenderUser()
* @method	$this setSenderUser()
* @method	$this unsetSenderUser()

*/

class MessageOriginUser extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'date'=> 'int',
		'sender_user'=> 'User',
	];

}