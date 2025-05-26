<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class ChatMemberAdministrator
* @description Represents a chat member that has some additional privileges.
*
* @property	string $status The member's status in the chat, always “administrator”
* @method	string getStatus() The member's status in the chat, always “administrator”
* @method	bool isStatus()
* @method	$this setStatus()
* @method	$this unsetStatus()

* @property	User $user Information about the user
* @method	User getUser() Information about the user
* @method	bool isUser()
* @method	$this setUser()
* @method	$this unsetUser()

* @property	bool $can_be_edited True, if the bot is allowed to edit administrator privileges of that user
* @method	bool getCanBeEdited() True, if the bot is allowed to edit administrator privileges of that user
* @method	bool isCanBeEdited()
* @method	$this setCanBeEdited()
* @method	$this unsetCanBeEdited()

* @property	bool $is_anonymous True, if the user's presence in the chat is hidden
* @method	bool getIsAnonymous() True, if the user's presence in the chat is hidden
* @method	bool isIsAnonymous()
* @method	$this setIsAnonymous()
* @method	$this unsetIsAnonymous()

* @property	bool $can_manage_chat True, if the administrator can access the chat event log, get boost list, see hidden supergroup and channel members, report spam messages and ignore slow mode. Implied by any other administrator privilege.
* @method	bool getCanManageChat() True, if the administrator can access the chat event log, get boost list, see hidden supergroup and channel members, report spam messages and ignore slow mode. Implied by any other administrator privilege.
* @method	bool isCanManageChat()
* @method	$this setCanManageChat()
* @method	$this unsetCanManageChat()

* @property	bool $can_delete_messages True, if the administrator can delete messages of other users
* @method	bool getCanDeleteMessages() True, if the administrator can delete messages of other users
* @method	bool isCanDeleteMessages()
* @method	$this setCanDeleteMessages()
* @method	$this unsetCanDeleteMessages()

* @property	bool $can_manage_video_chats True, if the administrator can manage video chats
* @method	bool getCanManageVideoChats() True, if the administrator can manage video chats
* @method	bool isCanManageVideoChats()
* @method	$this setCanManageVideoChats()
* @method	$this unsetCanManageVideoChats()

* @property	bool $can_restrict_members True, if the administrator can restrict, ban or unban chat members, or access supergroup statistics
* @method	bool getCanRestrictMembers() True, if the administrator can restrict, ban or unban chat members, or access supergroup statistics
* @method	bool isCanRestrictMembers()
* @method	$this setCanRestrictMembers()
* @method	$this unsetCanRestrictMembers()

* @property	bool $can_promote_members True, if the administrator can add new administrators with a subset of their own privileges or demote administrators that they have promoted, directly or indirectly (promoted by administrators that were appointed by the user)
* @method	bool getCanPromoteMembers() True, if the administrator can add new administrators with a subset of their own privileges or demote administrators that they have promoted, directly or indirectly (promoted by administrators that were appointed by the user)
* @method	bool isCanPromoteMembers()
* @method	$this setCanPromoteMembers()
* @method	$this unsetCanPromoteMembers()

* @property	bool $can_change_info True, if the user is allowed to change the chat title, photo and other settings
* @method	bool getCanChangeInfo() True, if the user is allowed to change the chat title, photo and other settings
* @method	bool isCanChangeInfo()
* @method	$this setCanChangeInfo()
* @method	$this unsetCanChangeInfo()

* @property	bool $can_invite_users True, if the user is allowed to invite new users to the chat
* @method	bool getCanInviteUsers() True, if the user is allowed to invite new users to the chat
* @method	bool isCanInviteUsers()
* @method	$this setCanInviteUsers()
* @method	$this unsetCanInviteUsers()

* @property	bool $can_post_stories True, if the administrator can post stories to the chat
* @method	bool getCanPostStories() True, if the administrator can post stories to the chat
* @method	bool isCanPostStories()
* @method	$this setCanPostStories()
* @method	$this unsetCanPostStories()

* @property	bool $can_edit_stories True, if the administrator can edit stories posted by other users, post stories to the chat page, pin chat stories, and access the chat's story archive
* @method	bool getCanEditStories() True, if the administrator can edit stories posted by other users, post stories to the chat page, pin chat stories, and access the chat's story archive
* @method	bool isCanEditStories()
* @method	$this setCanEditStories()
* @method	$this unsetCanEditStories()

* @property	bool $can_delete_stories True, if the administrator can delete stories posted by other users
* @method	bool getCanDeleteStories() True, if the administrator can delete stories posted by other users
* @method	bool isCanDeleteStories()
* @method	$this setCanDeleteStories()
* @method	$this unsetCanDeleteStories()

* @property	bool $can_post_messages Optional. True, if the administrator can post messages in the channel, or access channel statistics; for channels only
* @method	bool getCanPostMessages() Optional. True, if the administrator can post messages in the channel, or access channel statistics; for channels only
* @method	bool isCanPostMessages()
* @method	$this setCanPostMessages()
* @method	$this unsetCanPostMessages()

* @property	bool $can_edit_messages Optional. True, if the administrator can edit messages of other users and can pin messages; for channels only
* @method	bool getCanEditMessages() Optional. True, if the administrator can edit messages of other users and can pin messages; for channels only
* @method	bool isCanEditMessages()
* @method	$this setCanEditMessages()
* @method	$this unsetCanEditMessages()

* @property	bool $can_pin_messages Optional. True, if the user is allowed to pin messages; for groups and supergroups only
* @method	bool getCanPinMessages() Optional. True, if the user is allowed to pin messages; for groups and supergroups only
* @method	bool isCanPinMessages()
* @method	$this setCanPinMessages()
* @method	$this unsetCanPinMessages()

* @property	bool $can_manage_topics Optional. True, if the user is allowed to create, rename, close, and reopen forum topics; for supergroups only
* @method	bool getCanManageTopics() Optional. True, if the user is allowed to create, rename, close, and reopen forum topics; for supergroups only
* @method	bool isCanManageTopics()
* @method	$this setCanManageTopics()
* @method	$this unsetCanManageTopics()

* @property	string $custom_title Optional. Custom title for this user
* @method	string getCustomTitle() Optional. Custom title for this user
* @method	bool isCustomTitle()
* @method	$this setCustomTitle()
* @method	$this unsetCustomTitle()

*/

class ChatMemberAdministrator extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'status'=> 'string',
		'user'=> 'User',
		'can_be_edited'=> 'bool',
		'is_anonymous'=> 'bool',
		'can_manage_chat'=> 'bool',
		'can_delete_messages'=> 'bool',
		'can_manage_video_chats'=> 'bool',
		'can_restrict_members'=> 'bool',
		'can_promote_members'=> 'bool',
		'can_change_info'=> 'bool',
		'can_invite_users'=> 'bool',
		'can_post_stories'=> 'bool',
		'can_edit_stories'=> 'bool',
		'can_delete_stories'=> 'bool',
		'can_post_messages'=> 'bool',
		'can_edit_messages'=> 'bool',
		'can_pin_messages'=> 'bool',
		'can_manage_topics'=> 'bool',
		'custom_title'=> 'string',
	];

}