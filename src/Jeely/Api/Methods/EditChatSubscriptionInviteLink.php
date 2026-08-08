<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class EditChatSubscriptionInviteLink
 * @description Use this method to edit a subscription invite link created by the bot. The bot must have the can_invite_users administrator rights. Returns the edited invite link as a ChatInviteLink object.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target channel in the format ＠username
 * @property string $invite_link The invite link to edit
 * @property string $name Invite link name; 0-32 characters
 *
 * @see https://core.telegram.org/bots/api#editchatsubscriptioninvitelink
 */
class EditChatSubscriptionInviteLink extends MethodDefinition implements MethodDefinitionInterface
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
