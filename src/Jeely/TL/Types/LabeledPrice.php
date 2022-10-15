<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class LabeledPrice
 * @description This object represents a portion of the price for goods or services.
 *
 * @method string getLabel() Portion label
 * @method int getAmount() Price of the product in the smallest units of the currency (integer, not float/double). For example, for a price of US$1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
 *
 * @method bool isLabel()
 * @method bool isAmount()
 *
 * @method $this setLabel()
 * @method $this setAmount()
 *
 * @method $this unsetLabel()
 * @method $this unsetAmount()
 *
 * @property string $label Portion label
 * @property int $amount Price of the product in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
 *
 * @see https://core.telegram.org/bots/api#labeledprice
 */
class LabeledPrice extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'label' => 'string',
        'amount' => 'int',
    ];
}