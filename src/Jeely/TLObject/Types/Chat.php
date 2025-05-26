<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class Chat
* @description This object represents a chat.
*
* @property	int $id Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
* @method	int getId() Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
* @method	bool isId()
* @method	$this setId()
* @method	$this unsetId()

* @property	string $type Type of the chat, can be either “private”, “group”, “supergroup” or “channel”
* @method	string getType() Type of the chat, can be either “private”, “group”, “supergroup” or “channel”
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	string $title Optional. Title, for supergroups, channels and group chats
* @method	string getTitle() Optional. Title, for supergroups, channels and group chats
* @method	bool isTitle()
* @method	$this setTitle()
* @method	$this unsetTitle()

* @property	string $username Optional. Username, for private chats, supergroups and channels if available
* @method	string getUsername() Optional. Username, for private chats, supergroups and channels if available
* @method	bool isUsername()
* @method	$this setUsername()
* @method	$this unsetUsername()

* @property	string $first_name Optional. First name of the other party in a private chat
* @method	string getFirstName() Optional. First name of the other party in a private chat
* @method	bool isFirstName()
* @method	$this setFirstName()
* @method	$this unsetFirstName()

* @property	string $last_name Optional. Last name of the other party in a private chat
* @method	string getLastName() Optional. Last name of the other party in a private chat
* @method	bool isLastName()
* @method	$this setLastName()
* @method	$this unsetLastName()

* @property	bool $is_forum Optional. True, if the supergroup chat is a forum (has topics enabled)
* @method	bool getIsForum() Optional. True, if the supergroup chat is a forum (has topics enabled)
* @method	bool isIsForum()
* @method	$this setIsForum()
* @method	$this unsetIsForum()

*/

class Chat extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'id'=> 'int',
		'type'=> 'string',
		'title'=> 'string',
		'username'=> 'string',
		'first_name'=> 'string',
		'last_name'=> 'string',
		'is_forum'=> 'bool',
	];

}