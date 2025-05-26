<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class ChatBoostSourceGiveaway
* @description The boost was obtained by the creation of a Telegram Premium or a Telegram Star giveaway. This boosts the chat 4 times for the duration of the corresponding Telegram Premium subscription for Telegram Premium giveaways and prize_star_count / 500 times for one year for Telegram Star giveaways.
*
* @property	string $source Source of the boost, always “giveaway”
* @method	string getSource() Source of the boost, always “giveaway”
* @method	bool isSource()
* @method	$this setSource()
* @method	$this unsetSource()

* @property	int $giveaway_message_id Identifier of a message in the chat with the giveaway; the message could have been deleted already. May be 0 if the message isn't sent yet.
* @method	int getGiveawayMessageId() Identifier of a message in the chat with the giveaway; the message could have been deleted already. May be 0 if the message isn't sent yet.
* @method	bool isGiveawayMessageId()
* @method	$this setGiveawayMessageId()
* @method	$this unsetGiveawayMessageId()

* @property	User $user Optional. User that won the prize in the giveaway if any; for Telegram Premium giveaways only
* @method	User getUser() Optional. User that won the prize in the giveaway if any; for Telegram Premium giveaways only
* @method	bool isUser()
* @method	$this setUser()
* @method	$this unsetUser()

* @property	int $prize_star_count Optional. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only
* @method	int getPrizeStarCount() Optional. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only
* @method	bool isPrizeStarCount()
* @method	$this setPrizeStarCount()
* @method	$this unsetPrizeStarCount()

* @property	bool $is_unclaimed Optional. True, if the giveaway was completed, but there was no user to win the prize
* @method	bool getIsUnclaimed() Optional. True, if the giveaway was completed, but there was no user to win the prize
* @method	bool isIsUnclaimed()
* @method	$this setIsUnclaimed()
* @method	$this unsetIsUnclaimed()

*/

class ChatBoostSourceGiveaway extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'source'=> 'string',
		'giveaway_message_id'=> 'int',
		'user'=> 'User',
		'prize_star_count'=> 'int',
		'is_unclaimed'=> 'bool',
	];

}