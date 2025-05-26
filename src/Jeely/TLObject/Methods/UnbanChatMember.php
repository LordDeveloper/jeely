<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class UnbanChatMember
* @description Use this method to unban a previously banned user in a supergroup or channel. The user will not return to the group or channel automatically, but will be able to join via link, etc. The bot must be an administrator for this to work. By default, this method guarantees that after the call the user is not a member of the chat, but will be able to join it. So if the user is a member of the chat they will also be removed from the chat. If you don't want this, use the parameter only_if_banned. Returns True on success.
*
*
* @param	int|string $chat_id Unique identifier for the target group or username of the target supergroup or channel (in the format @channelusername)
* @param	int $user_id Unique identifier of the target user
* @param	bool $only_if_banned Do nothing if the user is not banned
*
*
* @property	int|string $chat_id Unique identifier for the target group or username of the target supergroup or channel (in the format @channelusername)
* @property	int $user_id Unique identifier of the target user
* @property	bool $only_if_banned Do nothing if the user is not banned
*
*/

#[Casts(['bool'])]
class UnbanChatMember extends MethodDefinition implements MethodDefinitionInterface
{

}