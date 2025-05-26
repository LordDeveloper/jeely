<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class ChatBoostSourcePremium
* @description The boost was obtained by subscribing to Telegram Premium or by gifting a Telegram Premium subscription to another user.
*
* @property	string $source Source of the boost, always “premium”
* @method	string getSource() Source of the boost, always “premium”
* @method	bool isSource()
* @method	$this setSource()
* @method	$this unsetSource()

* @property	User $user User that boosted the chat
* @method	User getUser() User that boosted the chat
* @method	bool isUser()
* @method	$this setUser()
* @method	$this unsetUser()

*/

class ChatBoostSourcePremium extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'source'=> 'string',
		'user'=> 'User',
	];

}