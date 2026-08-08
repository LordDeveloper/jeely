<?php

namespace Jeely\Api\Types;

/**
 * @class StarAmount
 * @description Describes an amount of Telegram Stars.
 *
 * @method int getAmount() Integer amount of Telegram Stars, rounded to 0; can be negative
 * @method int getNanostarAmount() Optional. The number of 1/1000000000 shares of Telegram Stars; from -999999999 to 999999999; can be negative if and only if amount is non-positive
 *
 * @method bool isAmount()
 * @method bool isNanostarAmount()
 *
 * @method $this setAmount()
 * @method $this setNanostarAmount()
 *
 * @method $this unsetAmount()
 * @method $this unsetNanostarAmount()
 *
 * @property int $amount Integer amount of Telegram Stars, rounded to 0; can be negative
 * @property int $nanostar_amount Optional. The number of 1/1000000000 shares of Telegram Stars; from -999999999 to 999999999; can be negative if and only if amount is non-positive
 *
 * @see https://core.telegram.org/bots/api#staramount
 */
class StarAmount extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'amount' => 'int',
        'nanostar_amount' => 'int',
    ];
}
