<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class Dice
* @description This object represents an animated emoji that displays a random value.
*
* @property	string $emoji Emoji on which the dice throw animation is based
* @method	string getEmoji() Emoji on which the dice throw animation is based
* @method	bool isEmoji()
* @method	$this setEmoji()
* @method	$this unsetEmoji()

* @property	int $value Value of the dice, 1-6 for “🎲”, “🎯” and “🎳” base emoji, 1-5 for “🏀” and “⚽” base emoji, 1-64 for “🎰” base emoji
* @method	int getValue() Value of the dice, 1-6 for “🎲”, “🎯” and “🎳” base emoji, 1-5 for “🏀” and “⚽” base emoji, 1-64 for “🎰” base emoji
* @method	bool isValue()
* @method	$this setValue()
* @method	$this unsetValue()

*/

class Dice extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'emoji'=> 'string',
		'value'=> 'int',
	];

}