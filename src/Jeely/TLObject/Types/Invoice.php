<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class Invoice
* @description This object contains basic information about an invoice.
*
* @property	string $title Product name
* @method	string getTitle() Product name
* @method	bool isTitle()
* @method	$this setTitle()
* @method	$this unsetTitle()

* @property	string $description Product description
* @method	string getDescription() Product description
* @method	bool isDescription()
* @method	$this setDescription()
* @method	$this unsetDescription()

* @property	string $start_parameter Unique bot deep-linking parameter that can be used to generate this invoice
* @method	string getStartParameter() Unique bot deep-linking parameter that can be used to generate this invoice
* @method	bool isStartParameter()
* @method	$this setStartParameter()
* @method	$this unsetStartParameter()

* @property	string $currency Three-letter ISO 4217 currency code, or “XTR” for payments in Telegram Stars
* @method	string getCurrency() Three-letter ISO 4217 currency code, or “XTR” for payments in Telegram Stars
* @method	bool isCurrency()
* @method	$this setCurrency()
* @method	$this unsetCurrency()

* @property	int $total_amount Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
* @method	int getTotalAmount() Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
* @method	bool isTotalAmount()
* @method	$this setTotalAmount()
* @method	$this unsetTotalAmount()

*/

class Invoice extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'title'=> 'string',
		'description'=> 'string',
		'start_parameter'=> 'string',
		'currency'=> 'string',
		'total_amount'=> 'int',
	];

}