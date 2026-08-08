<?php

namespace Jeely\Api\Types;

/**
 * @class ChatBoostAdded
 * @description This object represents a service message about a user boosting a chat.
 *
 * @method int getBoostCount() Number of boosts added by the user
 *
 * @method bool isBoostCount()
 *
 * @method $this setBoostCount()
 *
 * @method $this unsetBoostCount()
 *
 * @property int $boost_count Number of boosts added by the user
 *
 * @see https://core.telegram.org/bots/api#chatboostadded
 */
class ChatBoostAdded extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'boost_count' => 'int',
    ];
}
