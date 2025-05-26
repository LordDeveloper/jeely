<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\ChatInviteLink;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class EditChatSubscriptionInviteLink
* @description Use this method to edit a subscription invite link created by the bot. The bot must have the can_invite_users administrator rights. Returns the edited invite link as a ChatInviteLink object.
*
*
* @param	int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
* @param	string $invite_link The invite link to edit
* @param	string $name Invite link name; 0-32 characters
*
*
* @property	int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
* @property	string $invite_link The invite link to edit
* @property	string $name Invite link name; 0-32 characters
*
*/

#[Casts(['Jeely\\TLObject\\Types\\ChatInviteLink'])]
class EditChatSubscriptionInviteLink extends MethodDefinition implements MethodDefinitionInterface
{

}