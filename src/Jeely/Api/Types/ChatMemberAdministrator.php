<?php

namespace Jeely\Api\Types;

/**
 * @class ChatMemberAdministrator
 * @description Represents a chat member that has some additional privileges.
 *
 * @method string getStatus() The member's status in the chat, always “administrator”
 * @method User getUser() Information about the user
 * @method bool getCanBeEdited() True, if the bot is allowed to edit administrator privileges of that user
 * @method bool getIsAnonymous() True, if the user's presence in the chat is hidden
 * @method bool getCanManageChat() True, if the administrator can access the chat event log, get boost list, see hidden supergroup and channel members, report spam messages, ignore slow mode, and send messages to the chat without paying Telegram Stars. Implied by any other administrator privilege.
 * @method bool getCanDeleteMessages() True, if the administrator can delete messages of other users
 * @method bool getCanManageVideoChats() True, if the administrator can manage video chats
 * @method bool getCanRestrictMembers() True, if the administrator can restrict, ban or unban chat members, or access supergroup statistics
 * @method bool getCanPromoteMembers() True, if the administrator can add new administrators with a subset of their own privileges or demote administrators that they have promoted, directly or indirectly (promoted by administrators that were appointed by the user)
 * @method bool getCanChangeInfo() True, if the user is allowed to change the chat title, photo and other settings
 * @method bool getCanInviteUsers() True, if the user is allowed to invite new users to the chat
 * @method bool getCanPostStories() True, if the administrator can post stories to the chat
 * @method bool getCanEditStories() True, if the administrator can edit stories posted by other users, post stories to the chat page, pin chat stories, and access the chat's story archive
 * @method bool getCanDeleteStories() True, if the administrator can delete stories posted by other users
 * @method bool getCanPostMessages() Optional. True, if the administrator can post messages in the channel, approve suggested posts, or access channel statistics; for channels only
 * @method bool getCanEditMessages() Optional. True, if the administrator can edit messages of other users and can pin messages; for channels only
 * @method bool getCanPinMessages() Optional. True, if the user is allowed to pin messages; for groups and supergroups only
 * @method bool getCanManageTopics() Optional. True, if the user is allowed to create, rename, close, and reopen forum topics; for supergroups only
 * @method bool getCanManageDirectMessages() Optional. True, if the administrator can manage direct messages of the channel and decline suggested posts; for channels only
 * @method bool getCanManageTags() Optional. True, if the administrator can edit the tags of regular members; for groups and supergroups only. If omitted, defaults to the value of can_pin_messages.
 * @method string getCustomTitle() Optional. Custom title for this user
 *
 * @method bool isStatus()
 * @method bool isUser()
 * @method bool isCanBeEdited()
 * @method bool isIsAnonymous()
 * @method bool isCanManageChat()
 * @method bool isCanDeleteMessages()
 * @method bool isCanManageVideoChats()
 * @method bool isCanRestrictMembers()
 * @method bool isCanPromoteMembers()
 * @method bool isCanChangeInfo()
 * @method bool isCanInviteUsers()
 * @method bool isCanPostStories()
 * @method bool isCanEditStories()
 * @method bool isCanDeleteStories()
 * @method bool isCanPostMessages()
 * @method bool isCanEditMessages()
 * @method bool isCanPinMessages()
 * @method bool isCanManageTopics()
 * @method bool isCanManageDirectMessages()
 * @method bool isCanManageTags()
 * @method bool isCustomTitle()
 *
 * @method $this setStatus()
 * @method $this setUser()
 * @method $this setCanBeEdited()
 * @method $this setIsAnonymous()
 * @method $this setCanManageChat()
 * @method $this setCanDeleteMessages()
 * @method $this setCanManageVideoChats()
 * @method $this setCanRestrictMembers()
 * @method $this setCanPromoteMembers()
 * @method $this setCanChangeInfo()
 * @method $this setCanInviteUsers()
 * @method $this setCanPostStories()
 * @method $this setCanEditStories()
 * @method $this setCanDeleteStories()
 * @method $this setCanPostMessages()
 * @method $this setCanEditMessages()
 * @method $this setCanPinMessages()
 * @method $this setCanManageTopics()
 * @method $this setCanManageDirectMessages()
 * @method $this setCanManageTags()
 * @method $this setCustomTitle()
 *
 * @method $this unsetStatus()
 * @method $this unsetUser()
 * @method $this unsetCanBeEdited()
 * @method $this unsetIsAnonymous()
 * @method $this unsetCanManageChat()
 * @method $this unsetCanDeleteMessages()
 * @method $this unsetCanManageVideoChats()
 * @method $this unsetCanRestrictMembers()
 * @method $this unsetCanPromoteMembers()
 * @method $this unsetCanChangeInfo()
 * @method $this unsetCanInviteUsers()
 * @method $this unsetCanPostStories()
 * @method $this unsetCanEditStories()
 * @method $this unsetCanDeleteStories()
 * @method $this unsetCanPostMessages()
 * @method $this unsetCanEditMessages()
 * @method $this unsetCanPinMessages()
 * @method $this unsetCanManageTopics()
 * @method $this unsetCanManageDirectMessages()
 * @method $this unsetCanManageTags()
 * @method $this unsetCustomTitle()
 *
 * @property string $status The member's status in the chat, always “administrator”
 * @property User $user Information about the user
 * @property bool $can_be_edited True, if the bot is allowed to edit administrator privileges of that user
 * @property bool $is_anonymous True, if the user's presence in the chat is hidden
 * @property bool $can_manage_chat True, if the administrator can access the chat event log, get boost list, see hidden supergroup and channel members, report spam messages, ignore slow mode, and send messages to the chat without paying Telegram Stars. Implied by any other administrator privilege.
 * @property bool $can_delete_messages True, if the administrator can delete messages of other users
 * @property bool $can_manage_video_chats True, if the administrator can manage video chats
 * @property bool $can_restrict_members True, if the administrator can restrict, ban or unban chat members, or access supergroup statistics
 * @property bool $can_promote_members True, if the administrator can add new administrators with a subset of their own privileges or demote administrators that they have promoted, directly or indirectly (promoted by administrators that were appointed by the user)
 * @property bool $can_change_info True, if the user is allowed to change the chat title, photo and other settings
 * @property bool $can_invite_users True, if the user is allowed to invite new users to the chat
 * @property bool $can_post_stories True, if the administrator can post stories to the chat
 * @property bool $can_edit_stories True, if the administrator can edit stories posted by other users, post stories to the chat page, pin chat stories, and access the chat's story archive
 * @property bool $can_delete_stories True, if the administrator can delete stories posted by other users
 * @property bool $can_post_messages Optional. True, if the administrator can post messages in the channel, approve suggested posts, or access channel statistics; for channels only
 * @property bool $can_edit_messages Optional. True, if the administrator can edit messages of other users and can pin messages; for channels only
 * @property bool $can_pin_messages Optional. True, if the user is allowed to pin messages; for groups and supergroups only
 * @property bool $can_manage_topics Optional. True, if the user is allowed to create, rename, close, and reopen forum topics; for supergroups only
 * @property bool $can_manage_direct_messages Optional. True, if the administrator can manage direct messages of the channel and decline suggested posts; for channels only
 * @property bool $can_manage_tags Optional. True, if the administrator can edit the tags of regular members; for groups and supergroups only. If omitted, defaults to the value of can_pin_messages.
 * @property string $custom_title Optional. Custom title for this user
 *
 * @see https://core.telegram.org/bots/api#chatmemberadministrator
 */
class ChatMemberAdministrator extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'status' => 'string',
        'user' => 'User',
        'can_be_edited' => 'bool',
        'is_anonymous' => 'bool',
        'can_manage_chat' => 'bool',
        'can_delete_messages' => 'bool',
        'can_manage_video_chats' => 'bool',
        'can_restrict_members' => 'bool',
        'can_promote_members' => 'bool',
        'can_change_info' => 'bool',
        'can_invite_users' => 'bool',
        'can_post_stories' => 'bool',
        'can_edit_stories' => 'bool',
        'can_delete_stories' => 'bool',
        'can_post_messages' => 'bool',
        'can_edit_messages' => 'bool',
        'can_pin_messages' => 'bool',
        'can_manage_topics' => 'bool',
        'can_manage_direct_messages' => 'bool',
        'can_manage_tags' => 'bool',
        'custom_title' => 'string',
    ];
}
