<?php

namespace Jeely\TL\Types;

use Jeely\LazyUpdates;


/**
 * @class ChatAdministratorRights
 * @description Represents the rights of an administrator in a chat.
 *
 * @method bool getIsAnonymous() True, if the user's presence in the chat is hidden
 * @method bool getCanManageChat() True, if the administrator can access the chat event log, chat statistics, message statistics in channels, see channel members, see anonymous administrators in supergroups and ignore slow mode. Implied by any other administrator privilege
 * @method bool getCanDeleteMessages() True, if the administrator can delete messages of other users
 * @method bool getCanManageVideoChats() True, if the administrator can manage video chats
 * @method bool getCanRestrictMembers() True, if the administrator can restrict, ban or unban chat members
 * @method bool getCanPromoteMembers() True, if the administrator can add new administrators with a subset of their own privileges or demote administrators that he has promoted, directly or indirectly (promoted by administrators that were appointed by the user)
 * @method bool getCanChangeInfo() True, if the user is allowed to change the chat title, photo and other settings
 * @method bool getCanInviteUsers() True, if the user is allowed to invite new users to the chat
 * @method bool getCanPostMessages() Optional. True, if the administrator can post in the channel;
 * channels only
 * @method bool getCanEditMessages() Optional. True, if the administrator can edit messages of other users and can pin messages;
 * channels only
 * @method bool getCanPinMessages() Optional. True, if the user is allowed to pin messages;
 * groups and supergroups only
 *
 * @method bool isIsAnonymous()
 * @method bool isCanManageChat()
 * @method bool isCanDeleteMessages()
 * @method bool isCanManageVideoChats()
 * @method bool isCanRestrictMembers()
 * @method bool isCanPromoteMembers()
 * @method bool isCanChangeInfo()
 * @method bool isCanInviteUsers()
 * @method bool isCanPostMessages()
 * @method bool isCanEditMessages()
 * @method bool isCanPinMessages()
 *
 * @method $this setIsAnonymous()
 * @method $this setCanManageChat()
 * @method $this setCanDeleteMessages()
 * @method $this setCanManageVideoChats()
 * @method $this setCanRestrictMembers()
 * @method $this setCanPromoteMembers()
 * @method $this setCanChangeInfo()
 * @method $this setCanInviteUsers()
 * @method $this setCanPostMessages()
 * @method $this setCanEditMessages()
 * @method $this setCanPinMessages()
 *
 * @method $this unsetIsAnonymous()
 * @method $this unsetCanManageChat()
 * @method $this unsetCanDeleteMessages()
 * @method $this unsetCanManageVideoChats()
 * @method $this unsetCanRestrictMembers()
 * @method $this unsetCanPromoteMembers()
 * @method $this unsetCanChangeInfo()
 * @method $this unsetCanInviteUsers()
 * @method $this unsetCanPostMessages()
 * @method $this unsetCanEditMessages()
 * @method $this unsetCanPinMessages()
 *
 * @property bool $is_anonymous True, if the user's presence in the chat is hidden
 * @property bool $can_manage_chat True, if the administrator can access the chat event log, chat statistics, message statistics in channels, see channel members, see anonymous administrators in supergroups and ignore slow mode. Implied by any other administrator privilege
 * @property bool $can_delete_messages True, if the administrator can delete messages of other users
 * @property bool $can_manage_video_chats True, if the administrator can manage video chats
 * @property bool $can_restrict_members True, if the administrator can restrict, ban or unban chat members
 * @property bool $can_promote_members True, if the administrator can add new administrators with a subset of their own privileges or demote administrators that he has promoted, directly or indirectly (promoted by administrators that were appointed by the user)
 * @property bool $can_change_info True, if the user is allowed to change the chat title, photo and other settings
 * @property bool $can_invite_users True, if the user is allowed to invite new users to the chat
 * @property bool $can_post_messages Optional. True, if the administrator can post in the channel; channels only
 * @property bool $can_edit_messages Optional. True, if the administrator can edit messages of other users and can pin messages; channels only
 * @property bool $can_pin_messages Optional. True, if the user is allowed to pin messages; groups and supergroups only
 *
 * @see https://core.telegram.org/bots/api#chatadministratorrights
 */
class ChatAdministratorRights extends LazyUpdates
{
    const JSON_PROPERTY_MAP = [
        'is_anonymous' => 'bool',
        'can_manage_chat' => 'bool',
        'can_delete_messages' => 'bool',
        'can_manage_video_chats' => 'bool',
        'can_restrict_members' => 'bool',
        'can_promote_members' => 'bool',
        'can_change_info' => 'bool',
        'can_invite_users' => 'bool',
        'can_post_messages' => 'bool',
        'can_edit_messages' => 'bool',
        'can_pin_messages' => 'bool',
    ];
}