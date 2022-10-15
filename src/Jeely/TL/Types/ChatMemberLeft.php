<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class ChatMemberLeft
 * @description Represents a chat member that isn't currently a member of the chat, but may join it themselves.
 *
 * @method string getStatus() The member's status in the chat, always “left”
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
 * @property string $status The member's status in the chat, always “left”
 * @property User $user Information about the user
 *
 * @see https://core.telegram.org/bots/api#chatmemberleft
 */
class ChatMemberLeft extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'status' => 'string',
        'user' => 'User',
    ];
}