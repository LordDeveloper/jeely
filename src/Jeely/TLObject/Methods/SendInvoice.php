<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\LabeledPrice;
use Jeely\TLObject\Types\ReplyParameters;
use Jeely\TLObject\Types\InlineKeyboardMarkup;
use Jeely\TLObject\Types\Message;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class SendInvoice
* @description Use this method to send invoices. On success, the sent Message is returned.
*
*
* @param	int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
* @param	int $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
* @param	string $title Product name, 1-32 characters
* @param	string $description Product description, 1-255 characters
* @param	string $payload Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use it for your internal processes.
* @param	string $provider_token Payment provider token, obtained via @BotFather. Pass an empty string for payments in Telegram Stars.
* @param	string $currency Three-letter ISO 4217 currency code, see more on currencies. Pass “XTR” for payments in Telegram Stars.
* @param	LabeledPrice[] $prices Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.). Must contain exactly one item for payments in Telegram Stars.
* @param	int $max_tip_amount The maximum accepted amount for tips in the smallest units of the currency (integer, not float/double). For example, for a maximum tip of US$ 1.45 pass max_tip_amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0. Not supported for payments in Telegram Stars.
* @param	int[] $suggested_tip_amounts A JSON-serialized array of suggested amounts of tips in the smallest units of the currency (integer, not float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed max_tip_amount.
* @param	string $start_parameter Unique deep-linking parameter. If left empty, forwarded copies of the sent message will have a Pay button, allowing multiple users to pay directly from the forwarded message, using the same invoice. If non-empty, forwarded copies of the sent message will have a URL button with a deep link to the bot (instead of a Pay button), with the value used as the start parameter
* @param	string $provider_data JSON-serialized data about the invoice, which will be shared with the payment provider. A detailed description of required fields should be provided by the payment provider.
* @param	string $photo_url URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service. People like it better when they see what they are paying for.
* @param	int $photo_size Photo size in bytes
* @param	int $photo_width Photo width
* @param	int $photo_height Photo height
* @param	bool $need_name Pass True if you require the user's full name to complete the order. Ignored for payments in Telegram Stars.
* @param	bool $need_phone_number Pass True if you require the user's phone number to complete the order. Ignored for payments in Telegram Stars.
* @param	bool $need_email Pass True if you require the user's email address to complete the order. Ignored for payments in Telegram Stars.
* @param	bool $need_shipping_address Pass True if you require the user's shipping address to complete the order. Ignored for payments in Telegram Stars.
* @param	bool $send_phone_number_to_provider Pass True if the user's phone number should be sent to the provider. Ignored for payments in Telegram Stars.
* @param	bool $send_email_to_provider Pass True if the user's email address should be sent to the provider. Ignored for payments in Telegram Stars.
* @param	bool $is_flexible Pass True if the final price depends on the shipping method. Ignored for payments in Telegram Stars.
* @param	bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
* @param	bool $protect_content Protects the contents of the sent message from forwarding and saving
* @param	bool $allow_paid_broadcast Pass True to allow up to 1000 messages per second, ignoring broadcasting limits for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
* @param	string $message_effect_id Unique identifier of the message effect to be added to the message; for private chats only
* @param	ReplyParameters $reply_parameters Description of the message to reply to
* @param	InlineKeyboardMarkup $reply_markup A JSON-serialized object for an inline keyboard. If empty, one 'Pay total price' button will be shown. If not empty, the first button must be a Pay button.
*
*
* @property	int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
* @property	int $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
* @property	string $title Product name, 1-32 characters
* @property	string $description Product description, 1-255 characters
* @property	string $payload Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use it for your internal processes.
* @property	string $provider_token Payment provider token, obtained via @BotFather. Pass an empty string for payments in Telegram Stars.
* @property	string $currency Three-letter ISO 4217 currency code, see more on currencies. Pass “XTR” for payments in Telegram Stars.
* @property	LabeledPrice[] $prices Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.). Must contain exactly one item for payments in Telegram Stars.
* @property	int $max_tip_amount The maximum accepted amount for tips in the smallest units of the currency (integer, not float/double). For example, for a maximum tip of US$ 1.45 pass max_tip_amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0. Not supported for payments in Telegram Stars.
* @property	int[] $suggested_tip_amounts A JSON-serialized array of suggested amounts of tips in the smallest units of the currency (integer, not float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed max_tip_amount.
* @property	string $start_parameter Unique deep-linking parameter. If left empty, forwarded copies of the sent message will have a Pay button, allowing multiple users to pay directly from the forwarded message, using the same invoice. If non-empty, forwarded copies of the sent message will have a URL button with a deep link to the bot (instead of a Pay button), with the value used as the start parameter
* @property	string $provider_data JSON-serialized data about the invoice, which will be shared with the payment provider. A detailed description of required fields should be provided by the payment provider.
* @property	string $photo_url URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service. People like it better when they see what they are paying for.
* @property	int $photo_size Photo size in bytes
* @property	int $photo_width Photo width
* @property	int $photo_height Photo height
* @property	bool $need_name Pass True if you require the user's full name to complete the order. Ignored for payments in Telegram Stars.
* @property	bool $need_phone_number Pass True if you require the user's phone number to complete the order. Ignored for payments in Telegram Stars.
* @property	bool $need_email Pass True if you require the user's email address to complete the order. Ignored for payments in Telegram Stars.
* @property	bool $need_shipping_address Pass True if you require the user's shipping address to complete the order. Ignored for payments in Telegram Stars.
* @property	bool $send_phone_number_to_provider Pass True if the user's phone number should be sent to the provider. Ignored for payments in Telegram Stars.
* @property	bool $send_email_to_provider Pass True if the user's email address should be sent to the provider. Ignored for payments in Telegram Stars.
* @property	bool $is_flexible Pass True if the final price depends on the shipping method. Ignored for payments in Telegram Stars.
* @property	bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
* @property	bool $protect_content Protects the contents of the sent message from forwarding and saving
* @property	bool $allow_paid_broadcast Pass True to allow up to 1000 messages per second, ignoring broadcasting limits for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
* @property	string $message_effect_id Unique identifier of the message effect to be added to the message; for private chats only
* @property	ReplyParameters $reply_parameters Description of the message to reply to
* @property	InlineKeyboardMarkup $reply_markup A JSON-serialized object for an inline keyboard. If empty, one 'Pay total price' button will be shown. If not empty, the first button must be a Pay button.
*
*/

#[Casts(['Jeely\\TLObject\\Types\\Message'])]
class SendInvoice extends MethodDefinition implements MethodDefinitionInterface
{

}