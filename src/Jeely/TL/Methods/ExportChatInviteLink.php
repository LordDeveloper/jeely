<?php

namespace Jeely\TL\Methods;


/**
 * @class ExportChatInviteLink
 * @description Use this method to generate a new primary invite link for a chat; any previously generated primary link is revoked. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the new invite link as String on success.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 *
 * @see https://api.telegram.org/bots/api#exportchatinvitelink
 */
class ExportChatInviteLink extends MethodDefinition implements MethodDefinitionInterface
{
    public string $castsTo = 'string';

    /**
     * @var int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     */
    public int|string $chat_id;

    /**
     * @var array $vars The value that are taken in the constructor method as method parameters.
     */
    public function __construct(public array $vars = [])
    {
    }

    /**
     * @return string
     */
    public function __invoke()
    {
        return $this->call();
    }
}