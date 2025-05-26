<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class ReplyKeyboardMarkup
* @description This object represents a custom keyboard with reply options (see Introduction to bots for details and examples). Not supported in channels and for messages sent on behalf of a Telegram Business account.
*
* @property	KeyboardButton[][] $keyboard Array of button rows, each represented by an Array of KeyboardButton objects
* @method	KeyboardButton[][] getKeyboard() Array of button rows, each represented by an Array of KeyboardButton objects
* @method	bool isKeyboard()
* @method	$this setKeyboard()
* @method	$this unsetKeyboard()

* @property	bool $is_persistent Optional. Requests clients to always show the keyboard when the regular keyboard is hidden. Defaults to false, in which case the custom keyboard can be hidden and opened with a keyboard icon.
* @method	bool getIsPersistent() Optional. Requests clients to always show the keyboard when the regular keyboard is hidden. Defaults to false, in which case the custom keyboard can be hidden and opened with a keyboard icon.
* @method	bool isIsPersistent()
* @method	$this setIsPersistent()
* @method	$this unsetIsPersistent()

* @property	bool $resize_keyboard Optional. Requests clients to resize the keyboard vertically for optimal fit (e.g., make the keyboard smaller if there are just two rows of buttons). Defaults to false, in which case the custom keyboard is always of the same height as the app's standard keyboard.
* @method	bool getResizeKeyboard() Optional. Requests clients to resize the keyboard vertically for optimal fit (e.g., make the keyboard smaller if there are just two rows of buttons). Defaults to false, in which case the custom keyboard is always of the same height as the app's standard keyboard.
* @method	bool isResizeKeyboard()
* @method	$this setResizeKeyboard()
* @method	$this unsetResizeKeyboard()

* @property	bool $one_time_keyboard Optional. Requests clients to hide the keyboard as soon as it's been used. The keyboard will still be available, but clients will automatically display the usual letter-keyboard in the chat - the user can press a special button in the input field to see the custom keyboard again. Defaults to false.
* @method	bool getOneTimeKeyboard() Optional. Requests clients to hide the keyboard as soon as it's been used. The keyboard will still be available, but clients will automatically display the usual letter-keyboard in the chat - the user can press a special button in the input field to see the custom keyboard again. Defaults to false.
* @method	bool isOneTimeKeyboard()
* @method	$this setOneTimeKeyboard()
* @method	$this unsetOneTimeKeyboard()

* @property	string $input_field_placeholder Optional. The placeholder to be shown in the input field when the keyboard is active; 1-64 characters
* @method	string getInputFieldPlaceholder() Optional. The placeholder to be shown in the input field when the keyboard is active; 1-64 characters
* @method	bool isInputFieldPlaceholder()
* @method	$this setInputFieldPlaceholder()
* @method	$this unsetInputFieldPlaceholder()

* @property	bool $selective Optional. Use this parameter if you want to show the keyboard to specific users only. Targets: 1) users that are @mentioned in the text of the Message object; 2) if the bot's message is a reply to a message in the same chat and forum topic, sender of the original message.Example: A user requests to change the bot's language, bot replies to the request with a keyboard to select the new language. Other users in the group don't see the keyboard.
* @method	bool getSelective() Optional. Use this parameter if you want to show the keyboard to specific users only. Targets: 1) users that are @mentioned in the text of the Message object; 2) if the bot's message is a reply to a message in the same chat and forum topic, sender of the original message.Example: A user requests to change the bot's language, bot replies to the request with a keyboard to select the new language. Other users in the group don't see the keyboard.
* @method	bool isSelective()
* @method	$this setSelective()
* @method	$this unsetSelective()

*/

class ReplyKeyboardMarkup extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'keyboard'=> 'KeyboardButton[][]',
		'is_persistent'=> 'bool',
		'resize_keyboard'=> 'bool',
		'one_time_keyboard'=> 'bool',
		'input_field_placeholder'=> 'string',
		'selective'=> 'bool',
	];

}