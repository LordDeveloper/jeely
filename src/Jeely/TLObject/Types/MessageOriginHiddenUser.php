<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class MessageOriginHiddenUser
* @description The message was originally sent by an unknown user.
*
* @property	string $type Type of the message origin, always “hidden_user”
* @method	string getType() Type of the message origin, always “hidden_user”
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	int $date Date the message was sent originally in Unix time
* @method	int getDate() Date the message was sent originally in Unix time
* @method	bool isDate()
* @method	$this setDate()
* @method	$this unsetDate()

* @property	string $sender_user_name Name of the user that sent the message originally
* @method	string getSenderUserName() Name of the user that sent the message originally
* @method	bool isSenderUserName()
* @method	$this setSenderUserName()
* @method	$this unsetSenderUserName()

*/

class MessageOriginHiddenUser extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'date'=> 'int',
		'sender_user_name'=> 'string',
	];

}