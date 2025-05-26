<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class KeyboardButtonRequestChat
* @description This object defines the criteria used to request a suitable chat. Information about the selected chat will be shared with the bot when the corresponding button is pressed. The bot will be granted requested rights in the chat if appropriate. More about requesting chats ».
*
* @property	int $request_id Signed 32-bit identifier of the request, which will be received back in the ChatShared object. Must be unique within the message
* @method	int getRequestId() Signed 32-bit identifier of the request, which will be received back in the ChatShared object. Must be unique within the message
* @method	bool isRequestId()
* @method	$this setRequestId()
* @method	$this unsetRequestId()

* @property	bool $chat_is_channel Pass True to request a channel chat, pass False to request a group or a supergroup chat.
* @method	bool getChatIsChannel() Pass True to request a channel chat, pass False to request a group or a supergroup chat.
* @method	bool isChatIsChannel()
* @method	$this setChatIsChannel()
* @method	$this unsetChatIsChannel()

* @property	bool $chat_is_forum Optional. Pass True to request a forum supergroup, pass False to request a non-forum chat. If not specified, no additional restrictions are applied.
* @method	bool getChatIsForum() Optional. Pass True to request a forum supergroup, pass False to request a non-forum chat. If not specified, no additional restrictions are applied.
* @method	bool isChatIsForum()
* @method	$this setChatIsForum()
* @method	$this unsetChatIsForum()

* @property	bool $chat_has_username Optional. Pass True to request a supergroup or a channel with a username, pass False to request a chat without a username. If not specified, no additional restrictions are applied.
* @method	bool getChatHasUsername() Optional. Pass True to request a supergroup or a channel with a username, pass False to request a chat without a username. If not specified, no additional restrictions are applied.
* @method	bool isChatHasUsername()
* @method	$this setChatHasUsername()
* @method	$this unsetChatHasUsername()

* @property	bool $chat_is_created Optional. Pass True to request a chat owned by the user. Otherwise, no additional restrictions are applied.
* @method	bool getChatIsCreated() Optional. Pass True to request a chat owned by the user. Otherwise, no additional restrictions are applied.
* @method	bool isChatIsCreated()
* @method	$this setChatIsCreated()
* @method	$this unsetChatIsCreated()

* @property	ChatAdministratorRights $user_administrator_rights Optional. A JSON-serialized object listing the required administrator rights of the user in the chat. The rights must be a superset of bot_administrator_rights. If not specified, no additional restrictions are applied.
* @method	ChatAdministratorRights getUserAdministratorRights() Optional. A JSON-serialized object listing the required administrator rights of the user in the chat. The rights must be a superset of bot_administrator_rights. If not specified, no additional restrictions are applied.
* @method	bool isUserAdministratorRights()
* @method	$this setUserAdministratorRights()
* @method	$this unsetUserAdministratorRights()

* @property	ChatAdministratorRights $bot_administrator_rights Optional. A JSON-serialized object listing the required administrator rights of the bot in the chat. The rights must be a subset of user_administrator_rights. If not specified, no additional restrictions are applied.
* @method	ChatAdministratorRights getBotAdministratorRights() Optional. A JSON-serialized object listing the required administrator rights of the bot in the chat. The rights must be a subset of user_administrator_rights. If not specified, no additional restrictions are applied.
* @method	bool isBotAdministratorRights()
* @method	$this setBotAdministratorRights()
* @method	$this unsetBotAdministratorRights()

* @property	bool $bot_is_member Optional. Pass True to request a chat with the bot as a member. Otherwise, no additional restrictions are applied.
* @method	bool getBotIsMember() Optional. Pass True to request a chat with the bot as a member. Otherwise, no additional restrictions are applied.
* @method	bool isBotIsMember()
* @method	$this setBotIsMember()
* @method	$this unsetBotIsMember()

* @property	bool $request_title Optional. Pass True to request the chat's title
* @method	bool getRequestTitle() Optional. Pass True to request the chat's title
* @method	bool isRequestTitle()
* @method	$this setRequestTitle()
* @method	$this unsetRequestTitle()

* @property	bool $request_username Optional. Pass True to request the chat's username
* @method	bool getRequestUsername() Optional. Pass True to request the chat's username
* @method	bool isRequestUsername()
* @method	$this setRequestUsername()
* @method	$this unsetRequestUsername()

* @property	bool $request_photo Optional. Pass True to request the chat's photo
* @method	bool getRequestPhoto() Optional. Pass True to request the chat's photo
* @method	bool isRequestPhoto()
* @method	$this setRequestPhoto()
* @method	$this unsetRequestPhoto()

*/

class KeyboardButtonRequestChat extends TLObject implements \Jeely\Contracts\KeyboardButtonInterface
{
	const JSON_PROPERTY_MAP = [
		'request_id'=> 'int',
		'chat_is_channel'=> 'bool',
		'chat_is_forum'=> 'bool',
		'chat_has_username'=> 'bool',
		'chat_is_created'=> 'bool',
		'user_administrator_rights'=> 'ChatAdministratorRights',
		'bot_administrator_rights'=> 'ChatAdministratorRights',
		'bot_is_member'=> 'bool',
		'request_title'=> 'bool',
		'request_username'=> 'bool',
		'request_photo'=> 'bool',
	];

}