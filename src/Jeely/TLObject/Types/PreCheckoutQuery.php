<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class PreCheckoutQuery
* @description This object contains information about an incoming pre-checkout query.
*
* @property	string $id Unique query identifier
* @method	string getId() Unique query identifier
* @method	bool isId()
* @method	$this setId()
* @method	$this unsetId()

* @property	User $from User who sent the query
* @method	User getFrom() User who sent the query
* @method	bool isFrom()
* @method	$this setFrom()
* @method	$this unsetFrom()

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

* @property	string $invoice_payload Bot-specified invoice payload
* @method	string getInvoicePayload() Bot-specified invoice payload
* @method	bool isInvoicePayload()
* @method	$this setInvoicePayload()
* @method	$this unsetInvoicePayload()

* @property	string $shipping_option_id Optional. Identifier of the shipping option chosen by the user
* @method	string getShippingOptionId() Optional. Identifier of the shipping option chosen by the user
* @method	bool isShippingOptionId()
* @method	$this setShippingOptionId()
* @method	$this unsetShippingOptionId()

* @property	OrderInfo $order_info Optional. Order information provided by the user
* @method	OrderInfo getOrderInfo() Optional. Order information provided by the user
* @method	bool isOrderInfo()
* @method	$this setOrderInfo()
* @method	$this unsetOrderInfo()

*/

class PreCheckoutQuery extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'id'=> 'string',
		'from'=> 'User',
		'currency'=> 'string',
		'total_amount'=> 'int',
		'invoice_payload'=> 'string',
		'shipping_option_id'=> 'string',
		'order_info'=> 'OrderInfo',
	];

}