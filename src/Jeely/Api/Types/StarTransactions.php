<?php

namespace Jeely\Api\Types;

/**
 * @class StarTransactions
 * @description Contains a list of Telegram Star transactions.
 *
 * @method StarTransaction[] getTransactions() The list of transactions
 *
 * @method bool isTransactions()
 *
 * @method $this setTransactions()
 *
 * @method $this unsetTransactions()
 *
 * @property StarTransaction[] $transactions The list of transactions
 *
 * @see https://core.telegram.org/bots/api#startransactions
 */
class StarTransactions extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'transactions' => 'StarTransaction[]',
    ];
}
