<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class BotCommandScopeChatMember
* @description Represents the scope of bot commands, covering a specific member of a group or supergroup chat.
*
* @property	string $type Scope type, must be chat_member
* @method	string getType() Scope type, must be chat_member
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
* @method	int|string getChatId() Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
* @method	bool isChatId()
* @method	$this setChatId()
* @method	$this unsetChatId()

* @property	int $user_id Unique identifier of the target user
* @method	int getUserId() Unique identifier of the target user
* @method	bool isUserId()
* @method	$this setUserId()
* @method	$this unsetUserId()

*/

class BotCommandScopeChatMember extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'chat_id'=> 'int|string',
		'user_id'=> 'int',
	];

}