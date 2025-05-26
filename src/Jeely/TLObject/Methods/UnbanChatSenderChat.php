<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class UnbanChatSenderChat
* @description Use this method to unban a previously banned channel chat in a supergroup or channel. The bot must be an administrator for this to work and must have the appropriate administrator rights. Returns True on success.
*
*
* @param	int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
* @param	int $sender_chat_id Unique identifier of the target sender chat
*
*
* @property	int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
* @property	int $sender_chat_id Unique identifier of the target sender chat
*
*/

#[Casts(['bool'])]
class UnbanChatSenderChat extends MethodDefinition implements MethodDefinitionInterface
{

}