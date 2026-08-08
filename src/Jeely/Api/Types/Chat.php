<?php

namespace Jeely\Api\Types;

use Jeely\Mixins\InteractsWithChat;

/**
 * @class Chat
 * @description This object represents a chat.
 *
 * @method int getId() Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
 * @method string getType() Type of the chat, can be either “private”, “group”, “supergroup” or “channel”
 * @method string getTitle() Optional. Title, for supergroups, channels and group chats
 * @method string getUsername() Optional. Username, for private chats, supergroups and channels if available
 * @method string getFirstName() Optional. First name of the other party in a private chat
 * @method string getLastName() Optional. Last name of the other party in a private chat
 * @method bool getIsForum() Optional. True, if the supergroup chat is a forum (has topics enabled)
 * @method bool getIsDirectMessages() Optional. True, if the chat is the direct messages chat of a channel
 *
 * @method bool isId()
 * @method bool isType()
 * @method bool isTitle()
 * @method bool isUsername()
 * @method bool isFirstName()
 * @method bool isLastName()
 * @method bool isIsForum()
 * @method bool isIsDirectMessages()
 *
 * @method $this setId()
 * @method $this setType()
 * @method $this setTitle()
 * @method $this setUsername()
 * @method $this setFirstName()
 * @method $this setLastName()
 * @method $this setIsForum()
 * @method $this setIsDirectMessages()
 *
 * @method $this unsetId()
 * @method $this unsetType()
 * @method $this unsetTitle()
 * @method $this unsetUsername()
 * @method $this unsetFirstName()
 * @method $this unsetLastName()
 * @method $this unsetIsForum()
 * @method $this unsetIsDirectMessages()
 *
 * @property int $id Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
 * @property string $type Type of the chat, can be either “private”, “group”, “supergroup” or “channel”
 * @property string $title Optional. Title, for supergroups, channels and group chats
 * @property string $username Optional. Username, for private chats, supergroups and channels if available
 * @property string $first_name Optional. First name of the other party in a private chat
 * @property string $last_name Optional. Last name of the other party in a private chat
 * @property bool $is_forum Optional. True, if the supergroup chat is a forum (has topics enabled)
 * @property bool $is_direct_messages Optional. True, if the chat is the direct messages chat of a channel
 *
 * @see https://core.telegram.org/bots/api#chat
 */
class Chat extends \Jeely\Nectar
{
    use InteractsWithChat;

    public const JSON_PROPERTY_MAP = [
        'id' => 'int',
        'type' => 'string',
        'title' => 'string',
        'username' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'is_forum' => 'bool',
        'is_direct_messages' => 'bool',
    ];
}
