<?php

namespace Jeely\Api\Types;

/**
 * @class KeyboardButton
 * @description This object represents one button of the reply keyboard. At most one of the fields other than text, icon_custom_emoji_id, and style must be used to specify the type of the button. For simple text buttons, String can be used instead of this object to specify the button text.
 *
 * @method string getText() Text of the button. If none of the fields other than text, icon_custom_emoji_id, and style are used, it will be sent as a message when the button is pressed.
 * @method string getIconCustomEmojiId() Optional. Unique identifier of the custom emoji shown before the text of the button. Can only be used by bots that purchased additional usernames on Fragment or in the messages directly sent by the bot to private, group and supergroup chats if the owner of the bot has a Telegram Premium subscription.
 * @method string getStyle() Optional. Style of the button. Must be one of “danger” (red), “success” (green) or “primary” (blue). If omitted, then an app-specific style is used.
 * @method KeyboardButtonRequestUsers getRequestUsers() Optional. If specified, pressing the button will open a list of suitable users. Identifiers of selected users will be sent to the bot in a “users_shared” service message. Available in private chats only.
 * @method KeyboardButtonRequestChat getRequestChat() Optional. If specified, pressing the button will open a list of suitable chats. Tapping on a chat will send its identifier to the bot in a “chat_shared” service message. Available in private chats only.
 * @method KeyboardButtonRequestManagedBot getRequestManagedBot() Optional. If specified, pressing the button will ask the user to create and share a bot that will be managed by the current bot. Available for bots that enabled management of other bots in the ＠BotFather Mini App. Available in private chats only.
 * @method bool getRequestContact() Optional. If True, the user's phone number will be sent as a contact when the button is pressed. Available in private chats only.
 * @method bool getRequestLocation() Optional. If True, the user's current location will be sent when the button is pressed. Available in private chats only.
 * @method KeyboardButtonPollType getRequestPoll() Optional. If specified, the user will be asked to create a poll and send it to the bot when the button is pressed. Available in private chats only.
 * @method WebAppInfo getWebApp() Optional. If specified, the described Web App will be launched when the button is pressed. The Web App will be able to send a “web_app_data” service message. Available in private chats only.
 *
 * @method bool isText()
 * @method bool isIconCustomEmojiId()
 * @method bool isStyle()
 * @method bool isRequestUsers()
 * @method bool isRequestChat()
 * @method bool isRequestManagedBot()
 * @method bool isRequestContact()
 * @method bool isRequestLocation()
 * @method bool isRequestPoll()
 * @method bool isWebApp()
 *
 * @method $this setText()
 * @method $this setIconCustomEmojiId()
 * @method $this setStyle()
 * @method $this setRequestUsers()
 * @method $this setRequestChat()
 * @method $this setRequestManagedBot()
 * @method $this setRequestContact()
 * @method $this setRequestLocation()
 * @method $this setRequestPoll()
 * @method $this setWebApp()
 *
 * @method $this unsetText()
 * @method $this unsetIconCustomEmojiId()
 * @method $this unsetStyle()
 * @method $this unsetRequestUsers()
 * @method $this unsetRequestChat()
 * @method $this unsetRequestManagedBot()
 * @method $this unsetRequestContact()
 * @method $this unsetRequestLocation()
 * @method $this unsetRequestPoll()
 * @method $this unsetWebApp()
 *
 * @property string $text Text of the button. If none of the fields other than text, icon_custom_emoji_id, and style are used, it will be sent as a message when the button is pressed.
 * @property string $icon_custom_emoji_id Optional. Unique identifier of the custom emoji shown before the text of the button. Can only be used by bots that purchased additional usernames on Fragment or in the messages directly sent by the bot to private, group and supergroup chats if the owner of the bot has a Telegram Premium subscription.
 * @property string $style Optional. Style of the button. Must be one of “danger” (red), “success” (green) or “primary” (blue). If omitted, then an app-specific style is used.
 * @property KeyboardButtonRequestUsers $request_users Optional. If specified, pressing the button will open a list of suitable users. Identifiers of selected users will be sent to the bot in a “users_shared” service message. Available in private chats only.
 * @property KeyboardButtonRequestChat $request_chat Optional. If specified, pressing the button will open a list of suitable chats. Tapping on a chat will send its identifier to the bot in a “chat_shared” service message. Available in private chats only.
 * @property KeyboardButtonRequestManagedBot $request_managed_bot Optional. If specified, pressing the button will ask the user to create and share a bot that will be managed by the current bot. Available for bots that enabled management of other bots in the ＠BotFather Mini App. Available in private chats only.
 * @property bool $request_contact Optional. If True, the user's phone number will be sent as a contact when the button is pressed. Available in private chats only.
 * @property bool $request_location Optional. If True, the user's current location will be sent when the button is pressed. Available in private chats only.
 * @property KeyboardButtonPollType $request_poll Optional. If specified, the user will be asked to create a poll and send it to the bot when the button is pressed. Available in private chats only.
 * @property WebAppInfo $web_app Optional. If specified, the described Web App will be launched when the button is pressed. The Web App will be able to send a “web_app_data” service message. Available in private chats only.
 *
 * @see https://core.telegram.org/bots/api#keyboardbutton
 */
class KeyboardButton extends \Jeely\Nectar implements KeyboardButtonInterface
{
    public const JSON_PROPERTY_MAP = [
        'text' => 'string',
        'icon_custom_emoji_id' => 'string',
        'style' => 'string',
        'request_users' => 'KeyboardButtonRequestUsers',
        'request_chat' => 'KeyboardButtonRequestChat',
        'request_managed_bot' => 'KeyboardButtonRequestManagedBot',
        'request_contact' => 'bool',
        'request_location' => 'bool',
        'request_poll' => 'KeyboardButtonPollType',
        'web_app' => 'WebAppInfo',
    ];
}
