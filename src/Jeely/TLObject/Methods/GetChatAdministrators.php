<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\ChatMember;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class GetChatAdministrators
* @description Use this method to get a list of administrators in a chat, which aren't bots. Returns an Array of ChatMember objects.
*
*
* @param	int|string $chat_id Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
*
*
* @property	int|string $chat_id Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
*
*/

#[Casts(['Jeely\\TLObject\\Types\\ChatMember[]'])]
class GetChatAdministrators extends MethodDefinition implements MethodDefinitionInterface
{

}