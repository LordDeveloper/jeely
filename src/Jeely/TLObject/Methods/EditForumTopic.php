<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class EditForumTopic
* @description Use this method to edit name and icon of a topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights, unless it is the creator of the topic. Returns True on success.
*
*
* @param	int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
* @param	int $message_thread_id Unique identifier for the target message thread of the forum topic
* @param	string $name New topic name, 0-128 characters. If not specified or empty, the current name of the topic will be kept
* @param	string $icon_custom_emoji_id New unique identifier of the custom emoji shown as the topic icon. Use getForumTopicIconStickers to get all allowed custom emoji identifiers. Pass an empty string to remove the icon. If not specified, the current icon will be kept
*
*
* @property	int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
* @property	int $message_thread_id Unique identifier for the target message thread of the forum topic
* @property	string $name New topic name, 0-128 characters. If not specified or empty, the current name of the topic will be kept
* @property	string $icon_custom_emoji_id New unique identifier of the custom emoji shown as the topic icon. Use getForumTopicIconStickers to get all allowed custom emoji identifiers. Pass an empty string to remove the icon. If not specified, the current icon will be kept
*
*/

#[Casts(['bool'])]
class EditForumTopic extends MethodDefinition implements MethodDefinitionInterface
{

}