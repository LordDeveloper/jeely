<?php

namespace Jeely\Api\Types;

/**
 * @class GiveawayCompleted
 * @description This object represents a service message about the completion of a giveaway without public winners.
 *
 * @method int getWinnerCount() Number of winners in the giveaway
 * @method int getUnclaimedPrizeCount() Optional. Number of undistributed prizes
 * @method Message getGiveawayMessage() Optional. Message with the giveaway that was completed, if it wasn't deleted
 * @method bool getIsStarGiveaway() Optional. True, if the giveaway is a Telegram Star giveaway. Otherwise, currently, the giveaway is a Telegram Premium giveaway.
 *
 * @method bool isWinnerCount()
 * @method bool isUnclaimedPrizeCount()
 * @method bool isGiveawayMessage()
 * @method bool isIsStarGiveaway()
 *
 * @method $this setWinnerCount()
 * @method $this setUnclaimedPrizeCount()
 * @method $this setGiveawayMessage()
 * @method $this setIsStarGiveaway()
 *
 * @method $this unsetWinnerCount()
 * @method $this unsetUnclaimedPrizeCount()
 * @method $this unsetGiveawayMessage()
 * @method $this unsetIsStarGiveaway()
 *
 * @property int $winner_count Number of winners in the giveaway
 * @property int $unclaimed_prize_count Optional. Number of undistributed prizes
 * @property Message $giveaway_message Optional. Message with the giveaway that was completed, if it wasn't deleted
 * @property bool $is_star_giveaway Optional. True, if the giveaway is a Telegram Star giveaway. Otherwise, currently, the giveaway is a Telegram Premium giveaway.
 *
 * @see https://core.telegram.org/bots/api#giveawaycompleted
 */
class GiveawayCompleted extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'winner_count' => 'int',
        'unclaimed_prize_count' => 'int',
        'giveaway_message' => 'Message',
        'is_star_giveaway' => 'bool',
    ];
}
