<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class BotCommandScopeChatAdministrators
* @description Represents the scope of bot commands, covering all administrators of a specific group or supergroup chat.
*
* @property	string $type Scope type, must be chat_administrators
* @method	string getType() Scope type, must be chat_administrators
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
* @method	int|string getChatId() Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
* @method	bool isChatId()
* @method	$this setChatId()
* @method	$this unsetChatId()

*/

class BotCommandScopeChatAdministrators extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'chat_id'=> 'int|string',
	];

}