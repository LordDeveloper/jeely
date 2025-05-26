<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class ChatBoostUpdated
* @description This object represents a boost added to a chat or changed.
*
* @property	Chat $chat Chat which was boosted
* @method	Chat getChat() Chat which was boosted
* @method	bool isChat()
* @method	$this setChat()
* @method	$this unsetChat()

* @property	ChatBoost $boost Information about the chat boost
* @method	ChatBoost getBoost() Information about the chat boost
* @method	bool isBoost()
* @method	$this setBoost()
* @method	$this unsetBoost()

*/

class ChatBoostUpdated extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'chat'=> 'Chat',
		'boost'=> 'ChatBoost',
	];

}