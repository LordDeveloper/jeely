<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\MenuButton;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class GetChatMenuButton
* @description Use this method to get the current value of the bot's menu button in a private chat, or the default menu button. Returns MenuButton on success.
*
*
* @param	int $chat_id Unique identifier for the target private chat. If not specified, default bot's menu button will be returned
*
*
* @property	int $chat_id Unique identifier for the target private chat. If not specified, default bot's menu button will be returned
*
*/

#[Casts(['Jeely\\TLObject\\Types\\MenuButton'])]
class GetChatMenuButton extends MethodDefinition implements MethodDefinitionInterface
{

}