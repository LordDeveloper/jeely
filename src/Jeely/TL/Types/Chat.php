<?php

namespace Jeely\TL\Types;

use GuzzleHttp\Promise\PromiseInterface;
use Jeely\LazyUpdates;


/**
 * @class Chat
 * @description This object represents a chat.
 *
 * @method int getId() Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
 * @method string getType() Type of chat, can be either “private”, “group”, “supergroup” or “channel”
 * @method string getTitle() Optional. Title, for supergroups, channels and group chats
 * @method string getUsername() Optional. Username, for private chats, supergroups and channels if available
 * @method string getFirstName() Optional. First name of the other party in a private chat
 * @method string getLastName() Optional. Last name of the other party in a private chat
 * @method string getFullName() Optional. Full name of the other party in a private chat
 * @method ChatPhoto getPhoto() Optional. Chat photo. Returned only in getChat.
 * @method string getBio() Optional. Bio of the other party in a private chat. Returned only in getChat.
 * @method bool getIsPublic() Optional. True, if the channel is public.
 * @method bool getHasPrivateForwards() Optional. True, if privacy settings of the other party in the private chat allows to use tg://user?id=<user_id> links only in chats with the user. Returned only in getChat.
 * @method bool getHasRestrictedVoiceAndVideoMessages() Optional. True, if the privacy settings of the other party restrict sending voice and video note messages in the private chat. Returned only in getChat.
 * @method bool getJoinToSendMessages() Optional. True, if users need to join the supergroup before they can send messages. Returned only in getChat.
 * @method bool getJoinByRequest() Optional. True, if all users directly joining the supergroup need to be approved by supergroup administrators. Returned only in getChat.
 * @method string getDescription() Optional. Description, for groups, supergroups and channel chats. Returned only in getChat.
 * @method string getInviteLink() Optional. Primary invite link, for groups, supergroups and channel chats. Returned only in getChat.
 * @method Message getPinnedMessage() Optional. The most recent pinned message (by sending date). Returned only in getChat.
 * @method ChatPermissions getPermissions() Optional. Default chat member permissions, for groups and supergroups. Returned only in getChat.
 * @method int getSlowModeDelay() Optional. For supergroups, the minimum allowed delay between consecutive messages sent by each unpriviledged user;
 * in seconds. Returned only in getChat.
 * @method int getMessageAutoDeleteTime() Optional. The time after which all messages sent to the chat will be automatically deleted;
 * in seconds. Returned only in getChat.
 * @method bool getHasProtectedContent() Optional. True, if messages from the chat can't be forwarded to other chats. Returned only in getChat.
 * @method string getStickerSetName() Optional. For supergroups, name of group sticker set. Returned only in getChat.
 * @method bool getCanSetStickerSet() Optional. True, if the bot can change the group sticker set. Returned only in getChat.
 * @method int getLinkedChatId() Optional. Unique identifier for the linked chat, i.e. the discussion group identifier for a channel and vice versa;
 * for supergroups and channel chats. This identifier may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier. Returned only in getChat.
 * @method ChatLocation getLocation() Optional. For supergroups, the location to which the supergroup is connected. Returned only in getChat.
 *
 * @method bool isId()
 * @method bool isType()
 * @method bool isTitle()
 * @method bool isUsername()
 * @method bool isFirstName()
 * @method bool isLastName()
 * @method bool isFullName()
 * @method bool isPhoto()
 * @method bool isBio()
 * @method bool isIsPublic()
 * @method bool isHasPrivateForwards()
 * @method bool isHasRestrictedVoiceAndVideoMessages()
 * @method bool isJoinToSendMessages()
 * @method bool isJoinByRequest()
 * @method bool isDescription()
 * @method bool isInviteLink()
 * @method bool isPinnedMessage()
 * @method bool isPermissions()
 * @method bool isSlowModeDelay()
 * @method bool isMessageAutoDeleteTime()
 * @method bool isHasProtectedContent()
 * @method bool isStickerSetName()
 * @method bool isCanSetStickerSet()
 * @method bool isLinkedChatId()
 * @method bool isLocation()
 *
 * @method $this setId()
 * @method $this setType()
 * @method $this setTitle()
 * @method $this setUsername()
 * @method $this setFirstName()
 * @method $this setLastName()
 * @method $this setFullName()
 * @method $this setPhoto()
 * @method $this setBio()
 * @method $this setIsPublic()
 * @method $this setHasPrivateForwards()
 * @method $this setHasRestrictedVoiceAndVideoMessages()
 * @method $this setJoinToSendMessages()
 * @method $this setJoinByRequest()
 * @method $this setDescription()
 * @method $this setInviteLink()
 * @method $this setPinnedMessage()
 * @method $this setPermissions()
 * @method $this setSlowModeDelay()
 * @method $this setMessageAutoDeleteTime()
 * @method $this setHasProtectedContent()
 * @method $this setStickerSetName()
 * @method $this setCanSetStickerSet()
 * @method $this setLinkedChatId()
 * @method $this setLocation()
 *
 * @method $this unsetId()
 * @method $this unsetType()
 * @method $this unsetTitle()
 * @method $this unsetUsername()
 * @method $this unsetFirstName()
 * @method $this unsetLastName()
 * @method $this unsetFullName()
 * @method $this unsetPhoto()
 * @method $this unsetBio()
 * @method $this unsetIsPublic()
 * @method $this unsetHasPrivateForwards()
 * @method $this unsetHasRestrictedVoiceAndVideoMessages()
 * @method $this unsetJoinToSendMessages()
 * @method $this unsetJoinByRequest()
 * @method $this unsetDescription()
 * @method $this unsetInviteLink()
 * @method $this unsetPinnedMessage()
 * @method $this unsetPermissions()
 * @method $this unsetSlowModeDelay()
 * @method $this unsetMessageAutoDeleteTime()
 * @method $this unsetHasProtectedContent()
 * @method $this unsetStickerSetName()
 * @method $this unsetCanSetStickerSet()
 * @method $this unsetLinkedChatId()
 * @method $this unsetLocation()
 *
 * @property int $id Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
 * @property string $type Type of chat, can be either “private”, “group”, “supergroup” or “channel”
 * @property string $title Optional. Title, for supergroups, channels and group chats
 * @property string $username Optional. Username, for private chats, supergroups and channels if available
 * @property string $first_name Optional. First name of the other party in a private chat
 * @property string $last_name Optional. Last name of the other party in a private chat
 * @property string $full_name Optional. Full name of the other party in a private chat
 * @property ChatPhoto $photo Optional. Chat photo. Returned only in getChat.
 * @property string $bio Optional. Bio of the other party in a private chat. Returned only in getChat.
 * @property bool $is_public Optional. True, if the channel is public.
 * @property bool $has_private_forwards Optional. True, if privacy settings of the other party in the private chat allows to use tg://user?id=<user_id> links only in chats with the user. Returned only in getChat.
 * @property bool $has_restricted_voice_and_video_messages Optional. True, if the privacy settings of the other party restrict sending voice and video note messages in the private chat. Returned only in getChat.
 * @property bool $join_to_send_messages Optional. True, if users need to join the supergroup before they can send messages. Returned only in getChat.
 * @property bool $join_by_request Optional. True, if all users directly joining the supergroup need to be approved by supergroup administrators. Returned only in getChat.
 * @property string $description Optional. Description, for groups, supergroups and channel chats. Returned only in getChat.
 * @property string $invite_link Optional. Primary invite link, for groups, supergroups and channel chats. Returned only in getChat.
 * @property Message $pinned_message Optional. The most recent pinned message (by sending date). Returned only in getChat.
 * @property ChatPermissions $permissions Optional. Default chat member permissions, for groups and supergroups. Returned only in getChat.
 * @property int $slow_mode_delay Optional. For supergroups, the minimum allowed delay between consecutive messages sent by each unpriviledged user; in seconds. Returned only in getChat.
 * @property int $message_auto_delete_time Optional. The time after which all messages sent to the chat will be automatically deleted; in seconds. Returned only in getChat.
 * @property bool $has_protected_content Optional. True, if messages from the chat can't be forwarded to other chats. Returned only in getChat.
 * @property string $sticker_set_name Optional. For supergroups, name of group sticker set. Returned only in getChat.
 * @property bool $can_set_sticker_set Optional. True, if the bot can change the group sticker set. Returned only in getChat.
 * @property int $linked_chat_id Optional. Unique identifier for the linked chat, i.e. the discussion group identifier for a channel and vice versa; for supergroups and channel chats. This identifier may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier. Returned only in getChat.
 * @property ChatLocation $location Optional. For supergroups, the location to which the supergroup is connected. Returned only in getChat.
 *
 * @see https://core.telegram.org/bots/api#chat
 */
class Chat extends LazyUpdates
{
    const JSON_PROPERTY_MAP = [
        'id' => 'int',
        'type' => 'string',
        'title' => 'string',
        'username' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'full_name' => 'string',
        'photo' => 'ChatPhoto',
        'bio' => 'string',
        'is_public' => 'bool',
        'has_private_forwards' => 'bool',
        'has_restricted_voice_and_video_messages' => 'bool',
        'join_to_send_messages' => 'bool',
        'join_by_request' => 'bool',
        'description' => 'string',
        'invite_link' => 'string',
        'pinned_message' => 'Message',
        'permissions' => 'ChatPermissions',
        'slow_mode_delay' => 'int',
        'message_auto_delete_time' => 'int',
        'has_protected_content' => 'bool',
        'sticker_set_name' => 'string',
        'can_set_sticker_set' => 'bool',
        'linked_chat_id' => 'int',
        'location' => 'ChatLocation',
    ];

    public function _init()
    {
        $this->_setProperty('full_name', implode(' ', [
            $this->_getProperty('first_name'), $this->_getProperty('last_name'),
        ]));

        if ($this->_getProperty('type') === 'channel') {
            $this->_setProperty('is_public', $this->_isProperty('username'));
        }
    }

    public function leave(): Error|PromiseInterface|bool
    {
        return $this->telegram->leaveChat([
            'chat_id' => $this->id,
        ]);
    }

    public function getMember($memberId, ... $args): Error|PromiseInterface|ChatMember
    {
        return $this->telegram->getChatMember(... array_merge($args, [
            'chat_id' => $this->id,
            'user_id' => $memberId,
        ]));
    }
}