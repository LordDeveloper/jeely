<?php

namespace Jeely\Api\Types;

/**
 * @class GiveawayWinners
 * @description This object represents a message about the completion of a giveaway with public winners.
 *
 * @method Chat getChat() The chat that created the giveaway
 * @method int getGiveawayMessageId() Identifier of the message with the giveaway in the chat
 * @method int getWinnersSelectionDate() Point in time (Unix timestamp) when winners of the giveaway were selected
 * @method int getWinnerCount() Total number of winners in the giveaway
 * @method User[] getWinners() List of up to 100 winners of the giveaway
 * @method int getAdditionalChatCount() Optional. The number of other chats the user had to join in order to be eligible for the giveaway
 * @method int getPrizeStarCount() Optional. The number of Telegram Stars that were split between giveaway winners; for Telegram Star giveaways only
 * @method int getPremiumSubscriptionMonthCount() Optional. The number of months the Telegram Premium subscription won from the giveaway will be active for; for Telegram Premium giveaways only
 * @method int getUnclaimedPrizeCount() Optional. Number of undistributed prizes
 * @method bool getOnlyNewMembers() Optional. True, if only users who had joined the chats after the giveaway started were eligible to win
 * @method bool getWasRefunded() Optional. True, if the giveaway was canceled because the payment for it was refunded
 * @method string getPrizeDescription() Optional. Description of additional giveaway prize
 *
 * @method bool isChat()
 * @method bool isGiveawayMessageId()
 * @method bool isWinnersSelectionDate()
 * @method bool isWinnerCount()
 * @method bool isWinners()
 * @method bool isAdditionalChatCount()
 * @method bool isPrizeStarCount()
 * @method bool isPremiumSubscriptionMonthCount()
 * @method bool isUnclaimedPrizeCount()
 * @method bool isOnlyNewMembers()
 * @method bool isWasRefunded()
 * @method bool isPrizeDescription()
 *
 * @method $this setChat()
 * @method $this setGiveawayMessageId()
 * @method $this setWinnersSelectionDate()
 * @method $this setWinnerCount()
 * @method $this setWinners()
 * @method $this setAdditionalChatCount()
 * @method $this setPrizeStarCount()
 * @method $this setPremiumSubscriptionMonthCount()
 * @method $this setUnclaimedPrizeCount()
 * @method $this setOnlyNewMembers()
 * @method $this setWasRefunded()
 * @method $this setPrizeDescription()
 *
 * @method $this unsetChat()
 * @method $this unsetGiveawayMessageId()
 * @method $this unsetWinnersSelectionDate()
 * @method $this unsetWinnerCount()
 * @method $this unsetWinners()
 * @method $this unsetAdditionalChatCount()
 * @method $this unsetPrizeStarCount()
 * @method $this unsetPremiumSubscriptionMonthCount()
 * @method $this unsetUnclaimedPrizeCount()
 * @method $this unsetOnlyNewMembers()
 * @method $this unsetWasRefunded()
 * @method $this unsetPrizeDescription()
 *
 * @property Chat $chat The chat that created the giveaway
 * @property int $giveaway_message_id Identifier of the message with the giveaway in the chat
 * @property int $winners_selection_date Point in time (Unix timestamp) when winners of the giveaway were selected
 * @property int $winner_count Total number of winners in the giveaway
 * @property User[] $winners List of up to 100 winners of the giveaway
 * @property int $additional_chat_count Optional. The number of other chats the user had to join in order to be eligible for the giveaway
 * @property int $prize_star_count Optional. The number of Telegram Stars that were split between giveaway winners; for Telegram Star giveaways only
 * @property int $premium_subscription_month_count Optional. The number of months the Telegram Premium subscription won from the giveaway will be active for; for Telegram Premium giveaways only
 * @property int $unclaimed_prize_count Optional. Number of undistributed prizes
 * @property bool $only_new_members Optional. True, if only users who had joined the chats after the giveaway started were eligible to win
 * @property bool $was_refunded Optional. True, if the giveaway was canceled because the payment for it was refunded
 * @property string $prize_description Optional. Description of additional giveaway prize
 *
 * @see https://core.telegram.org/bots/api#giveawaywinners
 */
class GiveawayWinners extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'chat' => 'Chat',
        'giveaway_message_id' => 'int',
        'winners_selection_date' => 'int',
        'winner_count' => 'int',
        'winners' => 'User[]',
        'additional_chat_count' => 'int',
        'prize_star_count' => 'int',
        'premium_subscription_month_count' => 'int',
        'unclaimed_prize_count' => 'int',
        'only_new_members' => 'bool',
        'was_refunded' => 'bool',
        'prize_description' => 'string',
    ];
}
