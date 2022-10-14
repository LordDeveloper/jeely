<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class InlineQuery
 * @description This object represents an incoming inline query. When the user sends an empty query, your bot could return some default or trending results.
 *
 * @method string getId() Unique identifier for this query
 * @method User getFrom() Sender
 * @method string getQuery() Text of the query (up to 256 characters)
 * @method string getOffset() Offset of the results to be returned, can be controlled by the bot
 * @method string getChatType() Optional. Type of the chat from which the inline query was sent. Can be either “sender” for a private chat with the inline query sender, “private”, “group”, “supergroup”, or “channel”. The chat type should be always known for requests sent from official clients and most third-party clients, unless the request was sent from a secret chat
 * @method Location getLocation() Optional. Sender location, only for bots that request user location
 *
 * @method bool isId()
 * @method bool isFrom()
 * @method bool isQuery()
 * @method bool isOffset()
 * @method bool isChatType()
 * @method bool isLocation()
 *
 * @method $this setId()
 * @method $this setFrom()
 * @method $this setQuery()
 * @method $this setOffset()
 * @method $this setChatType()
 * @method $this setLocation()
 *
 * @method $this unsetId()
 * @method $this unsetFrom()
 * @method $this unsetQuery()
 * @method $this unsetOffset()
 * @method $this unsetChatType()
 * @method $this unsetLocation()
 *
 * @property string $id Unique identifier for this query
 * @property User $from Sender
 * @property string $query Text of the query (up to 256 characters)
 * @property string $offset Offset of the results to be returned, can be controlled by the bot
 * @property string $chat_type Optional. Type of the chat from which the inline query was sent. Can be either “sender” for a private chat with the inline query sender, “private”, “group”, “supergroup”, or “channel”. The chat type should be always known for requests sent from official clients and most third-party clients, unless the request was sent from a secret chat
 * @property Location $location Optional. Sender location, only for bots that request user location
 *
 * @see https://core.telegram.org/bots/api#inlinequery 
 */
class InlineQuery extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
		'id' => 'string',
		'from' => 'User',
		'query' => 'string',
		'offset' => 'string',
		'chat_type' => 'string',
		'location' => 'Location',
	];
}