<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\ChatInviteLink;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class CreateChatSubscriptionInviteLink
* @description Use this method to create a subscription invite link for a channel chat. The bot must have the can_invite_users administrator rights. The link can be edited using the method editChatSubscriptionInviteLink or revoked using the method revokeChatInviteLink. Returns the new invite link as a ChatInviteLink object.
*
*
* @param	int|string $chat_id Unique identifier for the target channel chat or username of the target channel (in the format @channelusername)
* @param	string $name Invite link name; 0-32 characters
* @param	int $subscription_period The number of seconds the subscription will be active for before the next payment. Currently, it must always be 2592000 (30 days).
* @param	int $subscription_price The amount of Telegram Stars a user must pay initially and after each subsequent subscription period to be a member of the chat; 1-10000
*
*
* @property	int|string $chat_id Unique identifier for the target channel chat or username of the target channel (in the format @channelusername)
* @property	string $name Invite link name; 0-32 characters
* @property	int $subscription_period The number of seconds the subscription will be active for before the next payment. Currently, it must always be 2592000 (30 days).
* @property	int $subscription_price The amount of Telegram Stars a user must pay initially and after each subsequent subscription period to be a member of the chat; 1-10000
*
*/

#[Casts(['Jeely\\TLObject\\Types\\ChatInviteLink'])]
class CreateChatSubscriptionInviteLink extends MethodDefinition implements MethodDefinitionInterface
{

}