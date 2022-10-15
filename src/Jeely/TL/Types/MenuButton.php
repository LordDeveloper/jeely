<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class MenuButton
 * @description This object describes the bot's menu button in a private chat. It should be one of
 *
 * @mixin MenuButtonCommands
 * @mixin MenuButtonDefault
 * @mixin MenuButtonWebApp
 *
 * @see https://core.telegram.org/bots/api#menubutton
 */
class MenuButton extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        MenuButtonCommands::class,
        MenuButtonDefault::class,
        MenuButtonWebApp::class,
    ];
}