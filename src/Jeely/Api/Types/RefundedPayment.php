<?php

namespace Jeely\Api\Types;

/**
 * @class RefundedPayment
 * @description This object contains basic information about a refunded payment.
 *
 * @method string getCurrency() Three-letter ISO 4217 currency code, or “XTR” for payments in Telegram Stars. Currently, always “XTR”.
 * @method int getTotalAmount() Total refunded price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45, total_amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
 * @method string getInvoicePayload() Bot-specified invoice payload
 * @method string getTelegramPaymentChargeId() Telegram payment identifier
 * @method string getProviderPaymentChargeId() Optional. Provider payment identifier
 *
 * @method bool isCurrency()
 * @method bool isTotalAmount()
 * @method bool isInvoicePayload()
 * @method bool isTelegramPaymentChargeId()
 * @method bool isProviderPaymentChargeId()
 *
 * @method $this setCurrency()
 * @method $this setTotalAmount()
 * @method $this setInvoicePayload()
 * @method $this setTelegramPaymentChargeId()
 * @method $this setProviderPaymentChargeId()
 *
 * @method $this unsetCurrency()
 * @method $this unsetTotalAmount()
 * @method $this unsetInvoicePayload()
 * @method $this unsetTelegramPaymentChargeId()
 * @method $this unsetProviderPaymentChargeId()
 *
 * @property string $currency Three-letter ISO 4217 currency code, or “XTR” for payments in Telegram Stars. Currently, always “XTR”.
 * @property int $total_amount Total refunded price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45, total_amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
 * @property string $invoice_payload Bot-specified invoice payload
 * @property string $telegram_payment_charge_id Telegram payment identifier
 * @property string $provider_payment_charge_id Optional. Provider payment identifier
 *
 * @see https://core.telegram.org/bots/api#refundedpayment
 */
class RefundedPayment extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'currency' => 'string',
        'total_amount' => 'int',
        'invoice_payload' => 'string',
        'telegram_payment_charge_id' => 'string',
        'provider_payment_charge_id' => 'string',
    ];
}
