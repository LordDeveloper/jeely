<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\UserChatBoosts;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class GetUserChatBoosts
* @description Use this method to get the list of boosts added to a chat by a user. Requires administrator rights in the chat. Returns a UserChatBoosts object.
*
*
* @param	int|string $chat_id Unique identifier for the chat or username of the channel (in the format @channelusername)
* @param	int $user_id Unique identifier of the target user
*
*
* @property	int|string $chat_id Unique identifier for the chat or username of the channel (in the format @channelusername)
* @property	int $user_id Unique identifier of the target user
*
*/

#[Casts(['Jeely\\TLObject\\Types\\UserChatBoosts'])]
class GetUserChatBoosts extends MethodDefinition implements MethodDefinitionInterface
{

}