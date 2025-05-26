<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class UnpinAllGeneralForumTopicMessages
* @description Use this method to clear the list of pinned messages in a General forum topic. The bot must be an administrator in the chat for this to work and must have the can_pin_messages administrator right in the supergroup. Returns True on success.
*
*
* @param	int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
*
*
* @property	int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
*
*/

#[Casts(['bool'])]
class UnpinAllGeneralForumTopicMessages extends MethodDefinition implements MethodDefinitionInterface
{

}