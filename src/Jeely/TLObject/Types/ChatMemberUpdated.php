<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class ChatMemberUpdated
* @description This object represents changes in the status of a chat member.
*
* @property	Chat $chat Chat the user belongs to
* @method	Chat getChat() Chat the user belongs to
* @method	bool isChat()
* @method	$this setChat()
* @method	$this unsetChat()

* @property	User $from Performer of the action, which resulted in the change
* @method	User getFrom() Performer of the action, which resulted in the change
* @method	bool isFrom()
* @method	$this setFrom()
* @method	$this unsetFrom()

* @property	int $date Date the change was done in Unix time
* @method	int getDate() Date the change was done in Unix time
* @method	bool isDate()
* @method	$this setDate()
* @method	$this unsetDate()

* @property	ChatMember $old_chat_member Previous information about the chat member
* @method	ChatMember getOldChatMember() Previous information about the chat member
* @method	bool isOldChatMember()
* @method	$this setOldChatMember()
* @method	$this unsetOldChatMember()

* @property	ChatMember $new_chat_member New information about the chat member
* @method	ChatMember getNewChatMember() New information about the chat member
* @method	bool isNewChatMember()
* @method	$this setNewChatMember()
* @method	$this unsetNewChatMember()

* @property	ChatInviteLink $invite_link Optional. Chat invite link, which was used by the user to join the chat; for joining by invite link events only.
* @method	ChatInviteLink getInviteLink() Optional. Chat invite link, which was used by the user to join the chat; for joining by invite link events only.
* @method	bool isInviteLink()
* @method	$this setInviteLink()
* @method	$this unsetInviteLink()

* @property	bool $via_join_request Optional. True, if the user joined the chat after sending a direct join request without using an invite link and being approved by an administrator
* @method	bool getViaJoinRequest() Optional. True, if the user joined the chat after sending a direct join request without using an invite link and being approved by an administrator
* @method	bool isViaJoinRequest()
* @method	$this setViaJoinRequest()
* @method	$this unsetViaJoinRequest()

* @property	bool $via_chat_folder_invite_link Optional. True, if the user joined the chat via a chat folder invite link
* @method	bool getViaChatFolderInviteLink() Optional. True, if the user joined the chat via a chat folder invite link
* @method	bool isViaChatFolderInviteLink()
* @method	$this setViaChatFolderInviteLink()
* @method	$this unsetViaChatFolderInviteLink()

*/

class ChatMemberUpdated extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'chat'=> 'Chat',
		'from'=> 'User',
		'date'=> 'int',
		'old_chat_member'=> 'ChatMember',
		'new_chat_member'=> 'ChatMember',
		'invite_link'=> 'ChatInviteLink',
		'via_join_request'=> 'bool',
		'via_chat_folder_invite_link'=> 'bool',
	];

}