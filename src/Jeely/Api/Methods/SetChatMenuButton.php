<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class SetChatMenuButton
 * @description Use this method to change the bot's menu button in a private chat, or the default menu button. Returns True on success.
 *
 * @property int $chat_id Unique identifier for the target private chat. If not specified, the bot's default menu button will be changed.
 * @property MenuButton $menu_button A JSON-serialized object for the bot's new menu button. Defaults to MenuButtonDefault.
 *
 * @see https://core.telegram.org/bots/api#setchatmenubutton
 */
class SetChatMenuButton extends MethodDefinition implements MethodDefinitionInterface
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
