<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class CallbackQuery
* @description This object represents an incoming callback query from a callback button in an inline keyboard. If the button that originated the query was attached to a message sent by the bot, the field message will be present. If the button was attached to a message sent via the bot (in inline mode), the field inline_message_id will be present. Exactly one of the fields data or game_short_name will be present.
*
* @property	string $id Unique identifier for this query
* @method	string getId() Unique identifier for this query
* @method	bool isId()
* @method	$this setId()
* @method	$this unsetId()

* @property	User $from Sender
* @method	User getFrom() Sender
* @method	bool isFrom()
* @method	$this setFrom()
* @method	$this unsetFrom()

* @property	MaybeInaccessibleMessage $message Optional. Message sent by the bot with the callback button that originated the query
* @method	MaybeInaccessibleMessage getMessage() Optional. Message sent by the bot with the callback button that originated the query
* @method	bool isMessage()
* @method	$this setMessage()
* @method	$this unsetMessage()

* @property	string $inline_message_id Optional. Identifier of the message sent via the bot in inline mode, that originated the query.
* @method	string getInlineMessageId() Optional. Identifier of the message sent via the bot in inline mode, that originated the query.
* @method	bool isInlineMessageId()
* @method	$this setInlineMessageId()
* @method	$this unsetInlineMessageId()

* @property	string $chat_instance Global identifier, uniquely corresponding to the chat to which the message with the callback button was sent. Useful for high scores in games.
* @method	string getChatInstance() Global identifier, uniquely corresponding to the chat to which the message with the callback button was sent. Useful for high scores in games.
* @method	bool isChatInstance()
* @method	$this setChatInstance()
* @method	$this unsetChatInstance()

* @property	string $data Optional. Data associated with the callback button. Be aware that the message originated the query can contain no callback buttons with this data.
* @method	string getData() Optional. Data associated with the callback button. Be aware that the message originated the query can contain no callback buttons with this data.
* @method	bool isData()
* @method	$this setData()
* @method	$this unsetData()

* @property	string $game_short_name Optional. Short name of a Game to be returned, serves as the unique identifier for the game
* @method	string getGameShortName() Optional. Short name of a Game to be returned, serves as the unique identifier for the game
* @method	bool isGameShortName()
* @method	$this setGameShortName()
* @method	$this unsetGameShortName()

*/

class CallbackQuery extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'id'=> 'string',
		'from'=> 'User',
		'message'=> 'MaybeInaccessibleMessage',
		'inline_message_id'=> 'string',
		'chat_instance'=> 'string',
		'data'=> 'string',
		'game_short_name'=> 'string',
	];

}