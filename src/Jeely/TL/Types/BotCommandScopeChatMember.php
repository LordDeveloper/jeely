<?php

namespace Jeely\TL\Types;

use Jeely\LazyUpdates;


/**
 * @class BotCommandScopeChatMember
 * @description Represents the scope of bot commands, covering a specific member of a group or supergroup chat.
 *
 * @method string getType() Scope type, must be chat_member
 * @method int|string getChatId() Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
 * @method int getUserId() Unique identifier of the target user
 *
 * @method bool isType()
 * @method bool isChatId()
 * @method bool isUserId()
 *
 * @method $this setType()
 * @method $this setChatId()
 * @method $this setUserId()
 *
 * @method $this unsetType()
 * @method $this unsetChatId()
 * @method $this unsetUserId()
 *
 * @property string $type Scope type, must be chat_member
 * @property int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
 * @property int $user_id Unique identifier of the target user
 *
 * @see https://core.telegram.org/bots/api#botcommandscopechatmember
 */
class BotCommandScopeChatMember extends LazyUpdates
{
    const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'chat_id' => 'int',
        'user_id' => 'int',
    ];
}