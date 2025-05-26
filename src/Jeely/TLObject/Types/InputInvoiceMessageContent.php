<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class InputInvoiceMessageContent
* @description Represents the content of an invoice message to be sent as the result of an inline query.
*
* @property	string $title Product name, 1-32 characters
* @method	string getTitle() Product name, 1-32 characters
* @method	bool isTitle()
* @method	$this setTitle()
* @method	$this unsetTitle()

* @property	string $description Product description, 1-255 characters
* @method	string getDescription() Product description, 1-255 characters
* @method	bool isDescription()
* @method	$this setDescription()
* @method	$this unsetDescription()

* @property	string $payload Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use it for your internal processes.
* @method	string getPayload() Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use it for your internal processes.
* @method	bool isPayload()
* @method	$this setPayload()
* @method	$this unsetPayload()

* @property	string $provider_token Optional. Payment provider token, obtained via @BotFather. Pass an empty string for payments in Telegram Stars.
* @method	string getProviderToken() Optional. Payment provider token, obtained via @BotFather. Pass an empty string for payments in Telegram Stars.
* @method	bool isProviderToken()
* @method	$this setProviderToken()
* @method	$this unsetProviderToken()

* @property	string $currency Three-letter ISO 4217 currency code, see more on currencies. Pass “XTR” for payments in Telegram Stars.
* @method	string getCurrency() Three-letter ISO 4217 currency code, see more on currencies. Pass “XTR” for payments in Telegram Stars.
* @method	bool isCurrency()
* @method	$this setCurrency()
* @method	$this unsetCurrency()

* @property	LabeledPrice[] $prices Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.). Must contain exactly one item for payments in Telegram Stars.
* @method	LabeledPrice[] getPrices() Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.). Must contain exactly one item for payments in Telegram Stars.
* @method	bool isPrices()
* @method	$this setPrices()
* @method	$this unsetPrices()

* @property	int $max_tip_amount Optional. The maximum accepted amount for tips in the smallest units of the currency (integer, not float/double). For example, for a maximum tip of US$ 1.45 pass max_tip_amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0. Not supported for payments in Telegram Stars.
* @method	int getMaxTipAmount() Optional. The maximum accepted amount for tips in the smallest units of the currency (integer, not float/double). For example, for a maximum tip of US$ 1.45 pass max_tip_amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0. Not supported for payments in Telegram Stars.
* @method	bool isMaxTipAmount()
* @method	$this setMaxTipAmount()
* @method	$this unsetMaxTipAmount()

* @property	int[] $suggested_tip_amounts Optional. A JSON-serialized array of suggested amounts of tip in the smallest units of the currency (integer, not float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed max_tip_amount.
* @method	int[] getSuggestedTipAmounts() Optional. A JSON-serialized array of suggested amounts of tip in the smallest units of the currency (integer, not float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed max_tip_amount.
* @method	bool isSuggestedTipAmounts()
* @method	$this setSuggestedTipAmounts()
* @method	$this unsetSuggestedTipAmounts()

* @property	string $provider_data Optional. A JSON-serialized object for data about the invoice, which will be shared with the payment provider. A detailed description of the required fields should be provided by the payment provider.
* @method	string getProviderData() Optional. A JSON-serialized object for data about the invoice, which will be shared with the payment provider. A detailed description of the required fields should be provided by the payment provider.
* @method	bool isProviderData()
* @method	$this setProviderData()
* @method	$this unsetProviderData()

* @property	string $photo_url Optional. URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service.
* @method	string getPhotoUrl() Optional. URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service.
* @method	bool isPhotoUrl()
* @method	$this setPhotoUrl()
* @method	$this unsetPhotoUrl()

* @property	int $photo_size Optional. Photo size in bytes
* @method	int getPhotoSize() Optional. Photo size in bytes
* @method	bool isPhotoSize()
* @method	$this setPhotoSize()
* @method	$this unsetPhotoSize()

* @property	int $photo_width Optional. Photo width
* @method	int getPhotoWidth() Optional. Photo width
* @method	bool isPhotoWidth()
* @method	$this setPhotoWidth()
* @method	$this unsetPhotoWidth()

* @property	int $photo_height Optional. Photo height
* @method	int getPhotoHeight() Optional. Photo height
* @method	bool isPhotoHeight()
* @method	$this setPhotoHeight()
* @method	$this unsetPhotoHeight()

* @property	bool $need_name Optional. Pass True if you require the user's full name to complete the order. Ignored for payments in Telegram Stars.
* @method	bool getNeedName() Optional. Pass True if you require the user's full name to complete the order. Ignored for payments in Telegram Stars.
* @method	bool isNeedName()
* @method	$this setNeedName()
* @method	$this unsetNeedName()

* @property	bool $need_phone_number Optional. Pass True if you require the user's phone number to complete the order. Ignored for payments in Telegram Stars.
* @method	bool getNeedPhoneNumber() Optional. Pass True if you require the user's phone number to complete the order. Ignored for payments in Telegram Stars.
* @method	bool isNeedPhoneNumber()
* @method	$this setNeedPhoneNumber()
* @method	$this unsetNeedPhoneNumber()

* @property	bool $need_email Optional. Pass True if you require the user's email address to complete the order. Ignored for payments in Telegram Stars.
* @method	bool getNeedEmail() Optional. Pass True if you require the user's email address to complete the order. Ignored for payments in Telegram Stars.
* @method	bool isNeedEmail()
* @method	$this setNeedEmail()
* @method	$this unsetNeedEmail()

* @property	bool $need_shipping_address Optional. Pass True if you require the user's shipping address to complete the order. Ignored for payments in Telegram Stars.
* @method	bool getNeedShippingAddress() Optional. Pass True if you require the user's shipping address to complete the order. Ignored for payments in Telegram Stars.
* @method	bool isNeedShippingAddress()
* @method	$this setNeedShippingAddress()
* @method	$this unsetNeedShippingAddress()

* @property	bool $send_phone_number_to_provider Optional. Pass True if the user's phone number should be sent to the provider. Ignored for payments in Telegram Stars.
* @method	bool getSendPhoneNumberToProvider() Optional. Pass True if the user's phone number should be sent to the provider. Ignored for payments in Telegram Stars.
* @method	bool isSendPhoneNumberToProvider()
* @method	$this setSendPhoneNumberToProvider()
* @method	$this unsetSendPhoneNumberToProvider()

* @property	bool $send_email_to_provider Optional. Pass True if the user's email address should be sent to the provider. Ignored for payments in Telegram Stars.
* @method	bool getSendEmailToProvider() Optional. Pass True if the user's email address should be sent to the provider. Ignored for payments in Telegram Stars.
* @method	bool isSendEmailToProvider()
* @method	$this setSendEmailToProvider()
* @method	$this unsetSendEmailToProvider()

* @property	bool $is_flexible Optional. Pass True if the final price depends on the shipping method. Ignored for payments in Telegram Stars.
* @method	bool getIsFlexible() Optional. Pass True if the final price depends on the shipping method. Ignored for payments in Telegram Stars.
* @method	bool isIsFlexible()
* @method	$this setIsFlexible()
* @method	$this unsetIsFlexible()

*/

class InputInvoiceMessageContent extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'title'=> 'string',
		'description'=> 'string',
		'payload'=> 'string',
		'provider_token'=> 'string',
		'currency'=> 'string',
		'prices'=> 'LabeledPrice[]',
		'max_tip_amount'=> 'int',
		'suggested_tip_amounts'=> 'int[]',
		'provider_data'=> 'string',
		'photo_url'=> 'string',
		'photo_size'=> 'int',
		'photo_width'=> 'int',
		'photo_height'=> 'int',
		'need_name'=> 'bool',
		'need_phone_number'=> 'bool',
		'need_email'=> 'bool',
		'need_shipping_address'=> 'bool',
		'send_phone_number_to_provider'=> 'bool',
		'send_email_to_provider'=> 'bool',
		'is_flexible'=> 'bool',
	];

}