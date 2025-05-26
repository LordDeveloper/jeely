<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class ChatMemberRestricted
* @description Represents a chat member that is under certain restrictions in the chat. Supergroups only.
*
* @property	string $status The member's status in the chat, always “restricted”
* @method	string getStatus() The member's status in the chat, always “restricted”
* @method	bool isStatus()
* @method	$this setStatus()
* @method	$this unsetStatus()

* @property	User $user Information about the user
* @method	User getUser() Information about the user
* @method	bool isUser()
* @method	$this setUser()
* @method	$this unsetUser()

* @property	bool $is_member True, if the user is a member of the chat at the moment of the request
* @method	bool getIsMember() True, if the user is a member of the chat at the moment of the request
* @method	bool isIsMember()
* @method	$this setIsMember()
* @method	$this unsetIsMember()

* @property	bool $can_send_messages True, if the user is allowed to send text messages, contacts, giveaways, giveaway winners, invoices, locations and venues
* @method	bool getCanSendMessages() True, if the user is allowed to send text messages, contacts, giveaways, giveaway winners, invoices, locations and venues
* @method	bool isCanSendMessages()
* @method	$this setCanSendMessages()
* @method	$this unsetCanSendMessages()

* @property	bool $can_send_audios True, if the user is allowed to send audios
* @method	bool getCanSendAudios() True, if the user is allowed to send audios
* @method	bool isCanSendAudios()
* @method	$this setCanSendAudios()
* @method	$this unsetCanSendAudios()

* @property	bool $can_send_documents True, if the user is allowed to send documents
* @method	bool getCanSendDocuments() True, if the user is allowed to send documents
* @method	bool isCanSendDocuments()
* @method	$this setCanSendDocuments()
* @method	$this unsetCanSendDocuments()

* @property	bool $can_send_photos True, if the user is allowed to send photos
* @method	bool getCanSendPhotos() True, if the user is allowed to send photos
* @method	bool isCanSendPhotos()
* @method	$this setCanSendPhotos()
* @method	$this unsetCanSendPhotos()

* @property	bool $can_send_videos True, if the user is allowed to send videos
* @method	bool getCanSendVideos() True, if the user is allowed to send videos
* @method	bool isCanSendVideos()
* @method	$this setCanSendVideos()
* @method	$this unsetCanSendVideos()

* @property	bool $can_send_video_notes True, if the user is allowed to send video notes
* @method	bool getCanSendVideoNotes() True, if the user is allowed to send video notes
* @method	bool isCanSendVideoNotes()
* @method	$this setCanSendVideoNotes()
* @method	$this unsetCanSendVideoNotes()

* @property	bool $can_send_voice_notes True, if the user is allowed to send voice notes
* @method	bool getCanSendVoiceNotes() True, if the user is allowed to send voice notes
* @method	bool isCanSendVoiceNotes()
* @method	$this setCanSendVoiceNotes()
* @method	$this unsetCanSendVoiceNotes()

* @property	bool $can_send_polls True, if the user is allowed to send polls
* @method	bool getCanSendPolls() True, if the user is allowed to send polls
* @method	bool isCanSendPolls()
* @method	$this setCanSendPolls()
* @method	$this unsetCanSendPolls()

* @property	bool $can_send_other_messages True, if the user is allowed to send animations, games, stickers and use inline bots
* @method	bool getCanSendOtherMessages() True, if the user is allowed to send animations, games, stickers and use inline bots
* @method	bool isCanSendOtherMessages()
* @method	$this setCanSendOtherMessages()
* @method	$this unsetCanSendOtherMessages()

* @property	bool $can_add_web_page_previews True, if the user is allowed to add web page previews to their messages
* @method	bool getCanAddWebPagePreviews() True, if the user is allowed to add web page previews to their messages
* @method	bool isCanAddWebPagePreviews()
* @method	$this setCanAddWebPagePreviews()
* @method	$this unsetCanAddWebPagePreviews()

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

* @property	bool $can_pin_messages True, if the user is allowed to pin messages
* @method	bool getCanPinMessages() True, if the user is allowed to pin messages
* @method	bool isCanPinMessages()
* @method	$this setCanPinMessages()
* @method	$this unsetCanPinMessages()

* @property	bool $can_manage_topics True, if the user is allowed to create forum topics
* @method	bool getCanManageTopics() True, if the user is allowed to create forum topics
* @method	bool isCanManageTopics()
* @method	$this setCanManageTopics()
* @method	$this unsetCanManageTopics()

* @property	int $until_date Date when restrictions will be lifted for this user; Unix time. If 0, then the user is restricted forever
* @method	int getUntilDate() Date when restrictions will be lifted for this user; Unix time. If 0, then the user is restricted forever
* @method	bool isUntilDate()
* @method	$this setUntilDate()
* @method	$this unsetUntilDate()

*/

class ChatMemberRestricted extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'status'=> 'string',
		'user'=> 'User',
		'is_member'=> 'bool',
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
		'until_date'=> 'int',
	];

}