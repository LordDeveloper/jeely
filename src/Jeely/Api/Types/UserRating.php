<?php

namespace Jeely\Api\Types;

/**
 * @class UserRating
 * @description This object describes the rating of a user based on their Telegram Star spendings.
 *
 * @method int getLevel() Current level of the user, indicating their reliability when purchasing digital goods and services. A higher level suggests a more trustworthy customer; a negative level is likely reason for concern.
 * @method int getRating() Numerical value of the user's rating; the higher the rating, the better
 * @method int getCurrentLevelRating() The rating value required to get the current level
 * @method int getNextLevelRating() Optional. The rating value required to get to the next level; omitted if the maximum level was reached
 *
 * @method bool isLevel()
 * @method bool isRating()
 * @method bool isCurrentLevelRating()
 * @method bool isNextLevelRating()
 *
 * @method $this setLevel()
 * @method $this setRating()
 * @method $this setCurrentLevelRating()
 * @method $this setNextLevelRating()
 *
 * @method $this unsetLevel()
 * @method $this unsetRating()
 * @method $this unsetCurrentLevelRating()
 * @method $this unsetNextLevelRating()
 *
 * @property int $level Current level of the user, indicating their reliability when purchasing digital goods and services. A higher level suggests a more trustworthy customer; a negative level is likely reason for concern.
 * @property int $rating Numerical value of the user's rating; the higher the rating, the better
 * @property int $current_level_rating The rating value required to get the current level
 * @property int $next_level_rating Optional. The rating value required to get to the next level; omitted if the maximum level was reached
 *
 * @see https://core.telegram.org/bots/api#userrating
 */
class UserRating extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'level' => 'int',
        'rating' => 'int',
        'current_level_rating' => 'int',
        'next_level_rating' => 'int',
    ];
}
