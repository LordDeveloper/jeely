<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class HideGeneralForumTopic
* @description Use this method to hide the 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights. The topic will be automatically closed if it was open. Returns True on success.
*
*
* @param	int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
*
*
* @property	int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
*
*/

#[Casts(['bool'])]
class HideGeneralForumTopic extends MethodDefinition implements MethodDefinitionInterface
{

}