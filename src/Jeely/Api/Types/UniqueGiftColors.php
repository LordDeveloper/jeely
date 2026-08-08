<?php

namespace Jeely\Api\Types;

/**
 * @class UniqueGiftColors
 * @description This object contains information about the color scheme for a user's name, message replies and link previews based on a unique gift.
 *
 * @method string getModelCustomEmojiId() Custom emoji identifier of the unique gift's model
 * @method string getSymbolCustomEmojiId() Custom emoji identifier of the unique gift's symbol
 * @method int getLightThemeMainColor() Main color used in light themes; RGB format
 * @method int[] getLightThemeOtherColors() List of 1-3 additional colors used in light themes; RGB format
 * @method int getDarkThemeMainColor() Main color used in dark themes; RGB format
 * @method int[] getDarkThemeOtherColors() List of 1-3 additional colors used in dark themes; RGB format
 *
 * @method bool isModelCustomEmojiId()
 * @method bool isSymbolCustomEmojiId()
 * @method bool isLightThemeMainColor()
 * @method bool isLightThemeOtherColors()
 * @method bool isDarkThemeMainColor()
 * @method bool isDarkThemeOtherColors()
 *
 * @method $this setModelCustomEmojiId()
 * @method $this setSymbolCustomEmojiId()
 * @method $this setLightThemeMainColor()
 * @method $this setLightThemeOtherColors()
 * @method $this setDarkThemeMainColor()
 * @method $this setDarkThemeOtherColors()
 *
 * @method $this unsetModelCustomEmojiId()
 * @method $this unsetSymbolCustomEmojiId()
 * @method $this unsetLightThemeMainColor()
 * @method $this unsetLightThemeOtherColors()
 * @method $this unsetDarkThemeMainColor()
 * @method $this unsetDarkThemeOtherColors()
 *
 * @property string $model_custom_emoji_id Custom emoji identifier of the unique gift's model
 * @property string $symbol_custom_emoji_id Custom emoji identifier of the unique gift's symbol
 * @property int $light_theme_main_color Main color used in light themes; RGB format
 * @property int[] $light_theme_other_colors List of 1-3 additional colors used in light themes; RGB format
 * @property int $dark_theme_main_color Main color used in dark themes; RGB format
 * @property int[] $dark_theme_other_colors List of 1-3 additional colors used in dark themes; RGB format
 *
 * @see https://core.telegram.org/bots/api#uniquegiftcolors
 */
class UniqueGiftColors extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'model_custom_emoji_id' => 'string',
        'symbol_custom_emoji_id' => 'string',
        'light_theme_main_color' => 'int',
        'light_theme_other_colors' => 'int[]',
        'dark_theme_main_color' => 'int',
        'dark_theme_other_colors' => 'int[]',
    ];
}
