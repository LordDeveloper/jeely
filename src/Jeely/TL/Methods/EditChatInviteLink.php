<?php

namespace Jeely\TL\Methods;

use Jeely\TL\Types\ChatInviteLink;

/**
 * @class EditChatInviteLink
 * @description Use this method to edit a non-primary invite link created by the bot. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the edited invite link as a ChatInviteLink object.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @property string $invite_link The invite link to edit
 * @property string $name Invite link name; 0-32 characters
 * @property int $expire_date Point in time (Unix timestamp) when the link will expire
 * @property int $member_limit The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
 * @property bool $creates_join_request True, if users joining the chat via the link need to be approved by chat administrators. If True, member_limit can't be specified
 *
 * @see https://api.telegram.org/bots/api#editchatinvitelink
 */
class EditChatInviteLink extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'ChatInviteLink';

    /**
     * @var array $params The value that are taken in the constructor method as method parameters.
     */
    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return ChatInviteLink
     */
    public function __invoke()
    {
        return $this->call();
    }
}