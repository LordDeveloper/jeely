<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class EditChatInviteLink
 * @description Use this method to edit a non-primary invite link created by the bot. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the edited invite link as a ChatInviteLink object.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target channel in the format ＠username
 * @property string $invite_link The invite link to edit
 * @property string $name Invite link name; 0-32 characters
 * @property int $expire_date Point in time (Unix timestamp) when the link will expire
 * @property int $member_limit The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
 * @property bool $creates_join_request True, if users joining the chat via the link need to be approved by chat administrators. If True, member_limit can't be specified.
 *
 * @see https://core.telegram.org/bots/api#editchatinvitelink
 */
class EditChatInviteLink extends MethodDefinition implements MethodDefinitionInterface
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
