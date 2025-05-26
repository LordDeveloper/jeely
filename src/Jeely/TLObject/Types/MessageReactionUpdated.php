<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class MessageReactionUpdated
* @description This object represents a change of a reaction on a message performed by a user.
*
* @property	Chat $chat The chat containing the message the user reacted to
* @method	Chat getChat() The chat containing the message the user reacted to
* @method	bool isChat()
* @method	$this setChat()
* @method	$this unsetChat()

* @property	int $message_id Unique identifier of the message inside the chat
* @method	int getMessageId() Unique identifier of the message inside the chat
* @method	bool isMessageId()
* @method	$this setMessageId()
* @method	$this unsetMessageId()

* @property	User $user Optional. The user that changed the reaction, if the user isn't anonymous
* @method	User getUser() Optional. The user that changed the reaction, if the user isn't anonymous
* @method	bool isUser()
* @method	$this setUser()
* @method	$this unsetUser()

* @property	Chat $actor_chat Optional. The chat on behalf of which the reaction was changed, if the user is anonymous
* @method	Chat getActorChat() Optional. The chat on behalf of which the reaction was changed, if the user is anonymous
* @method	bool isActorChat()
* @method	$this setActorChat()
* @method	$this unsetActorChat()

* @property	int $date Date of the change in Unix time
* @method	int getDate() Date of the change in Unix time
* @method	bool isDate()
* @method	$this setDate()
* @method	$this unsetDate()

* @property	ReactionType[] $old_reaction Previous list of reaction types that were set by the user
* @method	ReactionType[] getOldReaction() Previous list of reaction types that were set by the user
* @method	bool isOldReaction()
* @method	$this setOldReaction()
* @method	$this unsetOldReaction()

* @property	ReactionType[] $new_reaction New list of reaction types that have been set by the user
* @method	ReactionType[] getNewReaction() New list of reaction types that have been set by the user
* @method	bool isNewReaction()
* @method	$this setNewReaction()
* @method	$this unsetNewReaction()

*/

class MessageReactionUpdated extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'chat'=> 'Chat',
		'message_id'=> 'int',
		'user'=> 'User',
		'actor_chat'=> 'Chat',
		'date'=> 'int',
		'old_reaction'=> 'ReactionType[]',
		'new_reaction'=> 'ReactionType[]',
	];

}