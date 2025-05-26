<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class SuccessfulPayment
* @description This object contains basic information about a successful payment. Note that if the buyer initiates a chargeback with the relevant payment provider following this transaction, the funds may be debited from your balance. This is outside of Telegram's control.
*
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

* @property	int $subscription_expiration_date Optional. Expiration date of the subscription, in Unix time; for recurring payments only
* @method	int getSubscriptionExpirationDate() Optional. Expiration date of the subscription, in Unix time; for recurring payments only
* @method	bool isSubscriptionExpirationDate()
* @method	$this setSubscriptionExpirationDate()
* @method	$this unsetSubscriptionExpirationDate()

* @property	bool $is_recurring Optional. True, if the payment is a recurring payment for a subscription
* @method	bool getIsRecurring() Optional. True, if the payment is a recurring payment for a subscription
* @method	bool isIsRecurring()
* @method	$this setIsRecurring()
* @method	$this unsetIsRecurring()

* @property	bool $is_first_recurring Optional. True, if the payment is the first payment for a subscription
* @method	bool getIsFirstRecurring() Optional. True, if the payment is the first payment for a subscription
* @method	bool isIsFirstRecurring()
* @method	$this setIsFirstRecurring()
* @method	$this unsetIsFirstRecurring()

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

* @property	string $telegram_payment_charge_id Telegram payment identifier
* @method	string getTelegramPaymentChargeId() Telegram payment identifier
* @method	bool isTelegramPaymentChargeId()
* @method	$this setTelegramPaymentChargeId()
* @method	$this unsetTelegramPaymentChargeId()

* @property	string $provider_payment_charge_id Provider payment identifier
* @method	string getProviderPaymentChargeId() Provider payment identifier
* @method	bool isProviderPaymentChargeId()
* @method	$this setProviderPaymentChargeId()
* @method	$this unsetProviderPaymentChargeId()

*/

class SuccessfulPayment extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'currency'=> 'string',
		'total_amount'=> 'int',
		'invoice_payload'=> 'string',
		'subscription_expiration_date'=> 'int',
		'is_recurring'=> 'bool',
		'is_first_recurring'=> 'bool',
		'shipping_option_id'=> 'string',
		'order_info'=> 'OrderInfo',
		'telegram_payment_charge_id'=> 'string',
		'provider_payment_charge_id'=> 'string',
	];

}