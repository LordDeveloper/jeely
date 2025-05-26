<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;
use Jeely\TLObject\Types\TransactionPartnerUser;
use Jeely\TLObject\Types\TransactionPartnerChat;
use Jeely\TLObject\Types\TransactionPartnerAffiliateProgram;
use Jeely\TLObject\Types\TransactionPartnerFragment;
use Jeely\TLObject\Types\TransactionPartnerTelegramAds;
use Jeely\TLObject\Types\TransactionPartnerTelegramApi;
use Jeely\TLObject\Types\TransactionPartnerOther;


/**
* @class TransactionPartner
* @description This object describes the source of a transaction, or its recipient for outgoing transactions. Currently, it can be one of
*
*/

class TransactionPartner extends TLObject
{
	const JSON_PROPERTY_MAP = [
		TransactionPartnerUser::class,
		TransactionPartnerChat::class,
		TransactionPartnerAffiliateProgram::class,
		TransactionPartnerFragment::class,
		TransactionPartnerTelegramAds::class,
		TransactionPartnerTelegramApi::class,
		TransactionPartnerOther::class,
	];

}