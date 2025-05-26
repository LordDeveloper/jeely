<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\ChatInviteLink;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class RevokeChatInviteLink
* @description Use this method to revoke an invite link created by the bot. If the primary link is revoked, a new link is automatically generated. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the revoked invite link as ChatInviteLink object.
*
*
* @param	int|string $chat_id Unique identifier of the target chat or username of the target channel (in the format @channelusername)
* @param	string $invite_link The invite link to revoke
*
*
* @property	int|string $chat_id Unique identifier of the target chat or username of the target channel (in the format @channelusername)
* @property	string $invite_link The invite link to revoke
*
*/

#[Casts(['Jeely\\TLObject\\Types\\ChatInviteLink'])]
class RevokeChatInviteLink extends MethodDefinition implements MethodDefinitionInterface
{

}