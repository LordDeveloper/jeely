<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class BotCommandScopeAllPrivateChats
 * @description Represents the scope of bot commands, covering all private chats.
 *
 * @method string getType() Scope type, must be all_private_chats
 *
 * @method bool isType()
 *
 * @method $this setType()
 *
 * @method $this unsetType()
 *
 * @property string $type Scope type, must be all_private_chats
 *
 * @see https://core.telegram.org/bots/api#botcommandscopeallprivatechats 
 */
class BotCommandScopeAllPrivateChats extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
		'type' => 'string',
	];
}