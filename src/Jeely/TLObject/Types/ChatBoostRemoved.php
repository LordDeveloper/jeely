<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class ChatBoostRemoved
* @description This object represents a boost removed from a chat.
*
* @property	Chat $chat Chat which was boosted
* @method	Chat getChat() Chat which was boosted
* @method	bool isChat()
* @method	$this setChat()
* @method	$this unsetChat()

* @property	string $boost_id Unique identifier of the boost
* @method	string getBoostId() Unique identifier of the boost
* @method	bool isBoostId()
* @method	$this setBoostId()
* @method	$this unsetBoostId()

* @property	int $remove_date Point in time (Unix timestamp) when the boost was removed
* @method	int getRemoveDate() Point in time (Unix timestamp) when the boost was removed
* @method	bool isRemoveDate()
* @method	$this setRemoveDate()
* @method	$this unsetRemoveDate()

* @property	ChatBoostSource $source Source of the removed boost
* @method	ChatBoostSource getSource() Source of the removed boost
* @method	bool isSource()
* @method	$this setSource()
* @method	$this unsetSource()

*/

class ChatBoostRemoved extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'chat'=> 'Chat',
		'boost_id'=> 'string',
		'remove_date'=> 'int',
		'source'=> 'ChatBoostSource',
	];

}