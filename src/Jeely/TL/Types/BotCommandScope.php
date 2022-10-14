<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class BotCommandScope
 * @description This object represents the scope to which bot commands are applied. Currently, the following 7 scopes are supported:
 *
 * @mixin BotCommandScopeAllChatAdministrators
 * @mixin BotCommandScopeAllGroupChats
 * @mixin BotCommandScopeAllPrivateChats
 * @mixin BotCommandScopeChat
 * @mixin BotCommandScopeDefault
 *
 * @see https://core.telegram.org/bots/api#botcommandscope
 */
class BotCommandScope extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        BotCommandScopeAllChatAdministrators::class,
        BotCommandScopeAllGroupChats::class,
        BotCommandScopeAllPrivateChats::class,
        BotCommandScopeChat::class,
        BotCommandScopeDefault::class,
	];
}