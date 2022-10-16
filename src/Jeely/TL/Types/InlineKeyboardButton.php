<?php

namespace Jeely\TL\Types;

use Jeely\LazyUpdates;


/**
 * @class InlineKeyboardButton
 * @description This object represents one button of an inline keyboard. You must use exactly one of the optional fields.
 *
 * @method string getText() Label text on the button
 * @method string getUrl() Optional. HTTP or tg:// URL to be opened when the button is pressed. Links tg://user?id=<user_id> can be used to mention a user by their ID without using a username, if this is allowed by their privacy settings.
 * @method string getCallbackData() Optional. Data to be sent in a callback query to the bot when button is pressed, 1-64 bytes
 * @method WebAppInfo getWebApp() Optional. Description of the Web App that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method answerWebAppQuery. Available only in private chats between a user and the bot.
 * @method LoginUrl getLoginUrl() Optional. An HTTPS URL used to automatically authorize the user. Can be used as a replacement for the Telegram Login Widget.
 * @method string getSwitchInlineQuery() Optional. If set, pressing the button will prompt the user to select one of their chats, open that chat and insert the bot's username and the specified inline query in the input field. May be empty, in which case just the bot's username will be inserted.Note: This offers an easy way for users to start using your bot in inline mode when they are currently in a private chat with it. Especially useful when combined with switch_pm… actions - in this case the user will be automatically returned to the chat they switched from, skipping the chat selection screen.
 * @method string getSwitchInlineQueryCurrentChat() Optional. If set, pressing the button will insert the bot's username and the specified inline query in the current chat's input field. May be empty, in which case only the bot's username will be inserted.This offers a quick way for the user to open your bot in inline mode in the same chat - good for selecting something from multiple options.
 * @method CallbackGame getCallbackGame() Optional. Description of the game that will be launched when the user presses the button.NOTE: This type of button must always be the first button in the first row.
 * @method bool getPay() Optional. Specify True, to send a Pay button.NOTE: This type of button must always be the first button in the first row and can only be used in invoice messages.
 *
 * @method bool isText()
 * @method bool isUrl()
 * @method bool isCallbackData()
 * @method bool isWebApp()
 * @method bool isLoginUrl()
 * @method bool isSwitchInlineQuery()
 * @method bool isSwitchInlineQueryCurrentChat()
 * @method bool isCallbackGame()
 * @method bool isPay()
 *
 * @method $this setText()
 * @method $this setUrl()
 * @method $this setCallbackData()
 * @method $this setWebApp()
 * @method $this setLoginUrl()
 * @method $this setSwitchInlineQuery()
 * @method $this setSwitchInlineQueryCurrentChat()
 * @method $this setCallbackGame()
 * @method $this setPay()
 *
 * @method $this unsetText()
 * @method $this unsetUrl()
 * @method $this unsetCallbackData()
 * @method $this unsetWebApp()
 * @method $this unsetLoginUrl()
 * @method $this unsetSwitchInlineQuery()
 * @method $this unsetSwitchInlineQueryCurrentChat()
 * @method $this unsetCallbackGame()
 * @method $this unsetPay()
 *
 * @property string $text Label text on the button
 * @property string $url Optional. HTTP or tg:// URL to be opened when the button is pressed. Links tg://user?id=<user_id> can be used to mention a user by their ID without using a username, if this is allowed by their privacy settings.
 * @property string $callback_data Optional. Data to be sent in a callback query to the bot when button is pressed, 1-64 bytes
 * @property WebAppInfo $web_app Optional. Description of the Web App that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method answerWebAppQuery. Available only in private chats between a user and the bot.
 * @property LoginUrl $login_url Optional. An HTTPS URL used to automatically authorize the user. Can be used as a replacement for the Telegram Login Widget.
 * @property string $switch_inline_query Optional. If set, pressing the button will prompt the user to select one of their chats, open that chat and insert the bot's username and the specified inline query in the input field. May be empty, in which case just the bot's username will be inserted.Note: This offers an easy way for users to start using your bot in inline mode when they are currently in a private chat with it. Especially useful when combined with switch_pm… actions - in this case the user will be automatically returned to the chat they switched from, skipping the chat selection screen.
 * @property string $switch_inline_query_current_chat Optional. If set, pressing the button will insert the bot's username and the specified inline query in the current chat's input field. May be empty, in which case only the bot's username will be inserted.This offers a quick way for the user to open your bot in inline mode in the same chat - good for selecting something from multiple options.
 * @property CallbackGame $callback_game Optional. Description of the game that will be launched when the user presses the button.NOTE: This type of button must always be the first button in the first row.
 * @property bool $pay Optional. Specify True, to send a Pay button.NOTE: This type of button must always be the first button in the first row and can only be used in invoice messages.
 *
 * @see https://core.telegram.org/bots/api#inlinekeyboardbutton
 */
class InlineKeyboardButton extends LazyUpdates implements KeyboardButtonInterface
{
    const JSON_PROPERTY_MAP = [
        'text' => 'string',
        'url' => 'string',
        'callback_data' => 'string',
        'web_app' => 'WebAppInfo',
        'login_url' => 'LoginUrl',
        'switch_inline_query' => 'string',
        'switch_inline_query_current_chat' => 'string',
        'callback_game' => 'CallbackGame',
        'pay' => 'bool',
    ];
}