<?php

namespace Jeely\Api\Types;

/**
 * @class ChatOwnerLeft
 * @description Describes a service message about the chat owner leaving the chat.
 *
 * @method User getNewOwner() Optional. The user who will become the new owner of the chat if the previous owner does not return to the chat
 *
 * @method bool isNewOwner()
 *
 * @method $this setNewOwner()
 *
 * @method $this unsetNewOwner()
 *
 * @property User $new_owner Optional. The user who will become the new owner of the chat if the previous owner does not return to the chat
 *
 * @see https://core.telegram.org/bots/api#chatownerleft
 */
class ChatOwnerLeft extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'new_owner' => 'User',
    ];
}
