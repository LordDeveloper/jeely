<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class SetChatDescription
 * @description Use this method to change the description of a group, a supergroup or a channel. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns True on success.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target channel in the format ＠username
 * @property string $description New chat description, 0-255 characters
 *
 * @see https://core.telegram.org/bots/api#setchatdescription
 */
class SetChatDescription extends MethodDefinition implements MethodDefinitionInterface
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
