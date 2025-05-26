<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class ChatFullInfo
* @description This object contains full information about a chat.
*
* @property	int $id Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
* @method	int getId() Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
* @method	bool isId()
* @method	$this setId()
* @method	$this unsetId()

* @property	string $type Type of the chat, can be either “private”, “group”, “supergroup” or “channel”
* @method	string getType() Type of the chat, can be either “private”, “group”, “supergroup” or “channel”
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	string $title Optional. Title, for supergroups, channels and group chats
* @method	string getTitle() Optional. Title, for supergroups, channels and group chats
* @method	bool isTitle()
* @method	$this setTitle()
* @method	$this unsetTitle()

* @property	string $username Optional. Username, for private chats, supergroups and channels if available
* @method	string getUsername() Optional. Username, for private chats, supergroups and channels if available
* @method	bool isUsername()
* @method	$this setUsername()
* @method	$this unsetUsername()

* @property	string $first_name Optional. First name of the other party in a private chat
* @method	string getFirstName() Optional. First name of the other party in a private chat
* @method	bool isFirstName()
* @method	$this setFirstName()
* @method	$this unsetFirstName()

* @property	string $last_name Optional. Last name of the other party in a private chat
* @method	string getLastName() Optional. Last name of the other party in a private chat
* @method	bool isLastName()
* @method	$this setLastName()
* @method	$this unsetLastName()

* @property	bool $is_forum Optional. True, if the supergroup chat is a forum (has topics enabled)
* @method	bool getIsForum() Optional. True, if the supergroup chat is a forum (has topics enabled)
* @method	bool isIsForum()
* @method	$this setIsForum()
* @method	$this unsetIsForum()

* @property	int $accent_color_id Identifier of the accent color for the chat name and backgrounds of the chat photo, reply header, and link preview. See accent colors for more details.
* @method	int getAccentColorId() Identifier of the accent color for the chat name and backgrounds of the chat photo, reply header, and link preview. See accent colors for more details.
* @method	bool isAccentColorId()
* @method	$this setAccentColorId()
* @method	$this unsetAccentColorId()

* @property	int $max_reaction_count The maximum number of reactions that can be set on a message in the chat
* @method	int getMaxReactionCount() The maximum number of reactions that can be set on a message in the chat
* @method	bool isMaxReactionCount()
* @method	$this setMaxReactionCount()
* @method	$this unsetMaxReactionCount()

* @property	ChatPhoto $photo Optional. Chat photo
* @method	ChatPhoto getPhoto() Optional. Chat photo
* @method	bool isPhoto()
* @method	$this setPhoto()
* @method	$this unsetPhoto()

* @property	string[] $active_usernames Optional. If non-empty, the list of all active chat usernames; for private chats, supergroups and channels
* @method	string[] getActiveUsernames() Optional. If non-empty, the list of all active chat usernames; for private chats, supergroups and channels
* @method	bool isActiveUsernames()
* @method	$this setActiveUsernames()
* @method	$this unsetActiveUsernames()

* @property	Birthdate $birthdate Optional. For private chats, the date of birth of the user
* @method	Birthdate getBirthdate() Optional. For private chats, the date of birth of the user
* @method	bool isBirthdate()
* @method	$this setBirthdate()
* @method	$this unsetBirthdate()

* @property	BusinessIntro $business_intro Optional. For private chats with business accounts, the intro of the business
* @method	BusinessIntro getBusinessIntro() Optional. For private chats with business accounts, the intro of the business
* @method	bool isBusinessIntro()
* @method	$this setBusinessIntro()
* @method	$this unsetBusinessIntro()

* @property	BusinessLocation $business_location Optional. For private chats with business accounts, the location of the business
* @method	BusinessLocation getBusinessLocation() Optional. For private chats with business accounts, the location of the business
* @method	bool isBusinessLocation()
* @method	$this setBusinessLocation()
* @method	$this unsetBusinessLocation()

* @property	BusinessOpeningHours $business_opening_hours Optional. For private chats with business accounts, the opening hours of the business
* @method	BusinessOpeningHours getBusinessOpeningHours() Optional. For private chats with business accounts, the opening hours of the business
* @method	bool isBusinessOpeningHours()
* @method	$this setBusinessOpeningHours()
* @method	$this unsetBusinessOpeningHours()

* @property	Chat $personal_chat Optional. For private chats, the personal channel of the user
* @method	Chat getPersonalChat() Optional. For private chats, the personal channel of the user
* @method	bool isPersonalChat()
* @method	$this setPersonalChat()
* @method	$this unsetPersonalChat()

* @property	ReactionType[] $available_reactions Optional. List of available reactions allowed in the chat. If omitted, then all emoji reactions are allowed.
* @method	ReactionType[] getAvailableReactions() Optional. List of available reactions allowed in the chat. If omitted, then all emoji reactions are allowed.
* @method	bool isAvailableReactions()
* @method	$this setAvailableReactions()
* @method	$this unsetAvailableReactions()

* @property	string $background_custom_emoji_id Optional. Custom emoji identifier of the emoji chosen by the chat for the reply header and link preview background
* @method	string getBackgroundCustomEmojiId() Optional. Custom emoji identifier of the emoji chosen by the chat for the reply header and link preview background
* @method	bool isBackgroundCustomEmojiId()
* @method	$this setBackgroundCustomEmojiId()
* @method	$this unsetBackgroundCustomEmojiId()

* @property	int $profile_accent_color_id Optional. Identifier of the accent color for the chat's profile background. See profile accent colors for more details.
* @method	int getProfileAccentColorId() Optional. Identifier of the accent color for the chat's profile background. See profile accent colors for more details.
* @method	bool isProfileAccentColorId()
* @method	$this setProfileAccentColorId()
* @method	$this unsetProfileAccentColorId()

* @property	string $profile_background_custom_emoji_id Optional. Custom emoji identifier of the emoji chosen by the chat for its profile background
* @method	string getProfileBackgroundCustomEmojiId() Optional. Custom emoji identifier of the emoji chosen by the chat for its profile background
* @method	bool isProfileBackgroundCustomEmojiId()
* @method	$this setProfileBackgroundCustomEmojiId()
* @method	$this unsetProfileBackgroundCustomEmojiId()

* @property	string $emoji_status_custom_emoji_id Optional. Custom emoji identifier of the emoji status of the chat or the other party in a private chat
* @method	string getEmojiStatusCustomEmojiId() Optional. Custom emoji identifier of the emoji status of the chat or the other party in a private chat
* @method	bool isEmojiStatusCustomEmojiId()
* @method	$this setEmojiStatusCustomEmojiId()
* @method	$this unsetEmojiStatusCustomEmojiId()

* @property	int $emoji_status_expiration_date Optional. Expiration date of the emoji status of the chat or the other party in a private chat, in Unix time, if any
* @method	int getEmojiStatusExpirationDate() Optional. Expiration date of the emoji status of the chat or the other party in a private chat, in Unix time, if any
* @method	bool isEmojiStatusExpirationDate()
* @method	$this setEmojiStatusExpirationDate()
* @method	$this unsetEmojiStatusExpirationDate()

* @property	string $bio Optional. Bio of the other party in a private chat
* @method	string getBio() Optional. Bio of the other party in a private chat
* @method	bool isBio()
* @method	$this setBio()
* @method	$this unsetBio()

* @property	bool $has_private_forwards Optional. True, if privacy settings of the other party in the private chat allows to use tg://user?id=<user_id> links only in chats with the user
* @method	bool getHasPrivateForwards() Optional. True, if privacy settings of the other party in the private chat allows to use tg://user?id=<user_id> links only in chats with the user
* @method	bool isHasPrivateForwards()
* @method	$this setHasPrivateForwards()
* @method	$this unsetHasPrivateForwards()

* @property	bool $has_restricted_voice_and_video_messages Optional. True, if the privacy settings of the other party restrict sending voice and video note messages in the private chat
* @method	bool getHasRestrictedVoiceAndVideoMessages() Optional. True, if the privacy settings of the other party restrict sending voice and video note messages in the private chat
* @method	bool isHasRestrictedVoiceAndVideoMessages()
* @method	$this setHasRestrictedVoiceAndVideoMessages()
* @method	$this unsetHasRestrictedVoiceAndVideoMessages()

* @property	bool $join_to_send_messages Optional. True, if users need to join the supergroup before they can send messages
* @method	bool getJoinToSendMessages() Optional. True, if users need to join the supergroup before they can send messages
* @method	bool isJoinToSendMessages()
* @method	$this setJoinToSendMessages()
* @method	$this unsetJoinToSendMessages()

* @property	bool $join_by_request Optional. True, if all users directly joining the supergroup without using an invite link need to be approved by supergroup administrators
* @method	bool getJoinByRequest() Optional. True, if all users directly joining the supergroup without using an invite link need to be approved by supergroup administrators
* @method	bool isJoinByRequest()
* @method	$this setJoinByRequest()
* @method	$this unsetJoinByRequest()

* @property	string $description Optional. Description, for groups, supergroups and channel chats
* @method	string getDescription() Optional. Description, for groups, supergroups and channel chats
* @method	bool isDescription()
* @method	$this setDescription()
* @method	$this unsetDescription()

* @property	string $invite_link Optional. Primary invite link, for groups, supergroups and channel chats
* @method	string getInviteLink() Optional. Primary invite link, for groups, supergroups and channel chats
* @method	bool isInviteLink()
* @method	$this setInviteLink()
* @method	$this unsetInviteLink()

* @property	Message $pinned_message Optional. The most recent pinned message (by sending date)
* @method	Message getPinnedMessage() Optional. The most recent pinned message (by sending date)
* @method	bool isPinnedMessage()
* @method	$this setPinnedMessage()
* @method	$this unsetPinnedMessage()

* @property	ChatPermissions $permissions Optional. Default chat member permissions, for groups and supergroups
* @method	ChatPermissions getPermissions() Optional. Default chat member permissions, for groups and supergroups
* @method	bool isPermissions()
* @method	$this setPermissions()
* @method	$this unsetPermissions()

* @property	AcceptedGiftTypes $accepted_gift_types Information about types of gifts that are accepted by the chat or by the corresponding user for private chats
* @method	AcceptedGiftTypes getAcceptedGiftTypes() Information about types of gifts that are accepted by the chat or by the corresponding user for private chats
* @method	bool isAcceptedGiftTypes()
* @method	$this setAcceptedGiftTypes()
* @method	$this unsetAcceptedGiftTypes()

* @property	bool $can_send_paid_media Optional. True, if paid media messages can be sent or forwarded to the channel chat. The field is available only for channel chats.
* @method	bool getCanSendPaidMedia() Optional. True, if paid media messages can be sent or forwarded to the channel chat. The field is available only for channel chats.
* @method	bool isCanSendPaidMedia()
* @method	$this setCanSendPaidMedia()
* @method	$this unsetCanSendPaidMedia()

* @property	int $slow_mode_delay Optional. For supergroups, the minimum allowed delay between consecutive messages sent by each unprivileged user; in seconds
* @method	int getSlowModeDelay() Optional. For supergroups, the minimum allowed delay between consecutive messages sent by each unprivileged user; in seconds
* @method	bool isSlowModeDelay()
* @method	$this setSlowModeDelay()
* @method	$this unsetSlowModeDelay()

* @property	int $unrestrict_boost_count Optional. For supergroups, the minimum number of boosts that a non-administrator user needs to add in order to ignore slow mode and chat permissions
* @method	int getUnrestrictBoostCount() Optional. For supergroups, the minimum number of boosts that a non-administrator user needs to add in order to ignore slow mode and chat permissions
* @method	bool isUnrestrictBoostCount()
* @method	$this setUnrestrictBoostCount()
* @method	$this unsetUnrestrictBoostCount()

* @property	int $message_auto_delete_time Optional. The time after which all messages sent to the chat will be automatically deleted; in seconds
* @method	int getMessageAutoDeleteTime() Optional. The time after which all messages sent to the chat will be automatically deleted; in seconds
* @method	bool isMessageAutoDeleteTime()
* @method	$this setMessageAutoDeleteTime()
* @method	$this unsetMessageAutoDeleteTime()

* @property	bool $has_aggressive_anti_spam_enabled Optional. True, if aggressive anti-spam checks are enabled in the supergroup. The field is only available to chat administrators.
* @method	bool getHasAggressiveAntiSpamEnabled() Optional. True, if aggressive anti-spam checks are enabled in the supergroup. The field is only available to chat administrators.
* @method	bool isHasAggressiveAntiSpamEnabled()
* @method	$this setHasAggressiveAntiSpamEnabled()
* @method	$this unsetHasAggressiveAntiSpamEnabled()

* @property	bool $has_hidden_members Optional. True, if non-administrators can only get the list of bots and administrators in the chat
* @method	bool getHasHiddenMembers() Optional. True, if non-administrators can only get the list of bots and administrators in the chat
* @method	bool isHasHiddenMembers()
* @method	$this setHasHiddenMembers()
* @method	$this unsetHasHiddenMembers()

* @property	bool $has_protected_content Optional. True, if messages from the chat can't be forwarded to other chats
* @method	bool getHasProtectedContent() Optional. True, if messages from the chat can't be forwarded to other chats
* @method	bool isHasProtectedContent()
* @method	$this setHasProtectedContent()
* @method	$this unsetHasProtectedContent()

* @property	bool $has_visible_history Optional. True, if new chat members will have access to old messages; available only to chat administrators
* @method	bool getHasVisibleHistory() Optional. True, if new chat members will have access to old messages; available only to chat administrators
* @method	bool isHasVisibleHistory()
* @method	$this setHasVisibleHistory()
* @method	$this unsetHasVisibleHistory()

* @property	string $sticker_set_name Optional. For supergroups, name of the group sticker set
* @method	string getStickerSetName() Optional. For supergroups, name of the group sticker set
* @method	bool isStickerSetName()
* @method	$this setStickerSetName()
* @method	$this unsetStickerSetName()

* @property	bool $can_set_sticker_set Optional. True, if the bot can change the group sticker set
* @method	bool getCanSetStickerSet() Optional. True, if the bot can change the group sticker set
* @method	bool isCanSetStickerSet()
* @method	$this setCanSetStickerSet()
* @method	$this unsetCanSetStickerSet()

* @property	string $custom_emoji_sticker_set_name Optional. For supergroups, the name of the group's custom emoji sticker set. Custom emoji from this set can be used by all users and bots in the group.
* @method	string getCustomEmojiStickerSetName() Optional. For supergroups, the name of the group's custom emoji sticker set. Custom emoji from this set can be used by all users and bots in the group.
* @method	bool isCustomEmojiStickerSetName()
* @method	$this setCustomEmojiStickerSetName()
* @method	$this unsetCustomEmojiStickerSetName()

* @property	int $linked_chat_id Optional. Unique identifier for the linked chat, i.e. the discussion group identifier for a channel and vice versa; for supergroups and channel chats. This identifier may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
* @method	int getLinkedChatId() Optional. Unique identifier for the linked chat, i.e. the discussion group identifier for a channel and vice versa; for supergroups and channel chats. This identifier may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
* @method	bool isLinkedChatId()
* @method	$this setLinkedChatId()
* @method	$this unsetLinkedChatId()

* @property	ChatLocation $location Optional. For supergroups, the location to which the supergroup is connected
* @method	ChatLocation getLocation() Optional. For supergroups, the location to which the supergroup is connected
* @method	bool isLocation()
* @method	$this setLocation()
* @method	$this unsetLocation()

*/

class ChatFullInfo extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'id'=> 'int',
		'type'=> 'string',
		'title'=> 'string',
		'username'=> 'string',
		'first_name'=> 'string',
		'last_name'=> 'string',
		'is_forum'=> 'bool',
		'accent_color_id'=> 'int',
		'max_reaction_count'=> 'int',
		'photo'=> 'ChatPhoto',
		'active_usernames'=> 'string[]',
		'birthdate'=> 'Birthdate',
		'business_intro'=> 'BusinessIntro',
		'business_location'=> 'BusinessLocation',
		'business_opening_hours'=> 'BusinessOpeningHours',
		'personal_chat'=> 'Chat',
		'available_reactions'=> 'ReactionType[]',
		'background_custom_emoji_id'=> 'string',
		'profile_accent_color_id'=> 'int',
		'profile_background_custom_emoji_id'=> 'string',
		'emoji_status_custom_emoji_id'=> 'string',
		'emoji_status_expiration_date'=> 'int',
		'bio'=> 'string',
		'has_private_forwards'=> 'bool',
		'has_restricted_voice_and_video_messages'=> 'bool',
		'join_to_send_messages'=> 'bool',
		'join_by_request'=> 'bool',
		'description'=> 'string',
		'invite_link'=> 'string',
		'pinned_message'=> 'Message',
		'permissions'=> 'ChatPermissions',
		'accepted_gift_types'=> 'AcceptedGiftTypes',
		'can_send_paid_media'=> 'bool',
		'slow_mode_delay'=> 'int',
		'unrestrict_boost_count'=> 'int',
		'message_auto_delete_time'=> 'int',
		'has_aggressive_anti_spam_enabled'=> 'bool',
		'has_hidden_members'=> 'bool',
		'has_protected_content'=> 'bool',
		'has_visible_history'=> 'bool',
		'sticker_set_name'=> 'string',
		'can_set_sticker_set'=> 'bool',
		'custom_emoji_sticker_set_name'=> 'string',
		'linked_chat_id'=> 'int',
		'location'=> 'ChatLocation',
	];

}