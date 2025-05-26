<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class ChatBoostAdded
* @description This object represents a service message about a user boosting a chat.
*
* @property	int $boost_count Number of boosts added by the user
* @method	int getBoostCount() Number of boosts added by the user
* @method	bool isBoostCount()
* @method	$this setBoostCount()
* @method	$this unsetBoostCount()

*/

class ChatBoostAdded extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'boost_count'=> 'int',
	];

}