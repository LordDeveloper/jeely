<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class BotCommandScopeAllGroupChats
 * @description Represents the scope of bot commands, covering all group and supergroup chats.
 *
 * @method string getType() Scope type, must be all_group_chats
 *
 * @method bool isType()
 *
 * @method $this setType()
 *
 * @method $this unsetType()
 *
 * @property string $type Scope type, must be all_group_chats
 *
 * @see https://core.telegram.org/bots/api#botcommandscopeallgroupchats 
 */
class BotCommandScopeAllGroupChats extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
		'type' => 'string',
	];
}