<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class LabeledPrice
* @description This object represents a portion of the price for goods or services.
*
* @property	string $label Portion label
* @method	string getLabel() Portion label
* @method	bool isLabel()
* @method	$this setLabel()
* @method	$this unsetLabel()

* @property	int $amount Price of the product in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
* @method	int getAmount() Price of the product in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
* @method	bool isAmount()
* @method	$this setAmount()
* @method	$this unsetAmount()

*/

class LabeledPrice extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'label'=> 'string',
		'amount'=> 'int',
	];

}