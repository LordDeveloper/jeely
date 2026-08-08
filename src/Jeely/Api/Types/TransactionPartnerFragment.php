<?php

namespace Jeely\Api\Types;

/**
 * @class TransactionPartnerFragment
 * @description Describes a withdrawal transaction with Fragment.
 *
 * @method string getType() Type of the transaction partner, always “fragment”
 * @method RevenueWithdrawalState getWithdrawalState() Optional. State of the transaction if the transaction is outgoing
 *
 * @method bool isType()
 * @method bool isWithdrawalState()
 *
 * @method $this setType()
 * @method $this setWithdrawalState()
 *
 * @method $this unsetType()
 * @method $this unsetWithdrawalState()
 *
 * @property string $type Type of the transaction partner, always “fragment”
 * @property RevenueWithdrawalState $withdrawal_state Optional. State of the transaction if the transaction is outgoing
 *
 * @see https://core.telegram.org/bots/api#transactionpartnerfragment
 */
class TransactionPartnerFragment extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'withdrawal_state' => 'RevenueWithdrawalState',
    ];
}
