<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class ChatJoinRequest
* @description Represents a join request sent to a chat.
*
* @property	Chat $chat Chat to which the request was sent
* @method	Chat getChat() Chat to which the request was sent
* @method	bool isChat()
* @method	$this setChat()
* @method	$this unsetChat()

* @property	User $from User that sent the join request
* @method	User getFrom() User that sent the join request
* @method	bool isFrom()
* @method	$this setFrom()
* @method	$this unsetFrom()

* @property	int $user_chat_id Identifier of a private chat with the user who sent the join request. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. The bot can use this identifier for 5 minutes to send messages until the join request is processed, assuming no other administrator contacted the user.
* @method	int getUserChatId() Identifier of a private chat with the user who sent the join request. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. The bot can use this identifier for 5 minutes to send messages until the join request is processed, assuming no other administrator contacted the user.
* @method	bool isUserChatId()
* @method	$this setUserChatId()
* @method	$this unsetUserChatId()

* @property	int $date Date the request was sent in Unix time
* @method	int getDate() Date the request was sent in Unix time
* @method	bool isDate()
* @method	$this setDate()
* @method	$this unsetDate()

* @property	string $bio Optional. Bio of the user.
* @method	string getBio() Optional. Bio of the user.
* @method	bool isBio()
* @method	$this setBio()
* @method	$this unsetBio()

* @property	ChatInviteLink $invite_link Optional. Chat invite link that was used by the user to send the join request
* @method	ChatInviteLink getInviteLink() Optional. Chat invite link that was used by the user to send the join request
* @method	bool isInviteLink()
* @method	$this setInviteLink()
* @method	$this unsetInviteLink()

*/

class ChatJoinRequest extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'chat'=> 'Chat',
		'from'=> 'User',
		'user_chat_id'=> 'int',
		'date'=> 'int',
		'bio'=> 'string',
		'invite_link'=> 'ChatInviteLink',
	];

}