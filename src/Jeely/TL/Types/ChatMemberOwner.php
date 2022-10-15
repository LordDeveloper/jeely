<?php

namespace Jeely\TL\Types;

use Jeely\LazyUpdates;


/**
 * @class ChatMemberOwner
 * @description Represents a chat member that owns the chat and has all administrator privileges.
 *
 * @method string getStatus() The member's status in the chat, always “creator”
 * @method User getUser() Information about the user
 * @method bool getIsAnonymous() True, if the user's presence in the chat is hidden
 * @method string getCustomTitle() Optional. Custom title for this user
 *
 * @method bool isStatus()
 * @method bool isUser()
 * @method bool isIsAnonymous()
 * @method bool isCustomTitle()
 *
 * @method $this setStatus()
 * @method $this setUser()
 * @method $this setIsAnonymous()
 * @method $this setCustomTitle()
 *
 * @method $this unsetStatus()
 * @method $this unsetUser()
 * @method $this unsetIsAnonymous()
 * @method $this unsetCustomTitle()
 *
 * @property string $status The member's status in the chat, always “creator”
 * @property User $user Information about the user
 * @property bool $is_anonymous True, if the user's presence in the chat is hidden
 * @property string $custom_title Optional. Custom title for this user
 *
 * @see https://core.telegram.org/bots/api#chatmemberowner
 */
class ChatMemberOwner extends LazyUpdates
{
    const JSON_PROPERTY_MAP = [
        'status' => 'string',
        'user' => 'User',
        'is_anonymous' => 'bool',
        'custom_title' => 'string',
    ];
}