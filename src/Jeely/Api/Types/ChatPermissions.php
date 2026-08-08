<?php

namespace Jeely\Api\Types;

/**
 * @class ChatPermissions
 * @description Describes actions that a non-administrator user is allowed to take in a chat.
 *
 * @method bool getCanSendMessages() Optional. True, if the user is allowed to send text messages, rich messages, contacts, giveaways, giveaway winners, invoices, locations and venues
 * @method bool getCanSendAudios() Optional. True, if the user is allowed to send audios
 * @method bool getCanSendDocuments() Optional. True, if the user is allowed to send documents
 * @method bool getCanSendPhotos() Optional. True, if the user is allowed to send photos
 * @method bool getCanSendVideos() Optional. True, if the user is allowed to send videos
 * @method bool getCanSendVideoNotes() Optional. True, if the user is allowed to send video notes
 * @method bool getCanSendVoiceNotes() Optional. True, if the user is allowed to send voice notes
 * @method bool getCanSendPolls() Optional. True, if the user is allowed to send polls and checklists
 * @method bool getCanSendOtherMessages() Optional. True, if the user is allowed to send animations, games, stickers and use inline bots
 * @method bool getCanAddWebPagePreviews() Optional. True, if the user is allowed to add web page previews to their messages
 * @method bool getCanReactToMessages() Optional. True, if the user is allowed to react to messages. If omitted, defaults to the value of can_send_messages.
 * @method bool getCanEditTag() Optional. True, if the user is allowed to edit their own tag. If omitted, defaults to the value of can_pin_messages.
 * @method bool getCanChangeInfo() Optional. True, if the user is allowed to change the chat title, photo and other settings. Ignored in public supergroups.
 * @method bool getCanInviteUsers() Optional. True, if the user is allowed to invite new users to the chat
 * @method bool getCanPinMessages() Optional. True, if the user is allowed to pin messages. Ignored in public supergroups.
 * @method bool getCanManageTopics() Optional. True, if the user is allowed to create forum topics. If omitted, defaults to the value of can_pin_messages.
 *
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
 *
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
 *
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
 *
 * @property bool $can_send_messages Optional. True, if the user is allowed to send text messages, rich messages, contacts, giveaways, giveaway winners, invoices, locations and venues
 * @property bool $can_send_audios Optional. True, if the user is allowed to send audios
 * @property bool $can_send_documents Optional. True, if the user is allowed to send documents
 * @property bool $can_send_photos Optional. True, if the user is allowed to send photos
 * @property bool $can_send_videos Optional. True, if the user is allowed to send videos
 * @property bool $can_send_video_notes Optional. True, if the user is allowed to send video notes
 * @property bool $can_send_voice_notes Optional. True, if the user is allowed to send voice notes
 * @property bool $can_send_polls Optional. True, if the user is allowed to send polls and checklists
 * @property bool $can_send_other_messages Optional. True, if the user is allowed to send animations, games, stickers and use inline bots
 * @property bool $can_add_web_page_previews Optional. True, if the user is allowed to add web page previews to their messages
 * @property bool $can_react_to_messages Optional. True, if the user is allowed to react to messages. If omitted, defaults to the value of can_send_messages.
 * @property bool $can_edit_tag Optional. True, if the user is allowed to edit their own tag. If omitted, defaults to the value of can_pin_messages.
 * @property bool $can_change_info Optional. True, if the user is allowed to change the chat title, photo and other settings. Ignored in public supergroups.
 * @property bool $can_invite_users Optional. True, if the user is allowed to invite new users to the chat
 * @property bool $can_pin_messages Optional. True, if the user is allowed to pin messages. Ignored in public supergroups.
 * @property bool $can_manage_topics Optional. True, if the user is allowed to create forum topics. If omitted, defaults to the value of can_pin_messages.
 *
 * @see https://core.telegram.org/bots/api#chatpermissions
 */
class ChatPermissions extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
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
    ];
}
