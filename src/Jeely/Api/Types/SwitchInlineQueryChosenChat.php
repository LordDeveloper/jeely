<?php

namespace Jeely\Api\Types;

/**
 * @class SwitchInlineQueryChosenChat
 * @description This object represents an inline button that switches the current user to inline mode in a chosen chat, with an optional default inline query.
 *
 * @method string getQuery() Optional. The default inline query to be inserted in the input field. If left empty, only the bot's username will be inserted.
 * @method bool getAllowUserChats() Optional. True, if private chats with users can be chosen
 * @method bool getAllowBotChats() Optional. True, if private chats with bots can be chosen
 * @method bool getAllowGroupChats() Optional. True, if group and supergroup chats can be chosen
 * @method bool getAllowChannelChats() Optional. True, if channel chats can be chosen
 *
 * @method bool isQuery()
 * @method bool isAllowUserChats()
 * @method bool isAllowBotChats()
 * @method bool isAllowGroupChats()
 * @method bool isAllowChannelChats()
 *
 * @method $this setQuery()
 * @method $this setAllowUserChats()
 * @method $this setAllowBotChats()
 * @method $this setAllowGroupChats()
 * @method $this setAllowChannelChats()
 *
 * @method $this unsetQuery()
 * @method $this unsetAllowUserChats()
 * @method $this unsetAllowBotChats()
 * @method $this unsetAllowGroupChats()
 * @method $this unsetAllowChannelChats()
 *
 * @property string $query Optional. The default inline query to be inserted in the input field. If left empty, only the bot's username will be inserted.
 * @property bool $allow_user_chats Optional. True, if private chats with users can be chosen
 * @property bool $allow_bot_chats Optional. True, if private chats with bots can be chosen
 * @property bool $allow_group_chats Optional. True, if group and supergroup chats can be chosen
 * @property bool $allow_channel_chats Optional. True, if channel chats can be chosen
 *
 * @see https://core.telegram.org/bots/api#switchinlinequerychosenchat
 */
class SwitchInlineQueryChosenChat extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'query' => 'string',
        'allow_user_chats' => 'bool',
        'allow_bot_chats' => 'bool',
        'allow_group_chats' => 'bool',
        'allow_channel_chats' => 'bool',
    ];
}
