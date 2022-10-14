<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class ChatPermissions
 * @description Describes actions that a non-administrator user is allowed to take in a chat.
 *
 * @method bool getCanSendMessages() Optional. True, if the user is allowed to send text messages, contacts, locations and venues
 * @method bool getCanSendMediaMessages() Optional. True, if the user is allowed to send audios, documents, photos, videos, video notes and voice notes, implies can_send_messages
 * @method bool getCanSendPolls() Optional. True, if the user is allowed to send polls, implies can_send_messages
 * @method bool getCanSendOtherMessages() Optional. True, if the user is allowed to send animations, games, stickers and use inline bots, implies can_send_media_messages
 * @method bool getCanAddWebPagePreviews() Optional. True, if the user is allowed to add web page previews to their messages, implies can_send_media_messages
 * @method bool getCanChangeInfo() Optional. True, if the user is allowed to change the chat title, photo and other settings. Ignored in public supergroups
 * @method bool getCanInviteUsers() Optional. True, if the user is allowed to invite new users to the chat
 * @method bool getCanPinMessages() Optional. True, if the user is allowed to pin messages. Ignored in public supergroups
 *
 * @method bool isCanSendMessages()
 * @method bool isCanSendMediaMessages()
 * @method bool isCanSendPolls()
 * @method bool isCanSendOtherMessages()
 * @method bool isCanAddWebPagePreviews()
 * @method bool isCanChangeInfo()
 * @method bool isCanInviteUsers()
 * @method bool isCanPinMessages()
 *
 * @method $this setCanSendMessages()
 * @method $this setCanSendMediaMessages()
 * @method $this setCanSendPolls()
 * @method $this setCanSendOtherMessages()
 * @method $this setCanAddWebPagePreviews()
 * @method $this setCanChangeInfo()
 * @method $this setCanInviteUsers()
 * @method $this setCanPinMessages()
 *
 * @method $this unsetCanSendMessages()
 * @method $this unsetCanSendMediaMessages()
 * @method $this unsetCanSendPolls()
 * @method $this unsetCanSendOtherMessages()
 * @method $this unsetCanAddWebPagePreviews()
 * @method $this unsetCanChangeInfo()
 * @method $this unsetCanInviteUsers()
 * @method $this unsetCanPinMessages()
 *
 * @property bool $can_send_messages Optional. True, if the user is allowed to send text messages, contacts, locations and venues
 * @property bool $can_send_media_messages Optional. True, if the user is allowed to send audios, documents, photos, videos, video notes and voice notes, implies can_send_messages
 * @property bool $can_send_polls Optional. True, if the user is allowed to send polls, implies can_send_messages
 * @property bool $can_send_other_messages Optional. True, if the user is allowed to send animations, games, stickers and use inline bots, implies can_send_media_messages
 * @property bool $can_add_web_page_previews Optional. True, if the user is allowed to add web page previews to their messages, implies can_send_media_messages
 * @property bool $can_change_info Optional. True, if the user is allowed to change the chat title, photo and other settings. Ignored in public supergroups
 * @property bool $can_invite_users Optional. True, if the user is allowed to invite new users to the chat
 * @property bool $can_pin_messages Optional. True, if the user is allowed to pin messages. Ignored in public supergroups
 *
 * @see https://core.telegram.org/bots/api#chatpermissions 
 */
class ChatPermissions extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
		'can_send_messages' => 'bool',
		'can_send_media_messages' => 'bool',
		'can_send_polls' => 'bool',
		'can_send_other_messages' => 'bool',
		'can_add_web_page_previews' => 'bool',
		'can_change_info' => 'bool',
		'can_invite_users' => 'bool',
		'can_pin_messages' => 'bool',
	];
}