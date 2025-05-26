<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class UnpinAllChatMessages
* @description Use this method to clear the list of pinned messages in a chat. If the chat is not a private chat, the bot must be an administrator in the chat for this to work and must have the 'can_pin_messages' administrator right in a supergroup or 'can_edit_messages' administrator right in a channel. Returns True on success.
*
*
* @param	int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
*
*
* @property	int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
*
*/

#[Casts(['bool'])]
class UnpinAllChatMessages extends MethodDefinition implements MethodDefinitionInterface
{

}