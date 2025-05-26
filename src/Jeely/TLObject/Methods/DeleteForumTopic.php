<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class DeleteForumTopic
* @description Use this method to delete a forum topic along with all its messages in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_delete_messages administrator rights. Returns True on success.
*
*
* @param	int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
* @param	int $message_thread_id Unique identifier for the target message thread of the forum topic
*
*
* @property	int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
* @property	int $message_thread_id Unique identifier for the target message thread of the forum topic
*
*/

#[Casts(['bool'])]
class DeleteForumTopic extends MethodDefinition implements MethodDefinitionInterface
{

}