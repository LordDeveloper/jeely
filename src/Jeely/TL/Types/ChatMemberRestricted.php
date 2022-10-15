<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class ChatMemberRestricted
 * @description Represents a chat member that is under certain restrictions in the chat. Supergroups only.
 *
 * @method string getStatus() The member's status in the chat, always “restricted”
 * @method User getUser() Information about the user
 * @method bool getIsMember() True, if the user is a member of the chat at the moment of the request
 * @method bool getCanChangeInfo() True, if the user is allowed to change the chat title, photo and other settings
 * @method bool getCanInviteUsers() True, if the user is allowed to invite new users to the chat
 * @method bool getCanPinMessages() True, if the user is allowed to pin messages
 * @method bool getCanSendMessages() True, if the user is allowed to send text messages, contacts, locations and venues
 * @method bool getCanSendMediaMessages() True, if the user is allowed to send audios, documents, photos, videos, video notes and voice notes
 * @method bool getCanSendPolls() True, if the user is allowed to send polls
 * @method bool getCanSendOtherMessages() True, if the user is allowed to send animations, games, stickers and use inline bots
 * @method bool getCanAddWebPagePreviews() True, if the user is allowed to add web page previews to their messages
 * @method int getUntilDate() Date when restrictions will be lifted for this user;
unix time. If 0, then the user is restricted forever
 *
 * @method bool isStatus()
 * @method bool isUser()
 * @method bool isIsMember()
 * @method bool isCanChangeInfo()
 * @method bool isCanInviteUsers()
 * @method bool isCanPinMessages()
 * @method bool isCanSendMessages()
 * @method bool isCanSendMediaMessages()
 * @method bool isCanSendPolls()
 * @method bool isCanSendOtherMessages()
 * @method bool isCanAddWebPagePreviews()
 * @method bool isUntilDate()
 *
 * @method $this setStatus()
 * @method $this setUser()
 * @method $this setIsMember()
 * @method $this setCanChangeInfo()
 * @method $this setCanInviteUsers()
 * @method $this setCanPinMessages()
 * @method $this setCanSendMessages()
 * @method $this setCanSendMediaMessages()
 * @method $this setCanSendPolls()
 * @method $this setCanSendOtherMessages()
 * @method $this setCanAddWebPagePreviews()
 * @method $this setUntilDate()
 *
 * @method $this unsetStatus()
 * @method $this unsetUser()
 * @method $this unsetIsMember()
 * @method $this unsetCanChangeInfo()
 * @method $this unsetCanInviteUsers()
 * @method $this unsetCanPinMessages()
 * @method $this unsetCanSendMessages()
 * @method $this unsetCanSendMediaMessages()
 * @method $this unsetCanSendPolls()
 * @method $this unsetCanSendOtherMessages()
 * @method $this unsetCanAddWebPagePreviews()
 * @method $this unsetUntilDate()
 *
 * @property string $status The member's status in the chat, always “restricted”
 * @property User $user Information about the user
 * @property bool $is_member True, if the user is a member of the chat at the moment of the request
 * @property bool $can_change_info True, if the user is allowed to change the chat title, photo and other settings
 * @property bool $can_invite_users True, if the user is allowed to invite new users to the chat
 * @property bool $can_pin_messages True, if the user is allowed to pin messages
 * @property bool $can_send_messages True, if the user is allowed to send text messages, contacts, locations and venues
 * @property bool $can_send_media_messages True, if the user is allowed to send audios, documents, photos, videos, video notes and voice notes
 * @property bool $can_send_polls True, if the user is allowed to send polls
 * @property bool $can_send_other_messages True, if the user is allowed to send animations, games, stickers and use inline bots
 * @property bool $can_add_web_page_previews True, if the user is allowed to add web page previews to their messages
 * @property int $until_date Date when restrictions will be lifted for this user; unix time. If 0, then the user is restricted forever
 *
 * @see https://core.telegram.org/bots/api#chatmemberrestricted
 */
class ChatMemberRestricted extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'status' => 'string',
        'user' => 'User',
        'is_member' => 'bool',
        'can_change_info' => 'bool',
        'can_invite_users' => 'bool',
        'can_pin_messages' => 'bool',
        'can_send_messages' => 'bool',
        'can_send_media_messages' => 'bool',
        'can_send_polls' => 'bool',
        'can_send_other_messages' => 'bool',
        'can_add_web_page_previews' => 'bool',
        'until_date' => 'int',
    ];
}