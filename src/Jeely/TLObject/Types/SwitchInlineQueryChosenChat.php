<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class SwitchInlineQueryChosenChat
* @description This object represents an inline button that switches the current user to inline mode in a chosen chat, with an optional default inline query.
*
* @property	string $query Optional. The default inline query to be inserted in the input field. If left empty, only the bot's username will be inserted
* @method	string getQuery() Optional. The default inline query to be inserted in the input field. If left empty, only the bot's username will be inserted
* @method	bool isQuery()
* @method	$this setQuery()
* @method	$this unsetQuery()

* @property	bool $allow_user_chats Optional. True, if private chats with users can be chosen
* @method	bool getAllowUserChats() Optional. True, if private chats with users can be chosen
* @method	bool isAllowUserChats()
* @method	$this setAllowUserChats()
* @method	$this unsetAllowUserChats()

* @property	bool $allow_bot_chats Optional. True, if private chats with bots can be chosen
* @method	bool getAllowBotChats() Optional. True, if private chats with bots can be chosen
* @method	bool isAllowBotChats()
* @method	$this setAllowBotChats()
* @method	$this unsetAllowBotChats()

* @property	bool $allow_group_chats Optional. True, if group and supergroup chats can be chosen
* @method	bool getAllowGroupChats() Optional. True, if group and supergroup chats can be chosen
* @method	bool isAllowGroupChats()
* @method	$this setAllowGroupChats()
* @method	$this unsetAllowGroupChats()

* @property	bool $allow_channel_chats Optional. True, if channel chats can be chosen
* @method	bool getAllowChannelChats() Optional. True, if channel chats can be chosen
* @method	bool isAllowChannelChats()
* @method	$this setAllowChannelChats()
* @method	$this unsetAllowChannelChats()

*/

class SwitchInlineQueryChosenChat extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'query'=> 'string',
		'allow_user_chats'=> 'bool',
		'allow_bot_chats'=> 'bool',
		'allow_group_chats'=> 'bool',
		'allow_channel_chats'=> 'bool',
	];

}