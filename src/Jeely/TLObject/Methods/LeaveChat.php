<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class LeaveChat
* @description Use this method for your bot to leave a group, supergroup or channel. Returns True on success.
*
*
* @param	int|string $chat_id Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
*
*
* @property	int|string $chat_id Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
*
*/

#[Casts(['bool'])]
class LeaveChat extends MethodDefinition implements MethodDefinitionInterface
{

}