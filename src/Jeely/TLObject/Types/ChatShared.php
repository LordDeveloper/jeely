<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class ChatShared
* @description This object contains information about a chat that was shared with the bot using a KeyboardButtonRequestChat button.
*
* @property	int $request_id Identifier of the request
* @method	int getRequestId() Identifier of the request
* @method	bool isRequestId()
* @method	$this setRequestId()
* @method	$this unsetRequestId()

* @property	int $chat_id Identifier of the shared chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. The bot may not have access to the chat and could be unable to use this identifier, unless the chat is already known to the bot by some other means.
* @method	int getChatId() Identifier of the shared chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. The bot may not have access to the chat and could be unable to use this identifier, unless the chat is already known to the bot by some other means.
* @method	bool isChatId()
* @method	$this setChatId()
* @method	$this unsetChatId()

* @property	string $title Optional. Title of the chat, if the title was requested by the bot.
* @method	string getTitle() Optional. Title of the chat, if the title was requested by the bot.
* @method	bool isTitle()
* @method	$this setTitle()
* @method	$this unsetTitle()

* @property	string $username Optional. Username of the chat, if the username was requested by the bot and available.
* @method	string getUsername() Optional. Username of the chat, if the username was requested by the bot and available.
* @method	bool isUsername()
* @method	$this setUsername()
* @method	$this unsetUsername()

* @property	PhotoSize[] $photo Optional. Available sizes of the chat photo, if the photo was requested by the bot
* @method	PhotoSize[] getPhoto() Optional. Available sizes of the chat photo, if the photo was requested by the bot
* @method	bool isPhoto()
* @method	$this setPhoto()
* @method	$this unsetPhoto()

*/

class ChatShared extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'request_id'=> 'int',
		'chat_id'=> 'int',
		'title'=> 'string',
		'username'=> 'string',
		'photo'=> 'PhotoSize[]',
	];

}