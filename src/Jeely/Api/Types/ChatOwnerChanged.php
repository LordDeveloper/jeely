<?php

namespace Jeely\Api\Types;

/**
 * @class ChatOwnerChanged
 * @description Describes a service message about an ownership change in the chat.
 *
 * @method User getNewOwner() The new owner of the chat
 *
 * @method bool isNewOwner()
 *
 * @method $this setNewOwner()
 *
 * @method $this unsetNewOwner()
 *
 * @property User $new_owner The new owner of the chat
 *
 * @see https://core.telegram.org/bots/api#chatownerchanged
 */
class ChatOwnerChanged extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'new_owner' => 'User',
    ];
}
