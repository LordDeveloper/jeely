<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class VerifyChat
 * @description Verifies a chat on behalf of the organization which is represented by the bot. Returns True on success.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target bot, supergroup or channel in the format ＠username. Channel direct messages chats can't be verified.
 * @property string $custom_description Custom description for the verification; 0-70 characters. Must be empty if the organization isn't allowed to provide a custom verification description.
 *
 * @see https://core.telegram.org/bots/api#verifychat
 */
class VerifyChat extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'bool';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return bool
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
