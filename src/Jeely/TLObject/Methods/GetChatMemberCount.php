<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class GetChatMemberCount
* @description Use this method to get the number of members in a chat. Returns Int on success.
*
*
* @param	int|string $chat_id Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
*
*
* @property	int|string $chat_id Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
*
*/

#[Casts(['int'])]
class GetChatMemberCount extends MethodDefinition implements MethodDefinitionInterface
{

}