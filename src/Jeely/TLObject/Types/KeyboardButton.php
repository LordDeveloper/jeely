<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class KeyboardButton
* @description This object represents one button of the reply keyboard. At most one of the optional fields must be used to specify type of the button. For simple text buttons, String can be used instead of this object to specify the button text.
*
* @property	string $text Text of the button. If none of the optional fields are used, it will be sent as a message when the button is pressed
* @method	string getText() Text of the button. If none of the optional fields are used, it will be sent as a message when the button is pressed
* @method	bool isText()
* @method	$this setText()
* @method	$this unsetText()

* @property	KeyboardButtonRequestUsers $request_users Optional. If specified, pressing the button will open a list of suitable users. Identifiers of selected users will be sent to the bot in a “users_shared” service message. Available in private chats only.
* @method	KeyboardButtonRequestUsers getRequestUsers() Optional. If specified, pressing the button will open a list of suitable users. Identifiers of selected users will be sent to the bot in a “users_shared” service message. Available in private chats only.
* @method	bool isRequestUsers()
* @method	$this setRequestUsers()
* @method	$this unsetRequestUsers()

* @property	KeyboardButtonRequestChat $request_chat Optional. If specified, pressing the button will open a list of suitable chats. Tapping on a chat will send its identifier to the bot in a “chat_shared” service message. Available in private chats only.
* @method	KeyboardButtonRequestChat getRequestChat() Optional. If specified, pressing the button will open a list of suitable chats. Tapping on a chat will send its identifier to the bot in a “chat_shared” service message. Available in private chats only.
* @method	bool isRequestChat()
* @method	$this setRequestChat()
* @method	$this unsetRequestChat()

* @property	bool $request_contact Optional. If True, the user's phone number will be sent as a contact when the button is pressed. Available in private chats only.
* @method	bool getRequestContact() Optional. If True, the user's phone number will be sent as a contact when the button is pressed. Available in private chats only.
* @method	bool isRequestContact()
* @method	$this setRequestContact()
* @method	$this unsetRequestContact()

* @property	bool $request_location Optional. If True, the user's current location will be sent when the button is pressed. Available in private chats only.
* @method	bool getRequestLocation() Optional. If True, the user's current location will be sent when the button is pressed. Available in private chats only.
* @method	bool isRequestLocation()
* @method	$this setRequestLocation()
* @method	$this unsetRequestLocation()

* @property	KeyboardButtonPollType $request_poll Optional. If specified, the user will be asked to create a poll and send it to the bot when the button is pressed. Available in private chats only.
* @method	KeyboardButtonPollType getRequestPoll() Optional. If specified, the user will be asked to create a poll and send it to the bot when the button is pressed. Available in private chats only.
* @method	bool isRequestPoll()
* @method	$this setRequestPoll()
* @method	$this unsetRequestPoll()

* @property	WebAppInfo $web_app Optional. If specified, the described Web App will be launched when the button is pressed. The Web App will be able to send a “web_app_data” service message. Available in private chats only.
* @method	WebAppInfo getWebApp() Optional. If specified, the described Web App will be launched when the button is pressed. The Web App will be able to send a “web_app_data” service message. Available in private chats only.
* @method	bool isWebApp()
* @method	$this setWebApp()
* @method	$this unsetWebApp()

*/

class KeyboardButton extends TLObject implements \Jeely\Contracts\KeyboardButtonInterface
{
	const JSON_PROPERTY_MAP = [
		'text'=> 'string',
		'request_users'=> 'KeyboardButtonRequestUsers',
		'request_chat'=> 'KeyboardButtonRequestChat',
		'request_contact'=> 'bool',
		'request_location'=> 'bool',
		'request_poll'=> 'KeyboardButtonPollType',
		'web_app'=> 'WebAppInfo',
	];

}