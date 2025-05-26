<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\ChatFullInfo;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class GetChat
* @description Use this method to get up-to-date information about the chat. Returns a ChatFullInfo object on success.
*
*
* @param	int|string $chat_id Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
*
*
* @property	int|string $chat_id Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
*
*/

#[Casts(['Jeely\\TLObject\\Types\\ChatFullInfo'])]
class GetChat extends MethodDefinition implements MethodDefinitionInterface
{

}