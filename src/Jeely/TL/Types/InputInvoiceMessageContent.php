<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class InputInvoiceMessageContent
 * @description Represents the content of an invoice message to be sent as the result of an inline query.
 *
 * @method string getTitle() Product name, 1-32 characters
 * @method string getDescription() Product description, 1-255 characters
 * @method string getPayload() Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use for your internal processes.
 * @method string getProviderToken() Payment provider token, obtained via @BotFather
 * @method string getCurrency() Three-letter ISO 4217 currency code, see more on currencies
 * @method LabeledPrice[] getPrices() Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.)
 * @method int getMaxTipAmount() Optional. The maximum accepted amount for tips in the smallest units of the currency (integer, not float/double). For example, for a maximum tip of US$ 1.45 pass max_tip_amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0
 * @method int[] getSuggestedTipAmounts() Optional. A JSON-serialized array of suggested amounts of tip in the smallest units of the currency (integer, not float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed max_tip_amount.
 * @method string getProviderData() Optional. A JSON-serialized object for data about the invoice, which will be shared with the payment provider. A detailed description of the required fields should be provided by the payment provider.
 * @method string getPhotoUrl() Optional. URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service.
 * @method int getPhotoSize() Optional. Photo size in bytes
 * @method int getPhotoWidth() Optional. Photo width
 * @method int getPhotoHeight() Optional. Photo height
 * @method bool getNeedName() Optional. Pass True if you require the user's full name to complete the order
 * @method bool getNeedPhoneNumber() Optional. Pass True if you require the user's phone number to complete the order
 * @method bool getNeedEmail() Optional. Pass True if you require the user's email address to complete the order
 * @method bool getNeedShippingAddress() Optional. Pass True if you require the user's shipping address to complete the order
 * @method bool getSendPhoneNumberToProvider() Optional. Pass True if the user's phone number should be sent to provider
 * @method bool getSendEmailToProvider() Optional. Pass True if the user's email address should be sent to provider
 * @method bool getIsFlexible() Optional. Pass True if the final price depends on the shipping method
 *
 * @method bool isTitle()
 * @method bool isDescription()
 * @method bool isPayload()
 * @method bool isProviderToken()
 * @method bool isCurrency()
 * @method bool isPrices()
 * @method bool isMaxTipAmount()
 * @method bool isSuggestedTipAmounts()
 * @method bool isProviderData()
 * @method bool isPhotoUrl()
 * @method bool isPhotoSize()
 * @method bool isPhotoWidth()
 * @method bool isPhotoHeight()
 * @method bool isNeedName()
 * @method bool isNeedPhoneNumber()
 * @method bool isNeedEmail()
 * @method bool isNeedShippingAddress()
 * @method bool isSendPhoneNumberToProvider()
 * @method bool isSendEmailToProvider()
 * @method bool isIsFlexible()
 *
 * @method $this setTitle()
 * @method $this setDescription()
 * @method $this setPayload()
 * @method $this setProviderToken()
 * @method $this setCurrency()
 * @method $this setPrices()
 * @method $this setMaxTipAmount()
 * @method $this setSuggestedTipAmounts()
 * @method $this setProviderData()
 * @method $this setPhotoUrl()
 * @method $this setPhotoSize()
 * @method $this setPhotoWidth()
 * @method $this setPhotoHeight()
 * @method $this setNeedName()
 * @method $this setNeedPhoneNumber()
 * @method $this setNeedEmail()
 * @method $this setNeedShippingAddress()
 * @method $this setSendPhoneNumberToProvider()
 * @method $this setSendEmailToProvider()
 * @method $this setIsFlexible()
 *
 * @method $this unsetTitle()
 * @method $this unsetDescription()
 * @method $this unsetPayload()
 * @method $this unsetProviderToken()
 * @method $this unsetCurrency()
 * @method $this unsetPrices()
 * @method $this unsetMaxTipAmount()
 * @method $this unsetSuggestedTipAmounts()
 * @method $this unsetProviderData()
 * @method $this unsetPhotoUrl()
 * @method $this unsetPhotoSize()
 * @method $this unsetPhotoWidth()
 * @method $this unsetPhotoHeight()
 * @method $this unsetNeedName()
 * @method $this unsetNeedPhoneNumber()
 * @method $this unsetNeedEmail()
 * @method $this unsetNeedShippingAddress()
 * @method $this unsetSendPhoneNumberToProvider()
 * @method $this unsetSendEmailToProvider()
 * @method $this unsetIsFlexible()
 *
 * @property string $title Product name, 1-32 characters
 * @property string $description Product description, 1-255 characters
 * @property string $payload Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use for your internal processes.
 * @property string $provider_token Payment provider token, obtained via @BotFather
 * @property string $currency Three-letter ISO 4217 currency code, see more on currencies
 * @property LabeledPrice[] $prices Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.)
 * @property int $max_tip_amount Optional. The maximum accepted amount for tips in the smallest units of the currency (integer, not float/double). For example, for a maximum tip of US$ 1.45 pass max_tip_amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0
 * @property int[] $suggested_tip_amounts Optional. A JSON-serialized array of suggested amounts of tip in the smallest units of the currency (integer, not float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed max_tip_amount.
 * @property string $provider_data Optional. A JSON-serialized object for data about the invoice, which will be shared with the payment provider. A detailed description of the required fields should be provided by the payment provider.
 * @property string $photo_url Optional. URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service.
 * @property int $photo_size Optional. Photo size in bytes
 * @property int $photo_width Optional. Photo width
 * @property int $photo_height Optional. Photo height
 * @property bool $need_name Optional. Pass True if you require the user's full name to complete the order
 * @property bool $need_phone_number Optional. Pass True if you require the user's phone number to complete the order
 * @property bool $need_email Optional. Pass True if you require the user's email address to complete the order
 * @property bool $need_shipping_address Optional. Pass True if you require the user's shipping address to complete the order
 * @property bool $send_phone_number_to_provider Optional. Pass True if the user's phone number should be sent to provider
 * @property bool $send_email_to_provider Optional. Pass True if the user's email address should be sent to provider
 * @property bool $is_flexible Optional. Pass True if the final price depends on the shipping method
 *
 * @see https://core.telegram.org/bots/api#inputinvoicemessagecontent 
 */
class InputInvoiceMessageContent extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
		'title' => 'string',
		'description' => 'string',
		'payload' => 'string',
		'provider_token' => 'string',
		'currency' => 'string',
		'prices' => 'LabeledPrice[]',
		'max_tip_amount' => 'int',
		'suggested_tip_amounts' => 'int[]',
		'provider_data' => 'string',
		'photo_url' => 'string',
		'photo_size' => 'int',
		'photo_width' => 'int',
		'photo_height' => 'int',
		'need_name' => 'bool',
		'need_phone_number' => 'bool',
		'need_email' => 'bool',
		'need_shipping_address' => 'bool',
		'send_phone_number_to_provider' => 'bool',
		'send_email_to_provider' => 'bool',
		'is_flexible' => 'bool',
	];
}