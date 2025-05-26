<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class CloseForumTopic
* @description Use this method to close an open topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights, unless it is the creator of the topic. Returns True on success.
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
class CloseForumTopic extends MethodDefinition implements MethodDefinitionInterface
{

}