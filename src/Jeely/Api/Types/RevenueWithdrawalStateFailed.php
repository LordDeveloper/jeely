<?php

namespace Jeely\Api\Types;

/**
 * @class RevenueWithdrawalStateFailed
 * @description The withdrawal failed and the transaction was refunded.
 *
 * @method string getType() Type of the state, always “failed”
 *
 * @method bool isType()
 *
 * @method $this setType()
 *
 * @method $this unsetType()
 *
 * @property string $type Type of the state, always “failed”
 *
 * @see https://core.telegram.org/bots/api#revenuewithdrawalstatefailed
 */
class RevenueWithdrawalStateFailed extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
    ];
}
