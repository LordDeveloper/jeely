<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class RevokeChatInviteLink
 * @description Use this method to revoke an invite link created by the bot. If the primary link is revoked, a new link is automatically generated. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the revoked invite link as ChatInviteLink object.
 *
 * @property int|string $chat_id Unique identifier of the target chat or username of the target channel in the format ＠username
 * @property string $invite_link The invite link to revoke
 *
 * @see https://core.telegram.org/bots/api#revokechatinvitelink
 */
class RevokeChatInviteLink extends MethodDefinition implements MethodDefinitionInterface
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
