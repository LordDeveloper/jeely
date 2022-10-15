<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class BotCommandScopeAllChatAdministrators
 * @description Represents the scope of bot commands, covering all group and supergroup chat administrators.
 *
 * @method string getType() Scope type, must be all_chat_administrators
 *
 * @method bool isType()
 *
 * @method $this setType()
 *
 * @method $this unsetType()
 *
 * @property string $type Scope type, must be all_chat_administrators
 *
 * @see https://core.telegram.org/bots/api#botcommandscopeallchatadministrators
 */
class BotCommandScopeAllChatAdministrators extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'type' => 'string',
    ];
}