<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class TransactionPartnerChat
* @description Describes a transaction with a chat.
*
* @property	string $type Type of the transaction partner, always “chat”
* @method	string getType() Type of the transaction partner, always “chat”
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	Chat $chat Information about the chat
* @method	Chat getChat() Information about the chat
* @method	bool isChat()
* @method	$this setChat()
* @method	$this unsetChat()

* @property	Gift $gift Optional. The gift sent to the chat by the bot
* @method	Gift getGift() Optional. The gift sent to the chat by the bot
* @method	bool isGift()
* @method	$this setGift()
* @method	$this unsetGift()

*/

class TransactionPartnerChat extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'chat'=> 'Chat',
		'gift'=> 'Gift',
	];

}