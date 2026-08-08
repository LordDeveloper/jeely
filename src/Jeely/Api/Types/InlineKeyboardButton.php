<?php

namespace Jeely\Api\Types;

/**
 * @class InlineKeyboardButton
 * @description This object represents one button of an inline keyboard. Exactly one of the fields other than text, icon_custom_emoji_id, and style must be used to specify the type of the button.
 *
 * @method string getText() Label text on the button
 * @method string getIconCustomEmojiId() Optional. Unique identifier of the custom emoji shown before the text of the button. Can only be used by bots that purchased additional usernames on Fragment or in the messages directly sent by the bot to private, group and supergroup chats if the owner of the bot has a Telegram Premium subscription.
 * @method string getStyle() Optional. Style of the button. Must be one of “danger” (red), “success” (green) or “primary” (blue). If omitted, then an app-specific style is used.
 * @method string getUrl() Optional. HTTP or tg:// URL to be opened when the button is pressed. Links tg://user?id=<user_id> can be used to mention a user by their identifier without using a username, if this is allowed by their privacy settings.
 * @method string getCallbackData() Optional. Data to be sent in a callback query to the bot when the button is pressed, 1-64 bytes
 * @method WebAppInfo getWebApp() Optional. Description of the Web App that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method answerWebAppQuery. Available only in private chats between a user and the bot. Not supported for messages sent on behalf of a business account.
 * @method LoginUrl getLoginUrl() Optional. An HTTPS URL used to automatically authorize the user. Can be used as a replacement for the Telegram Login Widget.
 * @method string getSwitchInlineQuery() Optional. If set, pressing the button will prompt the user to select one of their chats, open that chat and insert the bot's username and the specified inline query in the input field. May be empty, in which case just the bot's username will be inserted. Not supported for messages sent in channel direct messages chats and on behalf of a business account.
 * @method string getSwitchInlineQueryCurrentChat() Optional. If set, pressing the button will insert the bot's username and the specified inline query in the current chat's input field. May be empty, in which case only the bot's username will be inserted.This offers a quick way for the user to open your bot in inline mode in the same chat - good for selecting something from multiple options. Not supported in channels and for messages sent in channel direct messages chats and on behalf of a business account.
 * @method SwitchInlineQueryChosenChat getSwitchInlineQueryChosenChat() Optional. If set, pressing the button will prompt the user to select one of their chats of the specified type, open that chat and insert the bot's username and the specified inline query in the input field. Not supported for messages sent in channel direct messages chats and on behalf of a business account.
 * @method CopyTextButton getCopyText() Optional. Description of the button that copies the specified text to the clipboard
 * @method CallbackGame getCallbackGame() Optional. Description of the game that will be launched when the user presses the button.NOTE: This type of button must always be the first button in the first row.
 * @method bool getPay() Optional. Specify True, to send a Pay button. Substrings “” and “XTR” in the buttons's text will be replaced with a Telegram Star icon.NOTE: This type of button must always be the first button in the first row and can only be used in invoice messages.
 *
 * @method bool isText()
 * @method bool isIconCustomEmojiId()
 * @method bool isStyle()
 * @method bool isUrl()
 * @method bool isCallbackData()
 * @method bool isWebApp()
 * @method bool isLoginUrl()
 * @method bool isSwitchInlineQuery()
 * @method bool isSwitchInlineQueryCurrentChat()
 * @method bool isSwitchInlineQueryChosenChat()
 * @method bool isCopyText()
 * @method bool isCallbackGame()
 * @method bool isPay()
 *
 * @method $this setText()
 * @method $this setIconCustomEmojiId()
 * @method $this setStyle()
 * @method $this setUrl()
 * @method $this setCallbackData()
 * @method $this setWebApp()
 * @method $this setLoginUrl()
 * @method $this setSwitchInlineQuery()
 * @method $this setSwitchInlineQueryCurrentChat()
 * @method $this setSwitchInlineQueryChosenChat()
 * @method $this setCopyText()
 * @method $this setCallbackGame()
 * @method $this setPay()
 *
 * @method $this unsetText()
 * @method $this unsetIconCustomEmojiId()
 * @method $this unsetStyle()
 * @method $this unsetUrl()
 * @method $this unsetCallbackData()
 * @method $this unsetWebApp()
 * @method $this unsetLoginUrl()
 * @method $this unsetSwitchInlineQuery()
 * @method $this unsetSwitchInlineQueryCurrentChat()
 * @method $this unsetSwitchInlineQueryChosenChat()
 * @method $this unsetCopyText()
 * @method $this unsetCallbackGame()
 * @method $this unsetPay()
 *
 * @property string $text Label text on the button
 * @property string $icon_custom_emoji_id Optional. Unique identifier of the custom emoji shown before the text of the button. Can only be used by bots that purchased additional usernames on Fragment or in the messages directly sent by the bot to private, group and supergroup chats if the owner of the bot has a Telegram Premium subscription.
 * @property string $style Optional. Style of the button. Must be one of “danger” (red), “success” (green) or “primary” (blue). If omitted, then an app-specific style is used.
 * @property string $url Optional. HTTP or tg:// URL to be opened when the button is pressed. Links tg://user?id=<user_id> can be used to mention a user by their identifier without using a username, if this is allowed by their privacy settings.
 * @property string $callback_data Optional. Data to be sent in a callback query to the bot when the button is pressed, 1-64 bytes
 * @property WebAppInfo $web_app Optional. Description of the Web App that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method answerWebAppQuery. Available only in private chats between a user and the bot. Not supported for messages sent on behalf of a business account.
 * @property LoginUrl $login_url Optional. An HTTPS URL used to automatically authorize the user. Can be used as a replacement for the Telegram Login Widget.
 * @property string $switch_inline_query Optional. If set, pressing the button will prompt the user to select one of their chats, open that chat and insert the bot's username and the specified inline query in the input field. May be empty, in which case just the bot's username will be inserted. Not supported for messages sent in channel direct messages chats and on behalf of a business account.
 * @property string $switch_inline_query_current_chat Optional. If set, pressing the button will insert the bot's username and the specified inline query in the current chat's input field. May be empty, in which case only the bot's username will be inserted.This offers a quick way for the user to open your bot in inline mode in the same chat - good for selecting something from multiple options. Not supported in channels and for messages sent in channel direct messages chats and on behalf of a business account.
 * @property SwitchInlineQueryChosenChat $switch_inline_query_chosen_chat Optional. If set, pressing the button will prompt the user to select one of their chats of the specified type, open that chat and insert the bot's username and the specified inline query in the input field. Not supported for messages sent in channel direct messages chats and on behalf of a business account.
 * @property CopyTextButton $copy_text Optional. Description of the button that copies the specified text to the clipboard
 * @property CallbackGame $callback_game Optional. Description of the game that will be launched when the user presses the button.NOTE: This type of button must always be the first button in the first row.
 * @property bool $pay Optional. Specify True, to send a Pay button. Substrings “” and “XTR” in the buttons's text will be replaced with a Telegram Star icon.NOTE: This type of button must always be the first button in the first row and can only be used in invoice messages.
 *
 * @see https://core.telegram.org/bots/api#inlinekeyboardbutton
 */
class InlineKeyboardButton extends \Jeely\Nectar implements KeyboardButtonInterface
{
    public const JSON_PROPERTY_MAP = [
        'text' => 'string',
        'icon_custom_emoji_id' => 'string',
        'style' => 'string',
        'url' => 'string',
        'callback_data' => 'string',
        'web_app' => 'WebAppInfo',
        'login_url' => 'LoginUrl',
        'switch_inline_query' => 'string',
        'switch_inline_query_current_chat' => 'string',
        'switch_inline_query_chosen_chat' => 'SwitchInlineQueryChosenChat',
        'copy_text' => 'CopyTextButton',
        'callback_game' => 'CallbackGame',
        'pay' => 'bool',
    ];
}
