<?php

namespace Jeely\TL\Types;

use Jeely\LazyUpdates;


/**
 * @class ChatMemberBanned
 * @description Represents a chat member that was banned in the chat and can't return to the chat or view chat messages.
 *
 * @method string getStatus() The member's status in the chat, always “kicked”
 * @method User getUser() Information about the user
 * @method int getUntilDate() Date when restrictions will be lifted for this user;
 * unix time. If 0, then the user is banned forever
 *
 * @method bool isStatus()
 * @method bool isUser()
 * @method bool isUntilDate()
 *
 * @method $this setStatus()
 * @method $this setUser()
 * @method $this setUntilDate()
 *
 * @method $this unsetStatus()
 * @method $this unsetUser()
 * @method $this unsetUntilDate()
 *
 * @property string $status The member's status in the chat, always “kicked”
 * @property User $user Information about the user
 * @property int $until_date Date when restrictions will be lifted for this user; unix time. If 0, then the user is banned forever
 *
 * @see https://core.telegram.org/bots/api#chatmemberbanned
 */
class ChatMemberBanned extends LazyUpdates
{
    const JSON_PROPERTY_MAP = [
        'status' => 'string',
        'user' => 'User',
        'until_date' => 'int',
    ];
}