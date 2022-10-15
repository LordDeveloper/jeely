<?php

namespace Jeely\TL\Methods;

use Jeely\TL\Types\ChatInviteLink;

/**
 * @class RevokeChatInviteLink
 * @description Use this method to revoke an invite link created by the bot. If the primary link is revoked, a new link is automatically generated. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the revoked invite link as ChatInviteLink object.
 *
 * @property int|string $chat_id Unique identifier of the target chat or username of the target channel (in the format @channelusername)
 * @property string $invite_link The invite link to revoke
 *
 * @see https://api.telegram.org/bots/api#revokechatinvitelink
 */
class RevokeChatInviteLink extends MethodDefinition implements MethodDefinitionInterface
{
    public string $castsTo = 'ChatInviteLink';

    /**
     * @var int|string $chat_id Unique identifier of the target chat or username of the target channel (in the format @channelusername)
     */
    public int|string $chat_id;

    /**
     * @var string $invite_link The invite link to revoke
     */
    public string $invite_link;

    /**
     * @var array $vars The value that are taken in the constructor method as method parameters.
     */
    public function __construct(public array $vars = [])
    {
    }

    /**
     * @return ChatInviteLink
     */
    public function __invoke()
    {
        return $this->call();
    }
}