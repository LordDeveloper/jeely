<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class InlineQuery
* @description This object represents an incoming inline query. When the user sends an empty query, your bot could return some default or trending results.
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

* @property	string $query Text of the query (up to 256 characters)
* @method	string getQuery() Text of the query (up to 256 characters)
* @method	bool isQuery()
* @method	$this setQuery()
* @method	$this unsetQuery()

* @property	string $offset Offset of the results to be returned, can be controlled by the bot
* @method	string getOffset() Offset of the results to be returned, can be controlled by the bot
* @method	bool isOffset()
* @method	$this setOffset()
* @method	$this unsetOffset()

* @property	string $chat_type Optional. Type of the chat from which the inline query was sent. Can be either “sender” for a private chat with the inline query sender, “private”, “group”, “supergroup”, or “channel”. The chat type should be always known for requests sent from official clients and most third-party clients, unless the request was sent from a secret chat
* @method	string getChatType() Optional. Type of the chat from which the inline query was sent. Can be either “sender” for a private chat with the inline query sender, “private”, “group”, “supergroup”, or “channel”. The chat type should be always known for requests sent from official clients and most third-party clients, unless the request was sent from a secret chat
* @method	bool isChatType()
* @method	$this setChatType()
* @method	$this unsetChatType()

* @property	Location $location Optional. Sender location, only for bots that request user location
* @method	Location getLocation() Optional. Sender location, only for bots that request user location
* @method	bool isLocation()
* @method	$this setLocation()
* @method	$this unsetLocation()

*/

class InlineQuery extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'id'=> 'string',
		'from'=> 'User',
		'query'=> 'string',
		'offset'=> 'string',
		'chat_type'=> 'string',
		'location'=> 'Location',
	];

}