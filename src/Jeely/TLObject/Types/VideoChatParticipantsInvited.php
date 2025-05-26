<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class VideoChatParticipantsInvited
* @description This object represents a service message about new members invited to a video chat.
*
* @property	User[] $users New members that were invited to the video chat
* @method	User[] getUsers() New members that were invited to the video chat
* @method	bool isUsers()
* @method	$this setUsers()
* @method	$this unsetUsers()

*/

class VideoChatParticipantsInvited extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'users'=> 'User[]',
	];

}