<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class RefundedPayment
* @description This object contains basic information about a refunded payment.
*
* @property	string $currency Three-letter ISO 4217 currency code, or “XTR” for payments in Telegram Stars. Currently, always “XTR”
* @method	string getCurrency() Three-letter ISO 4217 currency code, or “XTR” for payments in Telegram Stars. Currently, always “XTR”
* @method	bool isCurrency()
* @method	$this setCurrency()
* @method	$this unsetCurrency()

* @property	int $total_amount Total refunded price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45, total_amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
* @method	int getTotalAmount() Total refunded price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45, total_amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
* @method	bool isTotalAmount()
* @method	$this setTotalAmount()
* @method	$this unsetTotalAmount()

* @property	string $invoice_payload Bot-specified invoice payload
* @method	string getInvoicePayload() Bot-specified invoice payload
* @method	bool isInvoicePayload()
* @method	$this setInvoicePayload()
* @method	$this unsetInvoicePayload()

* @property	string $telegram_payment_charge_id Telegram payment identifier
* @method	string getTelegramPaymentChargeId() Telegram payment identifier
* @method	bool isTelegramPaymentChargeId()
* @method	$this setTelegramPaymentChargeId()
* @method	$this unsetTelegramPaymentChargeId()

* @property	string $provider_payment_charge_id Optional. Provider payment identifier
* @method	string getProviderPaymentChargeId() Optional. Provider payment identifier
* @method	bool isProviderPaymentChargeId()
* @method	$this setProviderPaymentChargeId()
* @method	$this unsetProviderPaymentChargeId()

*/

class RefundedPayment extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'currency'=> 'string',
		'total_amount'=> 'int',
		'invoice_payload'=> 'string',
		'telegram_payment_charge_id'=> 'string',
		'provider_payment_charge_id'=> 'string',
	];

}