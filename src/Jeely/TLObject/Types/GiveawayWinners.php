<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class GiveawayWinners
* @description This object represents a message about the completion of a giveaway with public winners.
*
* @property	Chat $chat The chat that created the giveaway
* @method	Chat getChat() The chat that created the giveaway
* @method	bool isChat()
* @method	$this setChat()
* @method	$this unsetChat()

* @property	int $giveaway_message_id Identifier of the message with the giveaway in the chat
* @method	int getGiveawayMessageId() Identifier of the message with the giveaway in the chat
* @method	bool isGiveawayMessageId()
* @method	$this setGiveawayMessageId()
* @method	$this unsetGiveawayMessageId()

* @property	int $winners_selection_date Point in time (Unix timestamp) when winners of the giveaway were selected
* @method	int getWinnersSelectionDate() Point in time (Unix timestamp) when winners of the giveaway were selected
* @method	bool isWinnersSelectionDate()
* @method	$this setWinnersSelectionDate()
* @method	$this unsetWinnersSelectionDate()

* @property	int $winner_count Total number of winners in the giveaway
* @method	int getWinnerCount() Total number of winners in the giveaway
* @method	bool isWinnerCount()
* @method	$this setWinnerCount()
* @method	$this unsetWinnerCount()

* @property	User[] $winners List of up to 100 winners of the giveaway
* @method	User[] getWinners() List of up to 100 winners of the giveaway
* @method	bool isWinners()
* @method	$this setWinners()
* @method	$this unsetWinners()

* @property	int $additional_chat_count Optional. The number of other chats the user had to join in order to be eligible for the giveaway
* @method	int getAdditionalChatCount() Optional. The number of other chats the user had to join in order to be eligible for the giveaway
* @method	bool isAdditionalChatCount()
* @method	$this setAdditionalChatCount()
* @method	$this unsetAdditionalChatCount()

* @property	int $prize_star_count Optional. The number of Telegram Stars that were split between giveaway winners; for Telegram Star giveaways only
* @method	int getPrizeStarCount() Optional. The number of Telegram Stars that were split between giveaway winners; for Telegram Star giveaways only
* @method	bool isPrizeStarCount()
* @method	$this setPrizeStarCount()
* @method	$this unsetPrizeStarCount()

* @property	int $premium_subscription_month_count Optional. The number of months the Telegram Premium subscription won from the giveaway will be active for; for Telegram Premium giveaways only
* @method	int getPremiumSubscriptionMonthCount() Optional. The number of months the Telegram Premium subscription won from the giveaway will be active for; for Telegram Premium giveaways only
* @method	bool isPremiumSubscriptionMonthCount()
* @method	$this setPremiumSubscriptionMonthCount()
* @method	$this unsetPremiumSubscriptionMonthCount()

* @property	int $unclaimed_prize_count Optional. Number of undistributed prizes
* @method	int getUnclaimedPrizeCount() Optional. Number of undistributed prizes
* @method	bool isUnclaimedPrizeCount()
* @method	$this setUnclaimedPrizeCount()
* @method	$this unsetUnclaimedPrizeCount()

* @property	bool $only_new_members Optional. True, if only users who had joined the chats after the giveaway started were eligible to win
* @method	bool getOnlyNewMembers() Optional. True, if only users who had joined the chats after the giveaway started were eligible to win
* @method	bool isOnlyNewMembers()
* @method	$this setOnlyNewMembers()
* @method	$this unsetOnlyNewMembers()

* @property	bool $was_refunded Optional. True, if the giveaway was canceled because the payment for it was refunded
* @method	bool getWasRefunded() Optional. True, if the giveaway was canceled because the payment for it was refunded
* @method	bool isWasRefunded()
* @method	$this setWasRefunded()
* @method	$this unsetWasRefunded()

* @property	string $prize_description Optional. Description of additional giveaway prize
* @method	string getPrizeDescription() Optional. Description of additional giveaway prize
* @method	bool isPrizeDescription()
* @method	$this setPrizeDescription()
* @method	$this unsetPrizeDescription()

*/

class GiveawayWinners extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'chat'=> 'Chat',
		'giveaway_message_id'=> 'int',
		'winners_selection_date'=> 'int',
		'winner_count'=> 'int',
		'winners'=> 'User[]',
		'additional_chat_count'=> 'int',
		'prize_star_count'=> 'int',
		'premium_subscription_month_count'=> 'int',
		'unclaimed_prize_count'=> 'int',
		'only_new_members'=> 'bool',
		'was_refunded'=> 'bool',
		'prize_description'=> 'string',
	];

}