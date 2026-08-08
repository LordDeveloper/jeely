<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class GetChatMenuButton
 * @description Use this method to get the current value of the bot's menu button in a private chat, or the default menu button. Returns MenuButton on success.
 *
 * @property int $chat_id Unique identifier for the target private chat. If not specified, the bot's default menu button will be returned.
 *
 * @see https://core.telegram.org/bots/api#getchatmenubutton
 */
class GetChatMenuButton extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'MenuButton';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return MenuButton
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
