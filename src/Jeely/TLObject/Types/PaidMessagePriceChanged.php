<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class PaidMessagePriceChanged
* @description Describes a service message about a change in the price of paid messages within a chat.
*
* @property	int $paid_message_star_count The new number of Telegram Stars that must be paid by non-administrator users of the supergroup chat for each sent message
* @method	int getPaidMessageStarCount() The new number of Telegram Stars that must be paid by non-administrator users of the supergroup chat for each sent message
* @method	bool isPaidMessageStarCount()
* @method	$this setPaidMessageStarCount()
* @method	$this unsetPaidMessageStarCount()

*/

class PaidMessagePriceChanged extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'paid_message_star_count'=> 'int',
	];

}