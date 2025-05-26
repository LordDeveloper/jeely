<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class TransactionPartnerUser
* @description Describes a transaction with a user.
*
* @property	string $type Type of the transaction partner, always “user”
* @method	string getType() Type of the transaction partner, always “user”
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	string $transaction_type Type of the transaction, currently one of “invoice_payment” for payments via invoices, “paid_media_payment” for payments for paid media, “gift_purchase” for gifts sent by the bot, “premium_purchase” for Telegram Premium subscriptions gifted by the bot, “business_account_transfer” for direct transfers from managed business accounts
* @method	string getTransactionType() Type of the transaction, currently one of “invoice_payment” for payments via invoices, “paid_media_payment” for payments for paid media, “gift_purchase” for gifts sent by the bot, “premium_purchase” for Telegram Premium subscriptions gifted by the bot, “business_account_transfer” for direct transfers from managed business accounts
* @method	bool isTransactionType()
* @method	$this setTransactionType()
* @method	$this unsetTransactionType()

* @property	User $user Information about the user
* @method	User getUser() Information about the user
* @method	bool isUser()
* @method	$this setUser()
* @method	$this unsetUser()

* @property	AffiliateInfo $affiliate Optional. Information about the affiliate that received a commission via this transaction. Can be available only for “invoice_payment” and “paid_media_payment” transactions.
* @method	AffiliateInfo getAffiliate() Optional. Information about the affiliate that received a commission via this transaction. Can be available only for “invoice_payment” and “paid_media_payment” transactions.
* @method	bool isAffiliate()
* @method	$this setAffiliate()
* @method	$this unsetAffiliate()

* @property	string $invoice_payload Optional. Bot-specified invoice payload. Can be available only for “invoice_payment” transactions.
* @method	string getInvoicePayload() Optional. Bot-specified invoice payload. Can be available only for “invoice_payment” transactions.
* @method	bool isInvoicePayload()
* @method	$this setInvoicePayload()
* @method	$this unsetInvoicePayload()

* @property	int $subscription_period Optional. The duration of the paid subscription. Can be available only for “invoice_payment” transactions.
* @method	int getSubscriptionPeriod() Optional. The duration of the paid subscription. Can be available only for “invoice_payment” transactions.
* @method	bool isSubscriptionPeriod()
* @method	$this setSubscriptionPeriod()
* @method	$this unsetSubscriptionPeriod()

* @property	PaidMedia[] $paid_media Optional. Information about the paid media bought by the user; for “paid_media_payment” transactions only
* @method	PaidMedia[] getPaidMedia() Optional. Information about the paid media bought by the user; for “paid_media_payment” transactions only
* @method	bool isPaidMedia()
* @method	$this setPaidMedia()
* @method	$this unsetPaidMedia()

* @property	string $paid_media_payload Optional. Bot-specified paid media payload. Can be available only for “paid_media_payment” transactions.
* @method	string getPaidMediaPayload() Optional. Bot-specified paid media payload. Can be available only for “paid_media_payment” transactions.
* @method	bool isPaidMediaPayload()
* @method	$this setPaidMediaPayload()
* @method	$this unsetPaidMediaPayload()

* @property	Gift $gift Optional. The gift sent to the user by the bot; for “gift_purchase” transactions only
* @method	Gift getGift() Optional. The gift sent to the user by the bot; for “gift_purchase” transactions only
* @method	bool isGift()
* @method	$this setGift()
* @method	$this unsetGift()

* @property	int $premium_subscription_duration Optional. Number of months the gifted Telegram Premium subscription will be active for; for “premium_purchase” transactions only
* @method	int getPremiumSubscriptionDuration() Optional. Number of months the gifted Telegram Premium subscription will be active for; for “premium_purchase” transactions only
* @method	bool isPremiumSubscriptionDuration()
* @method	$this setPremiumSubscriptionDuration()
* @method	$this unsetPremiumSubscriptionDuration()

*/

class TransactionPartnerUser extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'transaction_type'=> 'string',
		'user'=> 'User',
		'affiliate'=> 'AffiliateInfo',
		'invoice_payload'=> 'string',
		'subscription_period'=> 'int',
		'paid_media'=> 'PaidMedia[]',
		'paid_media_payload'=> 'string',
		'gift'=> 'Gift',
		'premium_subscription_duration'=> 'int',
	];

}