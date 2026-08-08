<?php

namespace Jeely\Api\Types;

/**
 * @class ChatShared
 * @description This object contains information about a chat that was shared with the bot using a KeyboardButtonRequestChat button.
 *
 * @method int getRequestId() Identifier of the request
 * @method int getChatId() Identifier of the shared chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. The bot may not have access to the chat and could be unable to use this identifier, unless the chat is already known to the bot by some other means.
 * @method string getTitle() Optional. Title of the chat, if the title was requested by the bot
 * @method string getUsername() Optional. Username of the chat, if the username was requested by the bot and available
 * @method PhotoSize[] getPhoto() Optional. Available sizes of the chat photo, if the photo was requested by the bot
 *
 * @method bool isRequestId()
 * @method bool isChatId()
 * @method bool isTitle()
 * @method bool isUsername()
 * @method bool isPhoto()
 *
 * @method $this setRequestId()
 * @method $this setChatId()
 * @method $this setTitle()
 * @method $this setUsername()
 * @method $this setPhoto()
 *
 * @method $this unsetRequestId()
 * @method $this unsetChatId()
 * @method $this unsetTitle()
 * @method $this unsetUsername()
 * @method $this unsetPhoto()
 *
 * @property int $request_id Identifier of the request
 * @property int $chat_id Identifier of the shared chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. The bot may not have access to the chat and could be unable to use this identifier, unless the chat is already known to the bot by some other means.
 * @property string $title Optional. Title of the chat, if the title was requested by the bot
 * @property string $username Optional. Username of the chat, if the username was requested by the bot and available
 * @property PhotoSize[] $photo Optional. Available sizes of the chat photo, if the photo was requested by the bot
 *
 * @see https://core.telegram.org/bots/api#chatshared
 */
class ChatShared extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'request_id' => 'int',
        'chat_id' => 'int',
        'title' => 'string',
        'username' => 'string',
        'photo' => 'PhotoSize[]',
    ];
}
