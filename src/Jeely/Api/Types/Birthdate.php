<?php

namespace Jeely\Api\Types;

/**
 * @class Birthdate
 * @description Describes the birthdate of a user.
 *
 * @method int getDay() Day of the user's birth; 1-31
 * @method int getMonth() Month of the user's birth; 1-12
 * @method int getYear() Optional. Year of the user's birth
 *
 * @method bool isDay()
 * @method bool isMonth()
 * @method bool isYear()
 *
 * @method $this setDay()
 * @method $this setMonth()
 * @method $this setYear()
 *
 * @method $this unsetDay()
 * @method $this unsetMonth()
 * @method $this unsetYear()
 *
 * @property int $day Day of the user's birth; 1-31
 * @property int $month Month of the user's birth; 1-12
 * @property int $year Optional. Year of the user's birth
 *
 * @see https://core.telegram.org/bots/api#birthdate
 */
class Birthdate extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'day' => 'int',
        'month' => 'int',
        'year' => 'int',
    ];
}
