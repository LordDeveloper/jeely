<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;
use Jeely\TLObject\Types\BotCommandScopeDefault;
use Jeely\TLObject\Types\BotCommandScopeAllPrivateChats;
use Jeely\TLObject\Types\BotCommandScopeAllGroupChats;
use Jeely\TLObject\Types\BotCommandScopeAllChatAdministrators;
use Jeely\TLObject\Types\BotCommandScopeChat;
use Jeely\TLObject\Types\BotCommandScopeChatAdministrators;
use Jeely\TLObject\Types\BotCommandScopeChatMember;


/**
* @class BotCommandScope
* @description This object represents the scope to which bot commands are applied. Currently, the following 7 scopes are supported:
*
*/

class BotCommandScope extends TLObject
{
	const JSON_PROPERTY_MAP = [
		BotCommandScopeDefault::class,
		BotCommandScopeAllPrivateChats::class,
		BotCommandScopeAllGroupChats::class,
		BotCommandScopeAllChatAdministrators::class,
		BotCommandScopeChat::class,
		BotCommandScopeChatAdministrators::class,
		BotCommandScopeChatMember::class,
	];

}