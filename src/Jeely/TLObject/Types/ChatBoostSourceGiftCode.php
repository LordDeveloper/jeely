<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class ChatBoostSourceGiftCode
* @description The boost was obtained by the creation of Telegram Premium gift codes to boost a chat. Each such code boosts the chat 4 times for the duration of the corresponding Telegram Premium subscription.
*
* @property	string $source Source of the boost, always “gift_code”
* @method	string getSource() Source of the boost, always “gift_code”
* @method	bool isSource()
* @method	$this setSource()
* @method	$this unsetSource()

* @property	User $user User for which the gift code was created
* @method	User getUser() User for which the gift code was created
* @method	bool isUser()
* @method	$this setUser()
* @method	$this unsetUser()

*/

class ChatBoostSourceGiftCode extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'source'=> 'string',
		'user'=> 'User',
	];

}