<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class InlineKeyboardButton
* @description This object represents one button of an inline keyboard. Exactly one of the optional fields must be used to specify type of the button.
*
* @property	string $text Label text on the button
* @method	string getText() Label text on the button
* @method	bool isText()
* @method	$this setText()
* @method	$this unsetText()

* @property	string $url Optional. HTTP or tg:// URL to be opened when the button is pressed. Links tg://user?id=<user_id> can be used to mention a user by their identifier without using a username, if this is allowed by their privacy settings.
* @method	string getUrl() Optional. HTTP or tg:// URL to be opened when the button is pressed. Links tg://user?id=<user_id> can be used to mention a user by their identifier without using a username, if this is allowed by their privacy settings.
* @method	bool isUrl()
* @method	$this setUrl()
* @method	$this unsetUrl()

* @property	string $callback_data Optional. Data to be sent in a callback query to the bot when the button is pressed, 1-64 bytes
* @method	string getCallbackData() Optional. Data to be sent in a callback query to the bot when the button is pressed, 1-64 bytes
* @method	bool isCallbackData()
* @method	$this setCallbackData()
* @method	$this unsetCallbackData()

* @property	WebAppInfo $web_app Optional. Description of the Web App that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method answerWebAppQuery. Available only in private chats between a user and the bot. Not supported for messages sent on behalf of a Telegram Business account.
* @method	WebAppInfo getWebApp() Optional. Description of the Web App that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method answerWebAppQuery. Available only in private chats between a user and the bot. Not supported for messages sent on behalf of a Telegram Business account.
* @method	bool isWebApp()
* @method	$this setWebApp()
* @method	$this unsetWebApp()

* @property	LoginUrl $login_url Optional. An HTTPS URL used to automatically authorize the user. Can be used as a replacement for the Telegram Login Widget.
* @method	LoginUrl getLoginUrl() Optional. An HTTPS URL used to automatically authorize the user. Can be used as a replacement for the Telegram Login Widget.
* @method	bool isLoginUrl()
* @method	$this setLoginUrl()
* @method	$this unsetLoginUrl()

* @property	string $switch_inline_query Optional. If set, pressing the button will prompt the user to select one of their chats, open that chat and insert the bot's username and the specified inline query in the input field. May be empty, in which case just the bot's username will be inserted. Not supported for messages sent on behalf of a Telegram Business account.
* @method	string getSwitchInlineQuery() Optional. If set, pressing the button will prompt the user to select one of their chats, open that chat and insert the bot's username and the specified inline query in the input field. May be empty, in which case just the bot's username will be inserted. Not supported for messages sent on behalf of a Telegram Business account.
* @method	bool isSwitchInlineQuery()
* @method	$this setSwitchInlineQuery()
* @method	$this unsetSwitchInlineQuery()

* @property	string $switch_inline_query_current_chat Optional. If set, pressing the button will insert the bot's username and the specified inline query in the current chat's input field. May be empty, in which case only the bot's username will be inserted.This offers a quick way for the user to open your bot in inline mode in the same chat - good for selecting something from multiple options. Not supported in channels and for messages sent on behalf of a Telegram Business account.
* @method	string getSwitchInlineQueryCurrentChat() Optional. If set, pressing the button will insert the bot's username and the specified inline query in the current chat's input field. May be empty, in which case only the bot's username will be inserted.This offers a quick way for the user to open your bot in inline mode in the same chat - good for selecting something from multiple options. Not supported in channels and for messages sent on behalf of a Telegram Business account.
* @method	bool isSwitchInlineQueryCurrentChat()
* @method	$this setSwitchInlineQueryCurrentChat()
* @method	$this unsetSwitchInlineQueryCurrentChat()

* @property	SwitchInlineQueryChosenChat $switch_inline_query_chosen_chat Optional. If set, pressing the button will prompt the user to select one of their chats of the specified type, open that chat and insert the bot's username and the specified inline query in the input field. Not supported for messages sent on behalf of a Telegram Business account.
* @method	SwitchInlineQueryChosenChat getSwitchInlineQueryChosenChat() Optional. If set, pressing the button will prompt the user to select one of their chats of the specified type, open that chat and insert the bot's username and the specified inline query in the input field. Not supported for messages sent on behalf of a Telegram Business account.
* @method	bool isSwitchInlineQueryChosenChat()
* @method	$this setSwitchInlineQueryChosenChat()
* @method	$this unsetSwitchInlineQueryChosenChat()

* @property	CopyTextButton $copy_text Optional. Description of the button that copies the specified text to the clipboard.
* @method	CopyTextButton getCopyText() Optional. Description of the button that copies the specified text to the clipboard.
* @method	bool isCopyText()
* @method	$this setCopyText()
* @method	$this unsetCopyText()

* @property	CallbackGame $callback_game Optional. Description of the game that will be launched when the user presses the button.NOTE: This type of button must always be the first button in the first row.
* @method	CallbackGame getCallbackGame() Optional. Description of the game that will be launched when the user presses the button.NOTE: This type of button must always be the first button in the first row.
* @method	bool isCallbackGame()
* @method	$this setCallbackGame()
* @method	$this unsetCallbackGame()

* @property	bool $pay Optional. Specify True, to send a Pay button. Substrings “⭐” and “XTR” in the buttons's text will be replaced with a Telegram Star icon.NOTE: This type of button must always be the first button in the first row and can only be used in invoice messages.
* @method	bool getPay() Optional. Specify True, to send a Pay button. Substrings “⭐” and “XTR” in the buttons's text will be replaced with a Telegram Star icon.NOTE: This type of button must always be the first button in the first row and can only be used in invoice messages.
* @method	bool isPay()
* @method	$this setPay()
* @method	$this unsetPay()

*/

class InlineKeyboardButton extends TLObject implements \Jeely\Contracts\KeyboardButtonInterface
{
	const JSON_PROPERTY_MAP = [
		'text'=> 'string',
		'url'=> 'string',
		'callback_data'=> 'string',
		'web_app'=> 'WebAppInfo',
		'login_url'=> 'LoginUrl',
		'switch_inline_query'=> 'string',
		'switch_inline_query_current_chat'=> 'string',
		'switch_inline_query_chosen_chat'=> 'SwitchInlineQueryChosenChat',
		'copy_text'=> 'CopyTextButton',
		'callback_game'=> 'CallbackGame',
		'pay'=> 'bool',
	];

}