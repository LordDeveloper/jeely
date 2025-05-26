<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class BanChatSenderChat
* @description Use this method to ban a channel chat in a supergroup or a channel. Until the chat is unbanned, the owner of the banned chat won't be able to send messages on behalf of any of their channels. The bot must be an administrator in the supergroup or channel for this to work and must have the appropriate administrator rights. Returns True on success.
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
class BanChatSenderChat extends MethodDefinition implements MethodDefinitionInterface
{

}