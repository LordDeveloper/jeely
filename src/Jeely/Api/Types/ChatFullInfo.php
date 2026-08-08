<?php

namespace Jeely\Api\Types;

/**
 * @class ChatFullInfo
 * @description This object contains full information about a chat.
 *
 * @method int getId() Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
 * @method string getType() Type of the chat, can be either “private”, “group”, “supergroup” or “channel”
 * @method string getTitle() Optional. Title, for supergroups, channels and group chats
 * @method string getUsername() Optional. Username, for private chats, supergroups and channels if available
 * @method string getFirstName() Optional. First name of the other party in a private chat
 * @method string getLastName() Optional. Last name of the other party in a private chat
 * @method bool getIsForum() Optional. True, if the supergroup chat is a forum (has topics enabled)
 * @method bool getIsDirectMessages() Optional. True, if the chat is the direct messages chat of a channel
 * @method int getAccentColorId() Identifier of the accent color for the chat name and backgrounds of the chat photo, reply header, and link preview. See accent colors for more details.
 * @method int getMaxReactionCount() The maximum number of reactions that can be set on a message in the chat
 * @method ChatPhoto getPhoto() Optional. Chat photo
 * @method string[] getActiveUsernames() Optional. If non-empty, the list of all active chat usernames; for private chats, supergroups and channels
 * @method Birthdate getBirthdate() Optional. For private chats, the date of birth of the user
 * @method BusinessIntro getBusinessIntro() Optional. For private chats with business accounts, the intro of the business
 * @method BusinessLocation getBusinessLocation() Optional. For private chats with business accounts, the location of the business
 * @method BusinessOpeningHours getBusinessOpeningHours() Optional. For private chats with business accounts, the opening hours of the business
 * @method Chat getPersonalChat() Optional. For private chats, the personal channel of the user
 * @method Chat getParentChat() Optional. Information about the corresponding channel chat; for direct messages chats only
 * @method ReactionType[] getAvailableReactions() Optional. List of available reactions allowed in the chat. If omitted, then all emoji reactions are allowed.
 * @method string getBackgroundCustomEmojiId() Optional. Custom emoji identifier of the emoji chosen by the chat for the reply header and link preview background
 * @method int getProfileAccentColorId() Optional. Identifier of the accent color for the chat's profile background. See profile accent colors for more details.
 * @method string getProfileBackgroundCustomEmojiId() Optional. Custom emoji identifier of the emoji chosen by the chat for its profile background
 * @method string getEmojiStatusCustomEmojiId() Optional. Custom emoji identifier of the emoji status of the chat or the other party in a private chat
 * @method int getEmojiStatusExpirationDate() Optional. Expiration date of the emoji status of the chat or the other party in a private chat, in Unix time, if any
 * @method string getBio() Optional. Bio of the other party in a private chat
 * @method bool getHasPrivateForwards() Optional. True, if privacy settings of the other party in the private chat allows to use tg://user?id=<user_id> links only in chats with the user
 * @method bool getHasRestrictedVoiceAndVideoMessages() Optional. True, if the privacy settings of the other party restrict sending voice and video note messages in the private chat
 * @method bool getJoinToSendMessages() Optional. True, if users need to join the supergroup before they can send messages
 * @method bool getJoinByRequest() Optional. True, if all users directly joining the supergroup without using an invite link need to be approved by supergroup administrators
 * @method string getDescription() Optional. Description, for groups, supergroups and channel chats
 * @method string getInviteLink() Optional. Primary invite link, for groups, supergroups and channel chats
 * @method Message getPinnedMessage() Optional. The most recent pinned message (by sending date)
 * @method ChatPermissions getPermissions() Optional. Default chat member permissions, for groups and supergroups
 * @method AcceptedGiftTypes getAcceptedGiftTypes() Information about types of gifts that are accepted by the chat or by the corresponding user for private chats
 * @method bool getCanSendPaidMedia() Optional. True, if paid media messages can be sent or forwarded to the channel chat. The field is available only for channel chats.
 * @method int getSlowModeDelay() Optional. For supergroups, the minimum allowed delay between consecutive messages sent by each unprivileged user; in seconds
 * @method int getUnrestrictBoostCount() Optional. For supergroups, the minimum number of boosts that a non-administrator user needs to add in order to ignore slow mode and chat permissions
 * @method int getMessageAutoDeleteTime() Optional. The time after which all messages sent to the chat will be automatically deleted; in seconds
 * @method bool getHasAggressiveAntiSpamEnabled() Optional. True, if aggressive anti-spam checks are enabled in the supergroup. The field is only available to chat administrators.
 * @method bool getHasHiddenMembers() Optional. True, if non-administrators can only get the list of bots and administrators in the chat
 * @method bool getHasProtectedContent() Optional. True, if messages from the chat can't be forwarded to other chats
 * @method bool getHasVisibleHistory() Optional. True, if new chat members will have access to old messages; available only to chat administrators
 * @method string getStickerSetName() Optional. For supergroups, name of the group sticker set
 * @method bool getCanSetStickerSet() Optional. True, if the bot can change the group sticker set
 * @method string getCustomEmojiStickerSetName() Optional. For supergroups, the name of the group's custom emoji sticker set. Custom emoji from this set can be used by all users and bots in the group.
 * @method int getLinkedChatId() Optional. Unique identifier for the linked chat, i.e. the discussion group identifier for a channel and vice versa; for supergroups and channel chats. This identifier may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
 * @method ChatLocation getLocation() Optional. For supergroups, the location to which the supergroup is connected
 * @method UserRating getRating() Optional. For private chats, the rating of the user if any
 * @method Audio getFirstProfileAudio() Optional. For private chats, the first audio added to the profile of the user
 * @method UniqueGiftColors getUniqueGiftColors() Optional. The color scheme based on a unique gift that must be used for the chat's name, message replies and link previews
 * @method int getPaidMessageStarCount() Optional. The number of Telegram Stars a general user has to pay to send a message to the chat
 * @method User getGuardBot() Optional. The bot that processes join request queries in the chat. The field is only available to chat administrators.
 * @method Community getCommunity() Optional. The Community to which the chat belongs
 *
 * @method bool isId()
 * @method bool isType()
 * @method bool isTitle()
 * @method bool isUsername()
 * @method bool isFirstName()
 * @method bool isLastName()
 * @method bool isIsForum()
 * @method bool isIsDirectMessages()
 * @method bool isAccentColorId()
 * @method bool isMaxReactionCount()
 * @method bool isPhoto()
 * @method bool isActiveUsernames()
 * @method bool isBirthdate()
 * @method bool isBusinessIntro()
 * @method bool isBusinessLocation()
 * @method bool isBusinessOpeningHours()
 * @method bool isPersonalChat()
 * @method bool isParentChat()
 * @method bool isAvailableReactions()
 * @method bool isBackgroundCustomEmojiId()
 * @method bool isProfileAccentColorId()
 * @method bool isProfileBackgroundCustomEmojiId()
 * @method bool isEmojiStatusCustomEmojiId()
 * @method bool isEmojiStatusExpirationDate()
 * @method bool isBio()
 * @method bool isHasPrivateForwards()
 * @method bool isHasRestrictedVoiceAndVideoMessages()
 * @method bool isJoinToSendMessages()
 * @method bool isJoinByRequest()
 * @method bool isDescription()
 * @method bool isInviteLink()
 * @method bool isPinnedMessage()
 * @method bool isPermissions()
 * @method bool isAcceptedGiftTypes()
 * @method bool isCanSendPaidMedia()
 * @method bool isSlowModeDelay()
 * @method bool isUnrestrictBoostCount()
 * @method bool isMessageAutoDeleteTime()
 * @method bool isHasAggressiveAntiSpamEnabled()
 * @method bool isHasHiddenMembers()
 * @method bool isHasProtectedContent()
 * @method bool isHasVisibleHistory()
 * @method bool isStickerSetName()
 * @method bool isCanSetStickerSet()
 * @method bool isCustomEmojiStickerSetName()
 * @method bool isLinkedChatId()
 * @method bool isLocation()
 * @method bool isRating()
 * @method bool isFirstProfileAudio()
 * @method bool isUniqueGiftColors()
 * @method bool isPaidMessageStarCount()
 * @method bool isGuardBot()
 * @method bool isCommunity()
 *
 * @method $this setId()
 * @method $this setType()
 * @method $this setTitle()
 * @method $this setUsername()
 * @method $this setFirstName()
 * @method $this setLastName()
 * @method $this setIsForum()
 * @method $this setIsDirectMessages()
 * @method $this setAccentColorId()
 * @method $this setMaxReactionCount()
 * @method $this setPhoto()
 * @method $this setActiveUsernames()
 * @method $this setBirthdate()
 * @method $this setBusinessIntro()
 * @method $this setBusinessLocation()
 * @method $this setBusinessOpeningHours()
 * @method $this setPersonalChat()
 * @method $this setParentChat()
 * @method $this setAvailableReactions()
 * @method $this setBackgroundCustomEmojiId()
 * @method $this setProfileAccentColorId()
 * @method $this setProfileBackgroundCustomEmojiId()
 * @method $this setEmojiStatusCustomEmojiId()
 * @method $this setEmojiStatusExpirationDate()
 * @method $this setBio()
 * @method $this setHasPrivateForwards()
 * @method $this setHasRestrictedVoiceAndVideoMessages()
 * @method $this setJoinToSendMessages()
 * @method $this setJoinByRequest()
 * @method $this setDescription()
 * @method $this setInviteLink()
 * @method $this setPinnedMessage()
 * @method $this setPermissions()
 * @method $this setAcceptedGiftTypes()
 * @method $this setCanSendPaidMedia()
 * @method $this setSlowModeDelay()
 * @method $this setUnrestrictBoostCount()
 * @method $this setMessageAutoDeleteTime()
 * @method $this setHasAggressiveAntiSpamEnabled()
 * @method $this setHasHiddenMembers()
 * @method $this setHasProtectedContent()
 * @method $this setHasVisibleHistory()
 * @method $this setStickerSetName()
 * @method $this setCanSetStickerSet()
 * @method $this setCustomEmojiStickerSetName()
 * @method $this setLinkedChatId()
 * @method $this setLocation()
 * @method $this setRating()
 * @method $this setFirstProfileAudio()
 * @method $this setUniqueGiftColors()
 * @method $this setPaidMessageStarCount()
 * @method $this setGuardBot()
 * @method $this setCommunity()
 *
 * @method $this unsetId()
 * @method $this unsetType()
 * @method $this unsetTitle()
 * @method $this unsetUsername()
 * @method $this unsetFirstName()
 * @method $this unsetLastName()
 * @method $this unsetIsForum()
 * @method $this unsetIsDirectMessages()
 * @method $this unsetAccentColorId()
 * @method $this unsetMaxReactionCount()
 * @method $this unsetPhoto()
 * @method $this unsetActiveUsernames()
 * @method $this unsetBirthdate()
 * @method $this unsetBusinessIntro()
 * @method $this unsetBusinessLocation()
 * @method $this unsetBusinessOpeningHours()
 * @method $this unsetPersonalChat()
 * @method $this unsetParentChat()
 * @method $this unsetAvailableReactions()
 * @method $this unsetBackgroundCustomEmojiId()
 * @method $this unsetProfileAccentColorId()
 * @method $this unsetProfileBackgroundCustomEmojiId()
 * @method $this unsetEmojiStatusCustomEmojiId()
 * @method $this unsetEmojiStatusExpirationDate()
 * @method $this unsetBio()
 * @method $this unsetHasPrivateForwards()
 * @method $this unsetHasRestrictedVoiceAndVideoMessages()
 * @method $this unsetJoinToSendMessages()
 * @method $this unsetJoinByRequest()
 * @method $this unsetDescription()
 * @method $this unsetInviteLink()
 * @method $this unsetPinnedMessage()
 * @method $this unsetPermissions()
 * @method $this unsetAcceptedGiftTypes()
 * @method $this unsetCanSendPaidMedia()
 * @method $this unsetSlowModeDelay()
 * @method $this unsetUnrestrictBoostCount()
 * @method $this unsetMessageAutoDeleteTime()
 * @method $this unsetHasAggressiveAntiSpamEnabled()
 * @method $this unsetHasHiddenMembers()
 * @method $this unsetHasProtectedContent()
 * @method $this unsetHasVisibleHistory()
 * @method $this unsetStickerSetName()
 * @method $this unsetCanSetStickerSet()
 * @method $this unsetCustomEmojiStickerSetName()
 * @method $this unsetLinkedChatId()
 * @method $this unsetLocation()
 * @method $this unsetRating()
 * @method $this unsetFirstProfileAudio()
 * @method $this unsetUniqueGiftColors()
 * @method $this unsetPaidMessageStarCount()
 * @method $this unsetGuardBot()
 * @method $this unsetCommunity()
 *
 * @property int $id Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
 * @property string $type Type of the chat, can be either “private”, “group”, “supergroup” or “channel”
 * @property string $title Optional. Title, for supergroups, channels and group chats
 * @property string $username Optional. Username, for private chats, supergroups and channels if available
 * @property string $first_name Optional. First name of the other party in a private chat
 * @property string $last_name Optional. Last name of the other party in a private chat
 * @property bool $is_forum Optional. True, if the supergroup chat is a forum (has topics enabled)
 * @property bool $is_direct_messages Optional. True, if the chat is the direct messages chat of a channel
 * @property int $accent_color_id Identifier of the accent color for the chat name and backgrounds of the chat photo, reply header, and link preview. See accent colors for more details.
 * @property int $max_reaction_count The maximum number of reactions that can be set on a message in the chat
 * @property ChatPhoto $photo Optional. Chat photo
 * @property string[] $active_usernames Optional. If non-empty, the list of all active chat usernames; for private chats, supergroups and channels
 * @property Birthdate $birthdate Optional. For private chats, the date of birth of the user
 * @property BusinessIntro $business_intro Optional. For private chats with business accounts, the intro of the business
 * @property BusinessLocation $business_location Optional. For private chats with business accounts, the location of the business
 * @property BusinessOpeningHours $business_opening_hours Optional. For private chats with business accounts, the opening hours of the business
 * @property Chat $personal_chat Optional. For private chats, the personal channel of the user
 * @property Chat $parent_chat Optional. Information about the corresponding channel chat; for direct messages chats only
 * @property ReactionType[] $available_reactions Optional. List of available reactions allowed in the chat. If omitted, then all emoji reactions are allowed.
 * @property string $background_custom_emoji_id Optional. Custom emoji identifier of the emoji chosen by the chat for the reply header and link preview background
 * @property int $profile_accent_color_id Optional. Identifier of the accent color for the chat's profile background. See profile accent colors for more details.
 * @property string $profile_background_custom_emoji_id Optional. Custom emoji identifier of the emoji chosen by the chat for its profile background
 * @property string $emoji_status_custom_emoji_id Optional. Custom emoji identifier of the emoji status of the chat or the other party in a private chat
 * @property int $emoji_status_expiration_date Optional. Expiration date of the emoji status of the chat or the other party in a private chat, in Unix time, if any
 * @property string $bio Optional. Bio of the other party in a private chat
 * @property bool $has_private_forwards Optional. True, if privacy settings of the other party in the private chat allows to use tg://user?id=<user_id> links only in chats with the user
 * @property bool $has_restricted_voice_and_video_messages Optional. True, if the privacy settings of the other party restrict sending voice and video note messages in the private chat
 * @property bool $join_to_send_messages Optional. True, if users need to join the supergroup before they can send messages
 * @property bool $join_by_request Optional. True, if all users directly joining the supergroup without using an invite link need to be approved by supergroup administrators
 * @property string $description Optional. Description, for groups, supergroups and channel chats
 * @property string $invite_link Optional. Primary invite link, for groups, supergroups and channel chats
 * @property Message $pinned_message Optional. The most recent pinned message (by sending date)
 * @property ChatPermissions $permissions Optional. Default chat member permissions, for groups and supergroups
 * @property AcceptedGiftTypes $accepted_gift_types Information about types of gifts that are accepted by the chat or by the corresponding user for private chats
 * @property bool $can_send_paid_media Optional. True, if paid media messages can be sent or forwarded to the channel chat. The field is available only for channel chats.
 * @property int $slow_mode_delay Optional. For supergroups, the minimum allowed delay between consecutive messages sent by each unprivileged user; in seconds
 * @property int $unrestrict_boost_count Optional. For supergroups, the minimum number of boosts that a non-administrator user needs to add in order to ignore slow mode and chat permissions
 * @property int $message_auto_delete_time Optional. The time after which all messages sent to the chat will be automatically deleted; in seconds
 * @property bool $has_aggressive_anti_spam_enabled Optional. True, if aggressive anti-spam checks are enabled in the supergroup. The field is only available to chat administrators.
 * @property bool $has_hidden_members Optional. True, if non-administrators can only get the list of bots and administrators in the chat
 * @property bool $has_protected_content Optional. True, if messages from the chat can't be forwarded to other chats
 * @property bool $has_visible_history Optional. True, if new chat members will have access to old messages; available only to chat administrators
 * @property string $sticker_set_name Optional. For supergroups, name of the group sticker set
 * @property bool $can_set_sticker_set Optional. True, if the bot can change the group sticker set
 * @property string $custom_emoji_sticker_set_name Optional. For supergroups, the name of the group's custom emoji sticker set. Custom emoji from this set can be used by all users and bots in the group.
 * @property int $linked_chat_id Optional. Unique identifier for the linked chat, i.e. the discussion group identifier for a channel and vice versa; for supergroups and channel chats. This identifier may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
 * @property ChatLocation $location Optional. For supergroups, the location to which the supergroup is connected
 * @property UserRating $rating Optional. For private chats, the rating of the user if any
 * @property Audio $first_profile_audio Optional. For private chats, the first audio added to the profile of the user
 * @property UniqueGiftColors $unique_gift_colors Optional. The color scheme based on a unique gift that must be used for the chat's name, message replies and link previews
 * @property int $paid_message_star_count Optional. The number of Telegram Stars a general user has to pay to send a message to the chat
 * @property User $guard_bot Optional. The bot that processes join request queries in the chat. The field is only available to chat administrators.
 * @property Community $community Optional. The Community to which the chat belongs
 *
 * @see https://core.telegram.org/bots/api#chatfullinfo
 */
class ChatFullInfo extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'id' => 'int',
        'type' => 'string',
        'title' => 'string',
        'username' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'is_forum' => 'bool',
        'is_direct_messages' => 'bool',
        'accent_color_id' => 'int',
        'max_reaction_count' => 'int',
        'photo' => 'ChatPhoto',
        'active_usernames' => 'string[]',
        'birthdate' => 'Birthdate',
        'business_intro' => 'BusinessIntro',
        'business_location' => 'BusinessLocation',
        'business_opening_hours' => 'BusinessOpeningHours',
        'personal_chat' => 'Chat',
        'parent_chat' => 'Chat',
        'available_reactions' => 'ReactionType[]',
        'background_custom_emoji_id' => 'string',
        'profile_accent_color_id' => 'int',
        'profile_background_custom_emoji_id' => 'string',
        'emoji_status_custom_emoji_id' => 'string',
        'emoji_status_expiration_date' => 'int',
        'bio' => 'string',
        'has_private_forwards' => 'bool',
        'has_restricted_voice_and_video_messages' => 'bool',
        'join_to_send_messages' => 'bool',
        'join_by_request' => 'bool',
        'description' => 'string',
        'invite_link' => 'string',
        'pinned_message' => 'Message',
        'permissions' => 'ChatPermissions',
        'accepted_gift_types' => 'AcceptedGiftTypes',
        'can_send_paid_media' => 'bool',
        'slow_mode_delay' => 'int',
        'unrestrict_boost_count' => 'int',
        'message_auto_delete_time' => 'int',
        'has_aggressive_anti_spam_enabled' => 'bool',
        'has_hidden_members' => 'bool',
        'has_protected_content' => 'bool',
        'has_visible_history' => 'bool',
        'sticker_set_name' => 'string',
        'can_set_sticker_set' => 'bool',
        'custom_emoji_sticker_set_name' => 'string',
        'linked_chat_id' => 'int',
        'location' => 'ChatLocation',
        'rating' => 'UserRating',
        'first_profile_audio' => 'Audio',
        'unique_gift_colors' => 'UniqueGiftColors',
        'paid_message_star_count' => 'int',
        'guard_bot' => 'User',
        'community' => 'Community',
    ];
}
