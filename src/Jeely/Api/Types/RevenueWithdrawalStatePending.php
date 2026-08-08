<?php

namespace Jeely\Api\Types;

/**
 * @class RevenueWithdrawalStatePending
 * @description The withdrawal is in progress.
 *
 * @method string getType() Type of the state, always “pending”
 *
 * @method bool isType()
 *
 * @method $this setType()
 *
 * @method $this unsetType()
 *
 * @property string $type Type of the state, always “pending”
 *
 * @see https://core.telegram.org/bots/api#revenuewithdrawalstatepending
 */
class RevenueWithdrawalStatePending extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
    ];
}
