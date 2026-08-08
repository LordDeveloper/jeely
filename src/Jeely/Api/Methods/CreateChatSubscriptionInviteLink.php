<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class CreateChatSubscriptionInviteLink
 * @description Use this method to create a subscription invite link for a channel chat. The bot must have the can_invite_users administrator rights. The link can be edited using the method editChatSubscriptionInviteLink or revoked using the method revokeChatInviteLink. Returns the new invite link as a ChatInviteLink object.
 *
 * @property int|string $chat_id Unique identifier for the target channel chat or username of the target channel in the format ＠username
 * @property string $name Invite link name; 0-32 characters
 * @property int $subscription_period The number of seconds the subscription will be active for before the next payment. Currently, it must always be 2592000 (30 days).
 * @property int $subscription_price The amount of Telegram Stars a user must pay initially and after each subsequent subscription period to be a member of the chat; 1-10000
 *
 * @see https://core.telegram.org/bots/api#createchatsubscriptioninvitelink
 */
class CreateChatSubscriptionInviteLink extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'ChatInviteLink';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return ChatInviteLink
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
