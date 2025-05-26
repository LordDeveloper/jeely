<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class InlineKeyboardMarkup
* @description This object represents an inline keyboard that appears right next to the message it belongs to.
*
* @property	InlineKeyboardButton[][] $inline_keyboard Array of button rows, each represented by an Array of InlineKeyboardButton objects
* @method	InlineKeyboardButton[][] getInlineKeyboard() Array of button rows, each represented by an Array of InlineKeyboardButton objects
* @method	bool isInlineKeyboard()
* @method	$this setInlineKeyboard()
* @method	$this unsetInlineKeyboard()

*/

class InlineKeyboardMarkup extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'inline_keyboard'=> 'InlineKeyboardButton[][]',
	];

}