<?php

namespace Jeely\Api\Types;

/**
 * @class BusinessConnection
 * @description Describes the connection of the bot with a business account.
 *
 * @method string getId() Unique identifier of the business connection
 * @method User getUser() Business account user that created the business connection
 * @method int getUserChatId() Identifier of a private chat with the user who created the business connection. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
 * @method int getDate() Date the connection was established in Unix time
 * @method BusinessBotRights getRights() Optional. Rights of the business bot
 * @method bool getIsEnabled() True, if the connection is active
 *
 * @method bool isId()
 * @method bool isUser()
 * @method bool isUserChatId()
 * @method bool isDate()
 * @method bool isRights()
 * @method bool isIsEnabled()
 *
 * @method $this setId()
 * @method $this setUser()
 * @method $this setUserChatId()
 * @method $this setDate()
 * @method $this setRights()
 * @method $this setIsEnabled()
 *
 * @method $this unsetId()
 * @method $this unsetUser()
 * @method $this unsetUserChatId()
 * @method $this unsetDate()
 * @method $this unsetRights()
 * @method $this unsetIsEnabled()
 *
 * @property string $id Unique identifier of the business connection
 * @property User $user Business account user that created the business connection
 * @property int $user_chat_id Identifier of a private chat with the user who created the business connection. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
 * @property int $date Date the connection was established in Unix time
 * @property BusinessBotRights $rights Optional. Rights of the business bot
 * @property bool $is_enabled True, if the connection is active
 *
 * @see https://core.telegram.org/bots/api#businessconnection
 */
class BusinessConnection extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'id' => 'string',
        'user' => 'User',
        'user_chat_id' => 'int',
        'date' => 'int',
        'rights' => 'BusinessBotRights',
        'is_enabled' => 'bool',
    ];
}
