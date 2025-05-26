<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\ChatMember;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class GetChatMember
* @description Use this method to get information about a member of a chat. The method is only guaranteed to work for other users if the bot is an administrator in the chat. Returns a ChatMember object on success.
*
*
* @param	int|string $chat_id Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
* @param	int $user_id Unique identifier of the target user
*
*
* @property	int|string $chat_id Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
* @property	int $user_id Unique identifier of the target user
*
*/

#[Casts(['Jeely\\TLObject\\Types\\ChatMember'])]
class GetChatMember extends MethodDefinition implements MethodDefinitionInterface
{

}