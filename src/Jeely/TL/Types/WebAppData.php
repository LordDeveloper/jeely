<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class WebAppData
 * @description Describes data sent from a Web App to the bot.
 *
 * @method string getData() The data. Be aware that a bad client can send arbitrary data in this field.
 * @method string getButtonText() Text of the web_app keyboard button from which the Web App was opened. Be aware that a bad client can send arbitrary data in this field.
 *
 * @method bool isData()
 * @method bool isButtonText()
 *
 * @method $this setData()
 * @method $this setButtonText()
 *
 * @method $this unsetData()
 * @method $this unsetButtonText()
 *
 * @property string $data The data. Be aware that a bad client can send arbitrary data in this field.
 * @property string $button_text Text of the web_app keyboard button from which the Web App was opened. Be aware that a bad client can send arbitrary data in this field.
 *
 * @see https://core.telegram.org/bots/api#webappdata 
 */
class WebAppData extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
		'data' => 'string',
		'button_text' => 'string',
	];
}