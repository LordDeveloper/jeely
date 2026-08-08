<?php

namespace Jeely\Api\Types;

/**
 * @class TransactionPartnerUser
 * @description Describes a transaction with a user.
 *
 * @method string getType() Type of the transaction partner, always “user”
 * @method string getTransactionType() Type of the transaction, currently one of “invoice_payment” for payments via invoices, “paid_media_payment” for payments for paid media, “gift_purchase” for gifts sent by the bot, “premium_purchase” for Telegram Premium subscriptions gifted by the bot, “business_account_transfer” for direct transfers from managed business accounts
 * @method User getUser() Information about the user
 * @method AffiliateInfo getAffiliate() Optional. Information about the affiliate that received a commission via this transaction. Can be available only for “invoice_payment” and “paid_media_payment” transactions.
 * @method string getInvoicePayload() Optional. Bot-specified invoice payload. Can be available only for “invoice_payment” transactions.
 * @method int getSubscriptionPeriod() Optional. The duration of the paid subscription. Can be available only for “invoice_payment” transactions.
 * @method PaidMedia[] getPaidMedia() Optional. Information about the paid media bought by the user; for “paid_media_payment” transactions only
 * @method string getPaidMediaPayload() Optional. Bot-specified paid media payload. Can be available only for “paid_media_payment” transactions.
 * @method Gift getGift() Optional. The gift sent to the user by the bot; for “gift_purchase” transactions only
 * @method int getPremiumSubscriptionDuration() Optional. Number of months the gifted Telegram Premium subscription will be active for; for “premium_purchase” transactions only
 *
 * @method bool isType()
 * @method bool isTransactionType()
 * @method bool isUser()
 * @method bool isAffiliate()
 * @method bool isInvoicePayload()
 * @method bool isSubscriptionPeriod()
 * @method bool isPaidMedia()
 * @method bool isPaidMediaPayload()
 * @method bool isGift()
 * @method bool isPremiumSubscriptionDuration()
 *
 * @method $this setType()
 * @method $this setTransactionType()
 * @method $this setUser()
 * @method $this setAffiliate()
 * @method $this setInvoicePayload()
 * @method $this setSubscriptionPeriod()
 * @method $this setPaidMedia()
 * @method $this setPaidMediaPayload()
 * @method $this setGift()
 * @method $this setPremiumSubscriptionDuration()
 *
 * @method $this unsetType()
 * @method $this unsetTransactionType()
 * @method $this unsetUser()
 * @method $this unsetAffiliate()
 * @method $this unsetInvoicePayload()
 * @method $this unsetSubscriptionPeriod()
 * @method $this unsetPaidMedia()
 * @method $this unsetPaidMediaPayload()
 * @method $this unsetGift()
 * @method $this unsetPremiumSubscriptionDuration()
 *
 * @property string $type Type of the transaction partner, always “user”
 * @property string $transaction_type Type of the transaction, currently one of “invoice_payment” for payments via invoices, “paid_media_payment” for payments for paid media, “gift_purchase” for gifts sent by the bot, “premium_purchase” for Telegram Premium subscriptions gifted by the bot, “business_account_transfer” for direct transfers from managed business accounts
 * @property User $user Information about the user
 * @property AffiliateInfo $affiliate Optional. Information about the affiliate that received a commission via this transaction. Can be available only for “invoice_payment” and “paid_media_payment” transactions.
 * @property string $invoice_payload Optional. Bot-specified invoice payload. Can be available only for “invoice_payment” transactions.
 * @property int $subscription_period Optional. The duration of the paid subscription. Can be available only for “invoice_payment” transactions.
 * @property PaidMedia[] $paid_media Optional. Information about the paid media bought by the user; for “paid_media_payment” transactions only
 * @property string $paid_media_payload Optional. Bot-specified paid media payload. Can be available only for “paid_media_payment” transactions.
 * @property Gift $gift Optional. The gift sent to the user by the bot; for “gift_purchase” transactions only
 * @property int $premium_subscription_duration Optional. Number of months the gifted Telegram Premium subscription will be active for; for “premium_purchase” transactions only
 *
 * @see https://core.telegram.org/bots/api#transactionpartneruser
 */
class TransactionPartnerUser extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'transaction_type' => 'string',
        'user' => 'User',
        'affiliate' => 'AffiliateInfo',
        'invoice_payload' => 'string',
        'subscription_period' => 'int',
        'paid_media' => 'PaidMedia[]',
        'paid_media_payload' => 'string',
        'gift' => 'Gift',
        'premium_subscription_duration' => 'int',
    ];
}
