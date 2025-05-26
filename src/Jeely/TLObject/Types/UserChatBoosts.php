<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class UserChatBoosts
* @description This object represents a list of boosts added to a chat by a user.
*
* @property	ChatBoost[] $boosts The list of boosts added to the chat by the user
* @method	ChatBoost[] getBoosts() The list of boosts added to the chat by the user
* @method	bool isBoosts()
* @method	$this setBoosts()
* @method	$this unsetBoosts()

*/

class UserChatBoosts extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'boosts'=> 'ChatBoost[]',
	];

}