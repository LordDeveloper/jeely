<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class CreateInvoiceLink
 * @description Use this method to create a link for an invoice. Returns the created invoice link as String on success.
 *
 * @property string $business_connection_id Unique identifier of the business connection on behalf of which the link will be created. For payments in Telegram Stars only.
 * @property string $title Product name, 1-32 characters
 * @property string $description Product description, 1-255 characters
 * @property string $payload Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use it for your internal processes.
 * @property string $provider_token Payment provider token, obtained via ＠BotFather. Pass an empty string for payments in Telegram Stars.
 * @property string $currency Three-letter ISO 4217 currency code, see more on currencies. Pass “XTR” for payments in Telegram Stars.
 * @property LabeledPrice[] $prices Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.). Must contain exactly one item for payments in Telegram Stars.
 * @property int $subscription_period The number of seconds the subscription will be active for before the next payment. The currency must be set to “XTR” (Telegram Stars) if the parameter is used. Currently, it must always be 2592000 (30 days) if specified. Any number of subscriptions can be active for a given bot at the same time, including multiple concurrent subscriptions from the same user. Subscription price must no exceed 10000 Telegram Stars.
 * @property int $max_tip_amount The maximum accepted amount for tips in the smallest units of the currency (integer, not float/double). For example, for a maximum tip of US$ 1.45 pass max_tip_amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0. Not supported for payments in Telegram Stars.
 * @property int[] $suggested_tip_amounts A JSON-serialized Array of suggested amounts of tips in the smallest units of the currency (integer, not float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed max_tip_amount.
 * @property string $provider_data JSON-serialized data about the invoice, which will be shared with the payment provider. A detailed description of required fields should be provided by the payment provider.
 * @property string $photo_url URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service.
 * @property int $photo_size Photo size in bytes
 * @property int $photo_width Photo width
 * @property int $photo_height Photo height
 * @property bool $need_name Pass True if you require the user's full name to complete the order. Ignored for payments in Telegram Stars.
 * @property bool $need_phone_number Pass True if you require the user's phone number to complete the order. Ignored for payments in Telegram Stars.
 * @property bool $need_email Pass True if you require the user's email address to complete the order. Ignored for payments in Telegram Stars.
 * @property bool $need_shipping_address Pass True if you require the user's shipping address to complete the order. Ignored for payments in Telegram Stars.
 * @property bool $send_phone_number_to_provider Pass True if the user's phone number should be sent to the provider. Ignored for payments in Telegram Stars.
 * @property bool $send_email_to_provider Pass True if the user's email address should be sent to the provider. Ignored for payments in Telegram Stars.
 * @property bool $is_flexible Pass True if the final price depends on the shipping method. Ignored for payments in Telegram Stars.
 *
 * @see https://core.telegram.org/bots/api#createinvoicelink
 */
class CreateInvoiceLink extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'string';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return string
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
