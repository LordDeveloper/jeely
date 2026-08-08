<?php

namespace Jeely\Api\Types;

/**
 * @class Gifts
 * @description This object represent a list of gifts.
 *
 * @method Gift[] getGifts() The list of gifts
 *
 * @method bool isGifts()
 *
 * @method $this setGifts()
 *
 * @method $this unsetGifts()
 *
 * @property Gift[] $gifts The list of gifts
 *
 * @see https://core.telegram.org/bots/api#gifts
 */
class Gifts extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'gifts' => 'Gift[]',
    ];
}
