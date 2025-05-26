<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class AffiliateInfo
* @description Contains information about the affiliate that received a commission via this transaction.
*
* @property	User $affiliate_user Optional. The bot or the user that received an affiliate commission if it was received by a bot or a user
* @method	User getAffiliateUser() Optional. The bot or the user that received an affiliate commission if it was received by a bot or a user
* @method	bool isAffiliateUser()
* @method	$this setAffiliateUser()
* @method	$this unsetAffiliateUser()

* @property	Chat $affiliate_chat Optional. The chat that received an affiliate commission if it was received by a chat
* @method	Chat getAffiliateChat() Optional. The chat that received an affiliate commission if it was received by a chat
* @method	bool isAffiliateChat()
* @method	$this setAffiliateChat()
* @method	$this unsetAffiliateChat()

* @property	int $commission_per_mille The number of Telegram Stars received by the affiliate for each 1000 Telegram Stars received by the bot from referred users
* @method	int getCommissionPerMille() The number of Telegram Stars received by the affiliate for each 1000 Telegram Stars received by the bot from referred users
* @method	bool isCommissionPerMille()
* @method	$this setCommissionPerMille()
* @method	$this unsetCommissionPerMille()

* @property	int $amount Integer amount of Telegram Stars received by the affiliate from the transaction, rounded to 0; can be negative for refunds
* @method	int getAmount() Integer amount of Telegram Stars received by the affiliate from the transaction, rounded to 0; can be negative for refunds
* @method	bool isAmount()
* @method	$this setAmount()
* @method	$this unsetAmount()

* @property	int $nanostar_amount Optional. The number of 1/1000000000 shares of Telegram Stars received by the affiliate; from -999999999 to 999999999; can be negative for refunds
* @method	int getNanostarAmount() Optional. The number of 1/1000000000 shares of Telegram Stars received by the affiliate; from -999999999 to 999999999; can be negative for refunds
* @method	bool isNanostarAmount()
* @method	$this setNanostarAmount()
* @method	$this unsetNanostarAmount()

*/

class AffiliateInfo extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'affiliate_user'=> 'User',
		'affiliate_chat'=> 'Chat',
		'commission_per_mille'=> 'int',
		'amount'=> 'int',
		'nanostar_amount'=> 'int',
	];

}