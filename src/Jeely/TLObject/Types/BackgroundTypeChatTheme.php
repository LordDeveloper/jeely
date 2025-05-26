<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class BackgroundTypeChatTheme
* @description The background is taken directly from a built-in chat theme.
*
* @property	string $type Type of the background, always “chat_theme”
* @method	string getType() Type of the background, always “chat_theme”
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	string $theme_name Name of the chat theme, which is usually an emoji
* @method	string getThemeName() Name of the chat theme, which is usually an emoji
* @method	bool isThemeName()
* @method	$this setThemeName()
* @method	$this unsetThemeName()

*/

class BackgroundTypeChatTheme extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'theme_name'=> 'string',
	];

}