<?php

namespace Jeely\Api\Types;

/**
 * @class Dice
 * @description This object represents an animated emoji that displays a random value.
 *
 * @method string getEmoji() Emoji on which the dice throw animation is based
 * @method int getValue() Value of the dice, 1-6 for “”, “” and “” base emoji, 1-5 for “” and “” base emoji, 1-64 for “” base emoji
 *
 * @method bool isEmoji()
 * @method bool isValue()
 *
 * @method $this setEmoji()
 * @method $this setValue()
 *
 * @method $this unsetEmoji()
 * @method $this unsetValue()
 *
 * @property string $emoji Emoji on which the dice throw animation is based
 * @property int $value Value of the dice, 1-6 for “”, “” and “” base emoji, 1-5 for “” and “” base emoji, 1-64 for “” base emoji
 *
 * @see https://core.telegram.org/bots/api#dice
 */
class Dice extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'emoji' => 'string',
        'value' => 'int',
    ];
}
