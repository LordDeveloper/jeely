<?php

namespace Jeely\TL\Types;

use Jeely\LazyUpdates;


/**
 * @class Invoice
 * @description This object contains basic information about an invoice.
 *
 * @method string getTitle() Product name
 * @method string getDescription() Product description
 * @method string getStartParameter() Unique bot deep-linking parameter that can be used to generate this invoice
 * @method string getCurrency() Three-letter ISO 4217 currency code
 * @method int getTotalAmount() Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
 *
 * @method bool isTitle()
 * @method bool isDescription()
 * @method bool isStartParameter()
 * @method bool isCurrency()
 * @method bool isTotalAmount()
 *
 * @method $this setTitle()
 * @method $this setDescription()
 * @method $this setStartParameter()
 * @method $this setCurrency()
 * @method $this setTotalAmount()
 *
 * @method $this unsetTitle()
 * @method $this unsetDescription()
 * @method $this unsetStartParameter()
 * @method $this unsetCurrency()
 * @method $this unsetTotalAmount()
 *
 * @property string $title Product name
 * @property string $description Product description
 * @property string $start_parameter Unique bot deep-linking parameter that can be used to generate this invoice
 * @property string $currency Three-letter ISO 4217 currency code
 * @property int $total_amount Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
 *
 * @see https://core.telegram.org/bots/api#invoice
 */
class Invoice extends LazyUpdates
{
    const JSON_PROPERTY_MAP = [
        'title' => 'string',
        'description' => 'string',
        'start_parameter' => 'string',
        'currency' => 'string',
        'total_amount' => 'int',
    ];
}