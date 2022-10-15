<?php

namespace Jeely\TL\Methods;

use Jeely\TL\Types\MenuButton;

/**
 * @class SetChatMenuButton
 * @description Use this method to change the bot's menu button in a private chat, or the default menu button. Returns True on success.
 *
 * @property int $chat_id Unique identifier for the target private chat. If not specified, default bot's menu button will be changed
 * @property MenuButton $menu_button A JSON-serialized object for the bot's new menu button. Defaults to MenuButtonDefault
 *
 * @see https://api.telegram.org/bots/api#setchatmenubutton
 */
class SetChatMenuButton extends MethodDefinition implements MethodDefinitionInterface
{
    public string $castsTo = 'bool';

    /**
     * @var mixed $menu_button A JSON-serialized object for the bot's new menu button. Defaults to MenuButtonDefault
     */
    public mixed $menu_button = 'menubuttondefault';

    /**
     * @var int $chat_id Unique identifier for the target private chat. If not specified, default bot's menu button will be changed
     */
    public int $chat_id = 0;

    /**
     * @var array $vars The value that are taken in the constructor method as method parameters.
     */
    public function __construct(public array $vars = [])
    {
    }

    /**
     * @return bool
     */
    public function __invoke()
    {
        return $this->call();
    }
}