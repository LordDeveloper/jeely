<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class ChatPermissions
* @description Describes actions that a non-administrator user is allowed to take in a chat.
*
* @property	bool $can_send_messages Optional. True, if the user is allowed to send text messages, contacts, giveaways, giveaway winners, invoices, locations and venues
* @method	bool getCanSendMessages() Optional. True, if the user is allowed to send text messages, contacts, giveaways, giveaway winners, invoices, locations and venues
* @method	bool isCanSendMessages()
* @method	$this setCanSendMessages()
* @method	$this unsetCanSendMessages()

* @property	bool $can_send_audios Optional. True, if the user is allowed to send audios
* @method	bool getCanSendAudios() Optional. True, if the user is allowed to send audios
* @method	bool isCanSendAudios()
* @method	$this setCanSendAudios()
* @method	$this unsetCanSendAudios()

* @property	bool $can_send_documents Optional. True, if the user is allowed to send documents
* @method	bool getCanSendDocuments() Optional. True, if the user is allowed to send documents
* @method	bool isCanSendDocuments()
* @method	$this setCanSendDocuments()
* @method	$this unsetCanSendDocuments()

* @property	bool $can_send_photos Optional. True, if the user is allowed to send photos
* @method	bool getCanSendPhotos() Optional. True, if the user is allowed to send photos
* @method	bool isCanSendPhotos()
* @method	$this setCanSendPhotos()
* @method	$this unsetCanSendPhotos()

* @property	bool $can_send_videos Optional. True, if the user is allowed to send videos
* @method	bool getCanSendVideos() Optional. True, if the user is allowed to send videos
* @method	bool isCanSendVideos()
* @method	$this setCanSendVideos()
* @method	$this unsetCanSendVideos()

* @property	bool $can_send_video_notes Optional. True, if the user is allowed to send video notes
* @method	bool getCanSendVideoNotes() Optional. True, if the user is allowed to send video notes
* @method	bool isCanSendVideoNotes()
* @method	$this setCanSendVideoNotes()
* @method	$this unsetCanSendVideoNotes()

* @property	bool $can_send_voice_notes Optional. True, if the user is allowed to send voice notes
* @method	bool getCanSendVoiceNotes() Optional. True, if the user is allowed to send voice notes
* @method	bool isCanSendVoiceNotes()
* @method	$this setCanSendVoiceNotes()
* @method	$this unsetCanSendVoiceNotes()

* @property	bool $can_send_polls Optional. True, if the user is allowed to send polls
* @method	bool getCanSendPolls() Optional. True, if the user is allowed to send polls
* @method	bool isCanSendPolls()
* @method	$this setCanSendPolls()
* @method	$this unsetCanSendPolls()

* @property	bool $can_send_other_messages Optional. True, if the user is allowed to send animations, games, stickers and use inline bots
* @method	bool getCanSendOtherMessages() Optional. True, if the user is allowed to send animations, games, stickers and use inline bots
* @method	bool isCanSendOtherMessages()
* @method	$this setCanSendOtherMessages()
* @method	$this unsetCanSendOtherMessages()

* @property	bool $can_add_web_page_previews Optional. True, if the user is allowed to add web page previews to their messages
* @method	bool getCanAddWebPagePreviews() Optional. True, if the user is allowed to add web page previews to their messages
* @method	bool isCanAddWebPagePreviews()
* @method	$this setCanAddWebPagePreviews()
* @method	$this unsetCanAddWebPagePreviews()

* @property	bool $can_change_info Optional. True, if the user is allowed to change the chat title, photo and other settings. Ignored in public supergroups
* @method	bool getCanChangeInfo() Optional. True, if the user is allowed to change the chat title, photo and other settings. Ignored in public supergroups
* @method	bool isCanChangeInfo()
* @method	$this setCanChangeInfo()
* @method	$this unsetCanChangeInfo()

* @property	bool $can_invite_users Optional. True, if the user is allowed to invite new users to the chat
* @method	bool getCanInviteUsers() Optional. True, if the user is allowed to invite new users to the chat
* @method	bool isCanInviteUsers()
* @method	$this setCanInviteUsers()
* @method	$this unsetCanInviteUsers()

* @property	bool $can_pin_messages Optional. True, if the user is allowed to pin messages. Ignored in public supergroups
* @method	bool getCanPinMessages() Optional. True, if the user is allowed to pin messages. Ignored in public supergroups
* @method	bool isCanPinMessages()
* @method	$this setCanPinMessages()
* @method	$this unsetCanPinMessages()

* @property	bool $can_manage_topics Optional. True, if the user is allowed to create forum topics. If omitted defaults to the value of can_pin_messages
* @method	bool getCanManageTopics() Optional. True, if the user is allowed to create forum topics. If omitted defaults to the value of can_pin_messages
* @method	bool isCanManageTopics()
* @method	$this setCanManageTopics()
* @method	$this unsetCanManageTopics()

*/

class ChatPermissions extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'can_send_messages'=> 'bool',
		'can_send_audios'=> 'bool',
		'can_send_documents'=> 'bool',
		'can_send_photos'=> 'bool',
		'can_send_videos'=> 'bool',
		'can_send_video_notes'=> 'bool',
		'can_send_voice_notes'=> 'bool',
		'can_send_polls'=> 'bool',
		'can_send_other_messages'=> 'bool',
		'can_add_web_page_previews'=> 'bool',
		'can_change_info'=> 'bool',
		'can_invite_users'=> 'bool',
		'can_pin_messages'=> 'bool',
		'can_manage_topics'=> 'bool',
	];

}