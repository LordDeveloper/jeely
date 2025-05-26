<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class TransactionPartnerAffiliateProgram
* @description Describes the affiliate program that issued the affiliate commission received via this transaction.
*
* @property	string $type Type of the transaction partner, always “affiliate_program”
* @method	string getType() Type of the transaction partner, always “affiliate_program”
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	User $sponsor_user Optional. Information about the bot that sponsored the affiliate program
* @method	User getSponsorUser() Optional. Information about the bot that sponsored the affiliate program
* @method	bool isSponsorUser()
* @method	$this setSponsorUser()
* @method	$this unsetSponsorUser()

* @property	int $commission_per_mille The number of Telegram Stars received by the bot for each 1000 Telegram Stars received by the affiliate program sponsor from referred users
* @method	int getCommissionPerMille() The number of Telegram Stars received by the bot for each 1000 Telegram Stars received by the affiliate program sponsor from referred users
* @method	bool isCommissionPerMille()
* @method	$this setCommissionPerMille()
* @method	$this unsetCommissionPerMille()

*/

class TransactionPartnerAffiliateProgram extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'sponsor_user'=> 'User',
		'commission_per_mille'=> 'int',
	];

}