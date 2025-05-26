<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\ChatInviteLink;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class CreateChatInviteLink
* @description Use this method to create an additional invite link for a chat. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. The link can be revoked using the method revokeChatInviteLink. Returns the new invite link as ChatInviteLink object.
*
*
* @param	int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
* @param	string $name Invite link name; 0-32 characters
* @param	int $expire_date Point in time (Unix timestamp) when the link will expire
* @param	int $member_limit The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
* @param	bool $creates_join_request True, if users joining the chat via the link need to be approved by chat administrators. If True, member_limit can't be specified
*
*
* @property	int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
* @property	string $name Invite link name; 0-32 characters
* @property	int $expire_date Point in time (Unix timestamp) when the link will expire
* @property	int $member_limit The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
* @property	bool $creates_join_request True, if users joining the chat via the link need to be approved by chat administrators. If True, member_limit can't be specified
*
*/

#[Casts(['Jeely\\TLObject\\Types\\ChatInviteLink'])]
class CreateChatInviteLink extends MethodDefinition implements MethodDefinitionInterface
{

}