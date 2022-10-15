<?php

namespace Jeely\TL\Types;

use Jeely\LazyUpdates;


/**
 * @class BotCommandScopeChatAdministrators
 * @description Represents the scope of bot commands, covering all administrators of a specific group or supergroup chat.
 *
 * @method string getType() Scope type, must be chat_administrators
 * @method int|string getChatId() Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
 *
 * @method bool isType()
 * @method bool isChatId()
 *
 * @method $this setType()
 * @method $this setChatId()
 *
 * @method $this unsetType()
 * @method $this unsetChatId()
 *
 * @property string $type Scope type, must be chat_administrators
 * @property int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
 *
 * @see https://core.telegram.org/bots/api#botcommandscopechatadministrators
 */
class BotCommandScopeChatAdministrators extends LazyUpdates
{
    const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'chat_id' => 'int',
    ];
}