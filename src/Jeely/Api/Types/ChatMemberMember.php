<?php

namespace Jeely\Api\Types;

/**
 * @class ChatMemberMember
 * @description Represents a chat member that has no additional privileges or restrictions.
 *
 * @method string getStatus() The member's status in the chat, always “member”
 * @method string getTag() Optional. Tag of the member
 * @method User getUser() Information about the user
 * @method int getUntilDate() Optional. Date when the user's subscription will expire; Unix time
 *
 * @method bool isStatus()
 * @method bool isTag()
 * @method bool isUser()
 * @method bool isUntilDate()
 *
 * @method $this setStatus()
 * @method $this setTag()
 * @method $this setUser()
 * @method $this setUntilDate()
 *
 * @method $this unsetStatus()
 * @method $this unsetTag()
 * @method $this unsetUser()
 * @method $this unsetUntilDate()
 *
 * @property string $status The member's status in the chat, always “member”
 * @property string $tag Optional. Tag of the member
 * @property User $user Information about the user
 * @property int $until_date Optional. Date when the user's subscription will expire; Unix time
 *
 * @see https://core.telegram.org/bots/api#chatmembermember
 */
class ChatMemberMember extends ChatMember
{
    public const JSON_PROPERTY_MAP = [
        'status' => 'string',
        'tag' => 'string',
        'user' => 'User',
        'until_date' => 'int',
    ];
}
