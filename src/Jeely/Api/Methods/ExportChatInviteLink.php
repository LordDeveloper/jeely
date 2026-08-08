<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class ExportChatInviteLink
 * @description Use this method to generate a new primary invite link for a chat; any previously generated primary link is revoked. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the new invite link as String on success.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target channel in the format ＠username
 *
 * @see https://core.telegram.org/bots/api#exportchatinvitelink
 */
class ExportChatInviteLink extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'string';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return string
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
