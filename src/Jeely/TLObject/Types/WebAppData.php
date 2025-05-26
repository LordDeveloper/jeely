<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class WebAppData
* @description Describes data sent from a Web App to the bot.
*
* @property	string $data The data. Be aware that a bad client can send arbitrary data in this field.
* @method	string getData() The data. Be aware that a bad client can send arbitrary data in this field.
* @method	bool isData()
* @method	$this setData()
* @method	$this unsetData()

* @property	string $button_text Text of the web_app keyboard button from which the Web App was opened. Be aware that a bad client can send arbitrary data in this field.
* @method	string getButtonText() Text of the web_app keyboard button from which the Web App was opened. Be aware that a bad client can send arbitrary data in this field.
* @method	bool isButtonText()
* @method	$this setButtonText()
* @method	$this unsetButtonText()

*/

class WebAppData extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'data'=> 'string',
		'button_text'=> 'string',
	];

}