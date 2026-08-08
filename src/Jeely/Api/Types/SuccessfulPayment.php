<?php

namespace Jeely\Api\Types;

/**
 * @class SuccessfulPayment
 * @description This object contains basic information about a successful payment. Note that if the buyer initiates a chargeback with the relevant payment provider following this transaction, the funds may be debited from your balance. This is outside of Telegram's control.
 *
 * @method string getCurrency() Three-letter ISO 4217 currency code, or “XTR” for payments in Telegram Stars
 * @method int getTotalAmount() Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
 * @method string getInvoicePayload() Bot-specified invoice payload
 * @method int getSubscriptionExpirationDate() Optional. Expiration date of the subscription, in Unix time; for recurring payments only
 * @method bool getIsRecurring() Optional. True, if the payment is a recurring payment for a subscription
 * @method bool getIsFirstRecurring() Optional. True, if the payment is the first payment for a subscription
 * @method string getShippingOptionId() Optional. Identifier of the shipping option chosen by the user
 * @method OrderInfo getOrderInfo() Optional. Order information provided by the user
 * @method string getTelegramPaymentChargeId() Telegram payment identifier
 * @method string getProviderPaymentChargeId() Provider payment identifier
 *
 * @method bool isCurrency()
 * @method bool isTotalAmount()
 * @method bool isInvoicePayload()
 * @method bool isSubscriptionExpirationDate()
 * @method bool isIsRecurring()
 * @method bool isIsFirstRecurring()
 * @method bool isShippingOptionId()
 * @method bool isOrderInfo()
 * @method bool isTelegramPaymentChargeId()
 * @method bool isProviderPaymentChargeId()
 *
 * @method $this setCurrency()
 * @method $this setTotalAmount()
 * @method $this setInvoicePayload()
 * @method $this setSubscriptionExpirationDate()
 * @method $this setIsRecurring()
 * @method $this setIsFirstRecurring()
 * @method $this setShippingOptionId()
 * @method $this setOrderInfo()
 * @method $this setTelegramPaymentChargeId()
 * @method $this setProviderPaymentChargeId()
 *
 * @method $this unsetCurrency()
 * @method $this unsetTotalAmount()
 * @method $this unsetInvoicePayload()
 * @method $this unsetSubscriptionExpirationDate()
 * @method $this unsetIsRecurring()
 * @method $this unsetIsFirstRecurring()
 * @method $this unsetShippingOptionId()
 * @method $this unsetOrderInfo()
 * @method $this unsetTelegramPaymentChargeId()
 * @method $this unsetProviderPaymentChargeId()
 *
 * @property string $currency Three-letter ISO 4217 currency code, or “XTR” for payments in Telegram Stars
 * @property int $total_amount Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
 * @property string $invoice_payload Bot-specified invoice payload
 * @property int $subscription_expiration_date Optional. Expiration date of the subscription, in Unix time; for recurring payments only
 * @property bool $is_recurring Optional. True, if the payment is a recurring payment for a subscription
 * @property bool $is_first_recurring Optional. True, if the payment is the first payment for a subscription
 * @property string $shipping_option_id Optional. Identifier of the shipping option chosen by the user
 * @property OrderInfo $order_info Optional. Order information provided by the user
 * @property string $telegram_payment_charge_id Telegram payment identifier
 * @property string $provider_payment_charge_id Provider payment identifier
 *
 * @see https://core.telegram.org/bots/api#successfulpayment
 */
class SuccessfulPayment extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'currency' => 'string',
        'total_amount' => 'int',
        'invoice_payload' => 'string',
        'subscription_expiration_date' => 'int',
        'is_recurring' => 'bool',
        'is_first_recurring' => 'bool',
        'shipping_option_id' => 'string',
        'order_info' => 'OrderInfo',
        'telegram_payment_charge_id' => 'string',
        'provider_payment_charge_id' => 'string',
    ];
}
