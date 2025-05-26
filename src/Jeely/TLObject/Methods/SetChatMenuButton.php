<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\MenuButton;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class SetChatMenuButton
* @description Use this method to change the bot's menu button in a private chat, or the default menu button. Returns True on success.
*
*
* @param	int $chat_id Unique identifier for the target private chat. If not specified, default bot's menu button will be changed
* @param	MenuButton $menu_button A JSON-serialized object for the bot's new menu button. Defaults to MenuButtonDefault
*
*
* @property	int $chat_id Unique identifier for the target private chat. If not specified, default bot's menu button will be changed
* @property	MenuButton $menu_button A JSON-serialized object for the bot's new menu button. Defaults to MenuButtonDefault
*
*/

#[Casts(['bool'])]
class SetChatMenuButton extends MethodDefinition implements MethodDefinitionInterface
{

}