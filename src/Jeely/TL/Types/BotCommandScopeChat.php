<?php

namespace Jeely\TL\Types;

use Jeely\LazyUpdates;


/**
 * @class BotCommandScopeChat
 * @description Represents the scope of bot commands, covering a specific chat.
 *
 * @method string getType() Scope type, must be chat
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
 * @property string $type Scope type, must be chat
 * @property int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
 *
 * @see https://core.telegram.org/bots/api#botcommandscopechat
 */
class BotCommandScopeChat extends LazyUpdates
{
    const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'chat_id' => 'int',
    ];
}