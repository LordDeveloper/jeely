<?php

namespace Jeely\Api\Types;

/**
 * @class KeyboardButtonRequestChat
 * @description This object defines the criteria used to request a suitable chat. Information about the selected chat will be shared with the bot when the corresponding button is pressed. The bot will be granted requested rights in the chat if appropriate. More about requesting chats ».
 *
 * @method int getRequestId() Signed 32-bit identifier of the request, which will be received back in the ChatShared object. Must be unique within the message.
 * @method bool getChatIsChannel() Pass True to request a channel chat, pass False to request a group or a supergroup chat
 * @method bool getChatIsForum() Optional. Pass True to request a forum supergroup, pass False to request a non-forum chat. If not specified, no additional restrictions are applied.
 * @method bool getChatHasUsername() Optional. Pass True to request a supergroup or a channel with a username, pass False to request a chat without a username. If not specified, no additional restrictions are applied.
 * @method bool getChatIsCreated() Optional. Pass True to request a chat owned by the user. Otherwise, no additional restrictions are applied.
 * @method ChatAdministratorRights getUserAdministratorRights() Optional. A JSON-serialized object listing the required administrator rights of the user in the chat. The rights must be a superset of bot_administrator_rights. If not specified, no additional restrictions are applied.
 * @method ChatAdministratorRights getBotAdministratorRights() Optional. A JSON-serialized object listing the required administrator rights of the bot in the chat. The rights must be a subset of user_administrator_rights. If not specified, no additional restrictions are applied.
 * @method bool getBotIsMember() Optional. Pass True to request a chat with the bot as a member. Otherwise, no additional restrictions are applied.
 * @method bool getRequestTitle() Optional. Pass True to request the chat's title
 * @method bool getRequestUsername() Optional. Pass True to request the chat's username
 * @method bool getRequestPhoto() Optional. Pass True to request the chat's photo
 *
 * @method bool isRequestId()
 * @method bool isChatIsChannel()
 * @method bool isChatIsForum()
 * @method bool isChatHasUsername()
 * @method bool isChatIsCreated()
 * @method bool isUserAdministratorRights()
 * @method bool isBotAdministratorRights()
 * @method bool isBotIsMember()
 * @method bool isRequestTitle()
 * @method bool isRequestUsername()
 * @method bool isRequestPhoto()
 *
 * @method $this setRequestId()
 * @method $this setChatIsChannel()
 * @method $this setChatIsForum()
 * @method $this setChatHasUsername()
 * @method $this setChatIsCreated()
 * @method $this setUserAdministratorRights()
 * @method $this setBotAdministratorRights()
 * @method $this setBotIsMember()
 * @method $this setRequestTitle()
 * @method $this setRequestUsername()
 * @method $this setRequestPhoto()
 *
 * @method $this unsetRequestId()
 * @method $this unsetChatIsChannel()
 * @method $this unsetChatIsForum()
 * @method $this unsetChatHasUsername()
 * @method $this unsetChatIsCreated()
 * @method $this unsetUserAdministratorRights()
 * @method $this unsetBotAdministratorRights()
 * @method $this unsetBotIsMember()
 * @method $this unsetRequestTitle()
 * @method $this unsetRequestUsername()
 * @method $this unsetRequestPhoto()
 *
 * @property int $request_id Signed 32-bit identifier of the request, which will be received back in the ChatShared object. Must be unique within the message.
 * @property bool $chat_is_channel Pass True to request a channel chat, pass False to request a group or a supergroup chat
 * @property bool $chat_is_forum Optional. Pass True to request a forum supergroup, pass False to request a non-forum chat. If not specified, no additional restrictions are applied.
 * @property bool $chat_has_username Optional. Pass True to request a supergroup or a channel with a username, pass False to request a chat without a username. If not specified, no additional restrictions are applied.
 * @property bool $chat_is_created Optional. Pass True to request a chat owned by the user. Otherwise, no additional restrictions are applied.
 * @property ChatAdministratorRights $user_administrator_rights Optional. A JSON-serialized object listing the required administrator rights of the user in the chat. The rights must be a superset of bot_administrator_rights. If not specified, no additional restrictions are applied.
 * @property ChatAdministratorRights $bot_administrator_rights Optional. A JSON-serialized object listing the required administrator rights of the bot in the chat. The rights must be a subset of user_administrator_rights. If not specified, no additional restrictions are applied.
 * @property bool $bot_is_member Optional. Pass True to request a chat with the bot as a member. Otherwise, no additional restrictions are applied.
 * @property bool $request_title Optional. Pass True to request the chat's title
 * @property bool $request_username Optional. Pass True to request the chat's username
 * @property bool $request_photo Optional. Pass True to request the chat's photo
 *
 * @see https://core.telegram.org/bots/api#keyboardbuttonrequestchat
 */
class KeyboardButtonRequestChat extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'request_id' => 'int',
        'chat_is_channel' => 'bool',
        'chat_is_forum' => 'bool',
        'chat_has_username' => 'bool',
        'chat_is_created' => 'bool',
        'user_administrator_rights' => 'ChatAdministratorRights',
        'bot_administrator_rights' => 'ChatAdministratorRights',
        'bot_is_member' => 'bool',
        'request_title' => 'bool',
        'request_username' => 'bool',
        'request_photo' => 'bool',
    ];
}
