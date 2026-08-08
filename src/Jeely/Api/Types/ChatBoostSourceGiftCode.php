<?php

namespace Jeely\Api\Types;

/**
 * @class ChatBoostSourceGiftCode
 * @description The boost was obtained by the creation of Telegram Premium gift codes to boost a chat. Each such code boosts the chat 4 times for the duration of the corresponding Telegram Premium subscription.
 *
 * @method string getSource() Source of the boost, always “gift_code”
 * @method User getUser() User for which the gift code was created
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
 * @property string $source Source of the boost, always “gift_code”
 * @property User $user User for which the gift code was created
 *
 * @see https://core.telegram.org/bots/api#chatboostsourcegiftcode
 */
class ChatBoostSourceGiftCode extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'source' => 'string',
        'user' => 'User',
    ];
}
