<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class PromoteChatMember
* @description Use this method to promote or demote a user in a supergroup or a channel. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Pass False for all boolean parameters to demote a user. Returns True on success.
*
*
* @param	int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
* @param	int $user_id Unique identifier of the target user
* @param	bool $is_anonymous Pass True if the administrator's presence in the chat is hidden
* @param	bool $can_manage_chat Pass True if the administrator can access the chat event log, get boost list, see hidden supergroup and channel members, report spam messages and ignore slow mode. Implied by any other administrator privilege.
* @param	bool $can_delete_messages Pass True if the administrator can delete messages of other users
* @param	bool $can_manage_video_chats Pass True if the administrator can manage video chats
* @param	bool $can_restrict_members Pass True if the administrator can restrict, ban or unban chat members, or access supergroup statistics
* @param	bool $can_promote_members Pass True if the administrator can add new administrators with a subset of their own privileges or demote administrators that they have promoted, directly or indirectly (promoted by administrators that were appointed by him)
* @param	bool $can_change_info Pass True if the administrator can change chat title, photo and other settings
* @param	bool $can_invite_users Pass True if the administrator can invite new users to the chat
* @param	bool $can_post_stories Pass True if the administrator can post stories to the chat
* @param	bool $can_edit_stories Pass True if the administrator can edit stories posted by other users, post stories to the chat page, pin chat stories, and access the chat's story archive
* @param	bool $can_delete_stories Pass True if the administrator can delete stories posted by other users
* @param	bool $can_post_messages Pass True if the administrator can post messages in the channel, or access channel statistics; for channels only
* @param	bool $can_edit_messages Pass True if the administrator can edit messages of other users and can pin messages; for channels only
* @param	bool $can_pin_messages Pass True if the administrator can pin messages; for supergroups only
* @param	bool $can_manage_topics Pass True if the user is allowed to create, rename, close, and reopen forum topics; for supergroups only
*
*
* @property	int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
* @property	int $user_id Unique identifier of the target user
* @property	bool $is_anonymous Pass True if the administrator's presence in the chat is hidden
* @property	bool $can_manage_chat Pass True if the administrator can access the chat event log, get boost list, see hidden supergroup and channel members, report spam messages and ignore slow mode. Implied by any other administrator privilege.
* @property	bool $can_delete_messages Pass True if the administrator can delete messages of other users
* @property	bool $can_manage_video_chats Pass True if the administrator can manage video chats
* @property	bool $can_restrict_members Pass True if the administrator can restrict, ban or unban chat members, or access supergroup statistics
* @property	bool $can_promote_members Pass True if the administrator can add new administrators with a subset of their own privileges or demote administrators that they have promoted, directly or indirectly (promoted by administrators that were appointed by him)
* @property	bool $can_change_info Pass True if the administrator can change chat title, photo and other settings
* @property	bool $can_invite_users Pass True if the administrator can invite new users to the chat
* @property	bool $can_post_stories Pass True if the administrator can post stories to the chat
* @property	bool $can_edit_stories Pass True if the administrator can edit stories posted by other users, post stories to the chat page, pin chat stories, and access the chat's story archive
* @property	bool $can_delete_stories Pass True if the administrator can delete stories posted by other users
* @property	bool $can_post_messages Pass True if the administrator can post messages in the channel, or access channel statistics; for channels only
* @property	bool $can_edit_messages Pass True if the administrator can edit messages of other users and can pin messages; for channels only
* @property	bool $can_pin_messages Pass True if the administrator can pin messages; for supergroups only
* @property	bool $can_manage_topics Pass True if the user is allowed to create, rename, close, and reopen forum topics; for supergroups only
*
*/

#[Casts(['bool'])]
class PromoteChatMember extends MethodDefinition implements MethodDefinitionInterface
{

}