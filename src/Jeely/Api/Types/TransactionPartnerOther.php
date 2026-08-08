<?php

namespace Jeely\Api\Types;

/**
 * @class TransactionPartnerOther
 * @description Describes a transaction with an unknown source or recipient.
 *
 * @method string getType() Type of the transaction partner, always “other”
 *
 * @method bool isType()
 *
 * @method $this setType()
 *
 * @method $this unsetType()
 *
 * @property string $type Type of the transaction partner, always “other”
 *
 * @see https://core.telegram.org/bots/api#transactionpartnerother
 */
class TransactionPartnerOther extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
    ];
}
