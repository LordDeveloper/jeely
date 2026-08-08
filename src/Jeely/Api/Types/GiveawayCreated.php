<?php

namespace Jeely\Api\Types;

/**
 * @class GiveawayCreated
 * @description This object represents a service message about the creation of a scheduled giveaway.
 *
 * @method int getPrizeStarCount() Optional. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only
 *
 * @method bool isPrizeStarCount()
 *
 * @method $this setPrizeStarCount()
 *
 * @method $this unsetPrizeStarCount()
 *
 * @property int $prize_star_count Optional. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only
 *
 * @see https://core.telegram.org/bots/api#giveawaycreated
 */
class GiveawayCreated extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'prize_star_count' => 'int',
    ];
}
