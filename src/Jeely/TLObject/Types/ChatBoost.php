<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class ChatBoost
* @description This object contains information about a chat boost.
*
* @property	string $boost_id Unique identifier of the boost
* @method	string getBoostId() Unique identifier of the boost
* @method	bool isBoostId()
* @method	$this setBoostId()
* @method	$this unsetBoostId()

* @property	int $add_date Point in time (Unix timestamp) when the chat was boosted
* @method	int getAddDate() Point in time (Unix timestamp) when the chat was boosted
* @method	bool isAddDate()
* @method	$this setAddDate()
* @method	$this unsetAddDate()

* @property	int $expiration_date Point in time (Unix timestamp) when the boost will automatically expire, unless the booster's Telegram Premium subscription is prolonged
* @method	int getExpirationDate() Point in time (Unix timestamp) when the boost will automatically expire, unless the booster's Telegram Premium subscription is prolonged
* @method	bool isExpirationDate()
* @method	$this setExpirationDate()
* @method	$this unsetExpirationDate()

* @property	ChatBoostSource $source Source of the added boost
* @method	ChatBoostSource getSource() Source of the added boost
* @method	bool isSource()
* @method	$this setSource()
* @method	$this unsetSource()

*/

class ChatBoost extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'boost_id'=> 'string',
		'add_date'=> 'int',
		'expiration_date'=> 'int',
		'source'=> 'ChatBoostSource',
	];

}