<?php

namespace Jeely\Api\Types;

/**
 * @class BackgroundTypeChatTheme
 * @description The background is taken directly from a built-in chat theme.
 *
 * @method string getType() Type of the background, always “chat_theme”
 * @method string getThemeName() Name of the chat theme, which is usually an emoji
 *
 * @method bool isType()
 * @method bool isThemeName()
 *
 * @method $this setType()
 * @method $this setThemeName()
 *
 * @method $this unsetType()
 * @method $this unsetThemeName()
 *
 * @property string $type Type of the background, always “chat_theme”
 * @property string $theme_name Name of the chat theme, which is usually an emoji
 *
 * @see https://core.telegram.org/bots/api#backgroundtypechattheme
 */
class BackgroundTypeChatTheme extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'theme_name' => 'string',
    ];
}
