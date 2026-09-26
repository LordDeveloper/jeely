<?php

namespace Jeely\Api\Types;

/**
 * @class ChatMemberRestricted
 * @description Represents a chat member that is under certain restrictions in the chat. Supergroups only.
 *
 * @method string getStatus() The member's status in the chat, always “restricted”
 * @method string getTag() Optional. Tag of the member
 * @method User getUser() Information about the user
 * @method bool getIsMember() True, if the user is a member of the chat at the moment of the request
 * @method bool getCanSendMessages() True, if the user is allowed to send text messages, rich messages, contacts, giveaways, giveaway winners, invoices, locations and venues
 * @method bool getCanSendAudios() True, if the user is allowed to send audios
 * @method bool getCanSendDocuments() True, if the user is allowed to send documents
 * @method bool getCanSendPhotos() True, if the user is allowed to send photos
 * @method bool getCanSendVideos() True, if the user is allowed to send videos
 * @method bool getCanSendVideoNotes() True, if the user is allowed to send video notes
 * @method bool getCanSendVoiceNotes() True, if the user is allowed to send voice notes
 * @method bool getCanSendPolls() True, if the user is allowed to send polls and checklists
 * @method bool getCanSendOtherMessages() True, if the user is allowed to send animations, games, stickers and use inline bots
 * @method bool getCanAddWebPagePreviews() True, if the user is allowed to add web page previews to their messages
 * @method bool getCanReactToMessages() True, if the user is allowed to react to messages
 * @method bool getCanEditTag() True, if the user is allowed to edit their own tag
 * @method bool getCanChangeInfo() True, if the user is allowed to change the chat title, photo and other settings
 * @method bool getCanInviteUsers() True, if the user is allowed to invite new users to the chat
 * @method bool getCanPinMessages() True, if the user is allowed to pin messages
 * @method bool getCanManageTopics() True, if the user is allowed to create forum topics
 * @method int getUntilDate() Date when restrictions will be lifted for this user; Unix time. If 0, then the user is restricted forever.
 *
 * @method bool isStatus()
 * @method bool isTag()
 * @method bool isUser()
 * @method bool isIsMember()
 * @method bool isCanSendMessages()
 * @method bool isCanSendAudios()
 * @method bool isCanSendDocuments()
 * @method bool isCanSendPhotos()
 * @method bool isCanSendVideos()
 * @method bool isCanSendVideoNotes()
 * @method bool isCanSendVoiceNotes()
 * @method bool isCanSendPolls()
 * @method bool isCanSendOtherMessages()
 * @method bool isCanAddWebPagePreviews()
 * @method bool isCanReactToMessages()
 * @method bool isCanEditTag()
 * @method bool isCanChangeInfo()
 * @method bool isCanInviteUsers()
 * @method bool isCanPinMessages()
 * @method bool isCanManageTopics()
 * @method bool isUntilDate()
 *
 * @method $this setStatus()
 * @method $this setTag()
 * @method $this setUser()
 * @method $this setIsMember()
 * @method $this setCanSendMessages()
 * @method $this setCanSendAudios()
 * @method $this setCanSendDocuments()
 * @method $this setCanSendPhotos()
 * @method $this setCanSendVideos()
 * @method $this setCanSendVideoNotes()
 * @method $this setCanSendVoiceNotes()
 * @method $this setCanSendPolls()
 * @method $this setCanSendOtherMessages()
 * @method $this setCanAddWebPagePreviews()
 * @method $this setCanReactToMessages()
 * @method $this setCanEditTag()
 * @method $this setCanChangeInfo()
 * @method $this setCanInviteUsers()
 * @method $this setCanPinMessages()
 * @method $this setCanManageTopics()
 * @method $this setUntilDate()
 *
 * @method $this unsetStatus()
 * @method $this unsetTag()
 * @method $this unsetUser()
 * @method $this unsetIsMember()
 * @method $this unsetCanSendMessages()
 * @method $this unsetCanSendAudios()
 * @method $this unsetCanSendDocuments()
 * @method $this unsetCanSendPhotos()
 * @method $this unsetCanSendVideos()
 * @method $this unsetCanSendVideoNotes()
 * @method $this unsetCanSendVoiceNotes()
 * @method $this unsetCanSendPolls()
 * @method $this unsetCanSendOtherMessages()
 * @method $this unsetCanAddWebPagePreviews()
 * @method $this unsetCanReactToMessages()
 * @method $this unsetCanEditTag()
 * @method $this unsetCanChangeInfo()
 * @method $this unsetCanInviteUsers()
 * @method $this unsetCanPinMessages()
 * @method $this unsetCanManageTopics()
 * @method $this unsetUntilDate()
 *
 * @property string $status The member's status in the chat, always “restricted”
 * @property string $tag Optional. Tag of the member
 * @property User $user Information about the user
 * @property bool $is_member True, if the user is a member of the chat at the moment of the request
 * @property bool $can_send_messages True, if the user is allowed to send text messages, rich messages, contacts, giveaways, giveaway winners, invoices, locations and venues
 * @property bool $can_send_audios True, if the user is allowed to send audios
 * @property bool $can_send_documents True, if the user is allowed to send documents
 * @property bool $can_send_photos True, if the user is allowed to send photos
 * @property bool $can_send_videos True, if the user is allowed to send videos
 * @property bool $can_send_video_notes True, if the user is allowed to send video notes
 * @property bool $can_send_voice_notes True, if the user is allowed to send voice notes
 * @property bool $can_send_polls True, if the user is allowed to send polls and checklists
 * @property bool $can_send_other_messages True, if the user is allowed to send animations, games, stickers and use inline bots
 * @property bool $can_add_web_page_previews True, if the user is allowed to add web page previews to their messages
 * @property bool $can_react_to_messages True, if the user is allowed to react to messages
 * @property bool $can_edit_tag True, if the user is allowed to edit their own tag
 * @property bool $can_change_info True, if the user is allowed to change the chat title, photo and other settings
 * @property bool $can_invite_users True, if the user is allowed to invite new users to the chat
 * @property bool $can_pin_messages True, if the user is allowed to pin messages
 * @property bool $can_manage_topics True, if the user is allowed to create forum topics
 * @property int $until_date Date when restrictions will be lifted for this user; Unix time. If 0, then the user is restricted forever.
 *
 * @see https://core.telegram.org/bots/api#chatmemberrestricted
 */
class ChatMemberRestricted extends ChatMember
{
    public const JSON_PROPERTY_MAP = [
        'status' => 'string',
        'tag' => 'string',
        'user' => 'User',
        'is_member' => 'bool',
        'can_send_messages' => 'bool',
        'can_send_audios' => 'bool',
        'can_send_documents' => 'bool',
        'can_send_photos' => 'bool',
        'can_send_videos' => 'bool',
        'can_send_video_notes' => 'bool',
        'can_send_voice_notes' => 'bool',
        'can_send_polls' => 'bool',
        'can_send_other_messages' => 'bool',
        'can_add_web_page_previews' => 'bool',
        'can_react_to_messages' => 'bool',
        'can_edit_tag' => 'bool',
        'can_change_info' => 'bool',
        'can_invite_users' => 'bool',
        'can_pin_messages' => 'bool',
        'can_manage_topics' => 'bool',
        'until_date' => 'int',
    ];
}
