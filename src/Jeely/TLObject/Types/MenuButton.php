<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;
use Jeely\TLObject\Types\MenuButtonCommands;
use Jeely\TLObject\Types\MenuButtonWebApp;
use Jeely\TLObject\Types\MenuButtonDefault;


/**
* @class MenuButton
* @description This object describes the bot's menu button in a private chat. It should be one of
*
*/

class MenuButton extends TLObject
{
	const JSON_PROPERTY_MAP = [
		MenuButtonCommands::class,
		MenuButtonWebApp::class,
		MenuButtonDefault::class,
	];

}