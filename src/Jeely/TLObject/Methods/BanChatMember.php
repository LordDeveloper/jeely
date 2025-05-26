<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class BanChatMember
* @description Use this method to ban a user in a group, a supergroup or a channel. In the case of supergroups and channels, the user will not be able to return to the chat on their own using invite links, etc., unless unbanned first. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns True on success.
*
*
* @param	int|string $chat_id Unique identifier for the target group or username of the target supergroup or channel (in the format @channelusername)
* @param	int $user_id Unique identifier of the target user
* @param	int $until_date Date when the user will be unbanned; Unix time. If user is banned for more than 366 days or less than 30 seconds from the current time they are considered to be banned forever. Applied for supergroups and channels only.
* @param	bool $revoke_messages Pass True to delete all messages from the chat for the user that is being removed. If False, the user will be able to see messages in the group that were sent before the user was removed. Always True for supergroups and channels.
*
*
* @property	int|string $chat_id Unique identifier for the target group or username of the target supergroup or channel (in the format @channelusername)
* @property	int $user_id Unique identifier of the target user
* @property	int $until_date Date when the user will be unbanned; Unix time. If user is banned for more than 366 days or less than 30 seconds from the current time they are considered to be banned forever. Applied for supergroups and channels only.
* @property	bool $revoke_messages Pass True to delete all messages from the chat for the user that is being removed. If False, the user will be able to see messages in the group that were sent before the user was removed. Always True for supergroups and channels.
*
*/

#[Casts(['bool'])]
class BanChatMember extends MethodDefinition implements MethodDefinitionInterface
{

}