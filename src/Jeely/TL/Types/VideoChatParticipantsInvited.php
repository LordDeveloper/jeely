<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class VideoChatParticipantsInvited
 * @description This object represents a service message about new members invited to a video chat.
 *
 * @method User[] getUsers() New members that were invited to the video chat
 *
 * @method bool isUsers()
 *
 * @method $this setUsers()
 *
 * @method $this unsetUsers()
 *
 * @property User[] $users New members that were invited to the video chat
 *
 * @see https://core.telegram.org/bots/api#videochatparticipantsinvited
 */
class VideoChatParticipantsInvited extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'users' => 'User[]',
    ];
}