<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class ChatMemberMember
 * @description Represents a chat member that has no additional privileges or restrictions.
 *
 * @method string getStatus() The member's status in the chat, always “member”
 * @method User getUser() Information about the user
 *
 * @method bool isStatus()
 * @method bool isUser()
 *
 * @method $this setStatus()
 * @method $this setUser()
 *
 * @method $this unsetStatus()
 * @method $this unsetUser()
 *
 * @property string $status The member's status in the chat, always “member”
 * @property User $user Information about the user
 *
 * @see https://core.telegram.org/bots/api#chatmembermember
 */
class ChatMemberMember extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'status' => 'string',
        'user' => 'User',
    ];
}