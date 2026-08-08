<?php

namespace Jeely\Api\Types;

/**
 * @class ChatBoostSourcePremium
 * @description The boost was obtained by subscribing to Telegram Premium or by gifting a Telegram Premium subscription to another user.
 *
 * @method string getSource() Source of the boost, always “premium”
 * @method User getUser() User that boosted the chat
 *
 * @method bool isSource()
 * @method bool isUser()
 *
 * @method $this setSource()
 * @method $this setUser()
 *
 * @method $this unsetSource()
 * @method $this unsetUser()
 *
 * @property string $source Source of the boost, always “premium”
 * @property User $user User that boosted the chat
 *
 * @see https://core.telegram.org/bots/api#chatboostsourcepremium
 */
class ChatBoostSourcePremium extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'source' => 'string',
        'user' => 'User',
    ];
}
