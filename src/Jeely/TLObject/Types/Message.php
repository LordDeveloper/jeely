<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class Message
* @description This object represents a message.
*
* @property	int $message_id Unique message identifier inside this chat. In specific instances (e.g., message containing a video sent to a big chat), the server might automatically schedule a message instead of sending it immediately. In such cases, this field will be 0 and the relevant message will be unusable until it is actually sent
* @method	int getMessageId() Unique message identifier inside this chat. In specific instances (e.g., message containing a video sent to a big chat), the server might automatically schedule a message instead of sending it immediately. In such cases, this field will be 0 and the relevant message will be unusable until it is actually sent
* @method	bool isMessageId()
* @method	$this setMessageId()
* @method	$this unsetMessageId()

* @property	int $message_thread_id Optional. Unique identifier of a message thread to which the message belongs; for supergroups only
* @method	int getMessageThreadId() Optional. Unique identifier of a message thread to which the message belongs; for supergroups only
* @method	bool isMessageThreadId()
* @method	$this setMessageThreadId()
* @method	$this unsetMessageThreadId()

* @property	User $from Optional. Sender of the message; may be empty for messages sent to channels. For backward compatibility, if the message was sent on behalf of a chat, the field contains a fake sender user in non-channel chats
* @method	User getFrom() Optional. Sender of the message; may be empty for messages sent to channels. For backward compatibility, if the message was sent on behalf of a chat, the field contains a fake sender user in non-channel chats
* @method	bool isFrom()
* @method	$this setFrom()
* @method	$this unsetFrom()

* @property	Chat $sender_chat Optional. Sender of the message when sent on behalf of a chat. For example, the supergroup itself for messages sent by its anonymous administrators or a linked channel for messages automatically forwarded to the channel's discussion group. For backward compatibility, if the message was sent on behalf of a chat, the field from contains a fake sender user in non-channel chats.
* @method	Chat getSenderChat() Optional. Sender of the message when sent on behalf of a chat. For example, the supergroup itself for messages sent by its anonymous administrators or a linked channel for messages automatically forwarded to the channel's discussion group. For backward compatibility, if the message was sent on behalf of a chat, the field from contains a fake sender user in non-channel chats.
* @method	bool isSenderChat()
* @method	$this setSenderChat()
* @method	$this unsetSenderChat()

* @property	int $sender_boost_count Optional. If the sender of the message boosted the chat, the number of boosts added by the user
* @method	int getSenderBoostCount() Optional. If the sender of the message boosted the chat, the number of boosts added by the user
* @method	bool isSenderBoostCount()
* @method	$this setSenderBoostCount()
* @method	$this unsetSenderBoostCount()

* @property	User $sender_business_bot Optional. The bot that actually sent the message on behalf of the business account. Available only for outgoing messages sent on behalf of the connected business account.
* @method	User getSenderBusinessBot() Optional. The bot that actually sent the message on behalf of the business account. Available only for outgoing messages sent on behalf of the connected business account.
* @method	bool isSenderBusinessBot()
* @method	$this setSenderBusinessBot()
* @method	$this unsetSenderBusinessBot()

* @property	int $date Date the message was sent in Unix time. It is always a positive number, representing a valid date.
* @method	int getDate() Date the message was sent in Unix time. It is always a positive number, representing a valid date.
* @method	bool isDate()
* @method	$this setDate()
* @method	$this unsetDate()

* @property	string $business_connection_id Optional. Unique identifier of the business connection from which the message was received. If non-empty, the message belongs to a chat of the corresponding business account that is independent from any potential bot chat which might share the same identifier.
* @method	string getBusinessConnectionId() Optional. Unique identifier of the business connection from which the message was received. If non-empty, the message belongs to a chat of the corresponding business account that is independent from any potential bot chat which might share the same identifier.
* @method	bool isBusinessConnectionId()
* @method	$this setBusinessConnectionId()
* @method	$this unsetBusinessConnectionId()

* @property	Chat $chat Chat the message belongs to
* @method	Chat getChat() Chat the message belongs to
* @method	bool isChat()
* @method	$this setChat()
* @method	$this unsetChat()

* @property	MessageOrigin $forward_origin Optional. Information about the original message for forwarded messages
* @method	MessageOrigin getForwardOrigin() Optional. Information about the original message for forwarded messages
* @method	bool isForwardOrigin()
* @method	$this setForwardOrigin()
* @method	$this unsetForwardOrigin()

* @property	bool $is_topic_message Optional. True, if the message is sent to a forum topic
* @method	bool getIsTopicMessage() Optional. True, if the message is sent to a forum topic
* @method	bool isIsTopicMessage()
* @method	$this setIsTopicMessage()
* @method	$this unsetIsTopicMessage()

* @property	bool $is_automatic_forward Optional. True, if the message is a channel post that was automatically forwarded to the connected discussion group
* @method	bool getIsAutomaticForward() Optional. True, if the message is a channel post that was automatically forwarded to the connected discussion group
* @method	bool isIsAutomaticForward()
* @method	$this setIsAutomaticForward()
* @method	$this unsetIsAutomaticForward()

* @property	Message $reply_to_message Optional. For replies in the same chat and message thread, the original message. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.
* @method	Message getReplyToMessage() Optional. For replies in the same chat and message thread, the original message. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.
* @method	bool isReplyToMessage()
* @method	$this setReplyToMessage()
* @method	$this unsetReplyToMessage()

* @property	ExternalReplyInfo $external_reply Optional. Information about the message that is being replied to, which may come from another chat or forum topic
* @method	ExternalReplyInfo getExternalReply() Optional. Information about the message that is being replied to, which may come from another chat or forum topic
* @method	bool isExternalReply()
* @method	$this setExternalReply()
* @method	$this unsetExternalReply()

* @property	TextQuote $quote Optional. For replies that quote part of the original message, the quoted part of the message
* @method	TextQuote getQuote() Optional. For replies that quote part of the original message, the quoted part of the message
* @method	bool isQuote()
* @method	$this setQuote()
* @method	$this unsetQuote()

* @property	Story $reply_to_story Optional. For replies to a story, the original story
* @method	Story getReplyToStory() Optional. For replies to a story, the original story
* @method	bool isReplyToStory()
* @method	$this setReplyToStory()
* @method	$this unsetReplyToStory()

* @property	User $via_bot Optional. Bot through which the message was sent
* @method	User getViaBot() Optional. Bot through which the message was sent
* @method	bool isViaBot()
* @method	$this setViaBot()
* @method	$this unsetViaBot()

* @property	int $edit_date Optional. Date the message was last edited in Unix time
* @method	int getEditDate() Optional. Date the message was last edited in Unix time
* @method	bool isEditDate()
* @method	$this setEditDate()
* @method	$this unsetEditDate()

* @property	bool $has_protected_content Optional. True, if the message can't be forwarded
* @method	bool getHasProtectedContent() Optional. True, if the message can't be forwarded
* @method	bool isHasProtectedContent()
* @method	$this setHasProtectedContent()
* @method	$this unsetHasProtectedContent()

* @property	bool $is_from_offline Optional. True, if the message was sent by an implicit action, for example, as an away or a greeting business message, or as a scheduled message
* @method	bool getIsFromOffline() Optional. True, if the message was sent by an implicit action, for example, as an away or a greeting business message, or as a scheduled message
* @method	bool isIsFromOffline()
* @method	$this setIsFromOffline()
* @method	$this unsetIsFromOffline()

* @property	string $media_group_id Optional. The unique identifier of a media message group this message belongs to
* @method	string getMediaGroupId() Optional. The unique identifier of a media message group this message belongs to
* @method	bool isMediaGroupId()
* @method	$this setMediaGroupId()
* @method	$this unsetMediaGroupId()

* @property	string $author_signature Optional. Signature of the post author for messages in channels, or the custom title of an anonymous group administrator
* @method	string getAuthorSignature() Optional. Signature of the post author for messages in channels, or the custom title of an anonymous group administrator
* @method	bool isAuthorSignature()
* @method	$this setAuthorSignature()
* @method	$this unsetAuthorSignature()

* @property	int $paid_star_count Optional. The number of Telegram Stars that were paid by the sender of the message to send it
* @method	int getPaidStarCount() Optional. The number of Telegram Stars that were paid by the sender of the message to send it
* @method	bool isPaidStarCount()
* @method	$this setPaidStarCount()
* @method	$this unsetPaidStarCount()

* @property	string $text Optional. For text messages, the actual UTF-8 text of the message
* @method	string getText() Optional. For text messages, the actual UTF-8 text of the message
* @method	bool isText()
* @method	$this setText()
* @method	$this unsetText()

* @property	MessageEntity[] $entities Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
* @method	MessageEntity[] getEntities() Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
* @method	bool isEntities()
* @method	$this setEntities()
* @method	$this unsetEntities()

* @property	LinkPreviewOptions $link_preview_options Optional. Options used for link preview generation for the message, if it is a text message and link preview options were changed
* @method	LinkPreviewOptions getLinkPreviewOptions() Optional. Options used for link preview generation for the message, if it is a text message and link preview options were changed
* @method	bool isLinkPreviewOptions()
* @method	$this setLinkPreviewOptions()
* @method	$this unsetLinkPreviewOptions()

* @property	string $effect_id Optional. Unique identifier of the message effect added to the message
* @method	string getEffectId() Optional. Unique identifier of the message effect added to the message
* @method	bool isEffectId()
* @method	$this setEffectId()
* @method	$this unsetEffectId()

* @property	Animation $animation Optional. Message is an animation, information about the animation. For backward compatibility, when this field is set, the document field will also be set
* @method	Animation getAnimation() Optional. Message is an animation, information about the animation. For backward compatibility, when this field is set, the document field will also be set
* @method	bool isAnimation()
* @method	$this setAnimation()
* @method	$this unsetAnimation()

* @property	Audio $audio Optional. Message is an audio file, information about the file
* @method	Audio getAudio() Optional. Message is an audio file, information about the file
* @method	bool isAudio()
* @method	$this setAudio()
* @method	$this unsetAudio()

* @property	Document $document Optional. Message is a general file, information about the file
* @method	Document getDocument() Optional. Message is a general file, information about the file
* @method	bool isDocument()
* @method	$this setDocument()
* @method	$this unsetDocument()

* @property	PaidMediaInfo $paid_media Optional. Message contains paid media; information about the paid media
* @method	PaidMediaInfo getPaidMedia() Optional. Message contains paid media; information about the paid media
* @method	bool isPaidMedia()
* @method	$this setPaidMedia()
* @method	$this unsetPaidMedia()

* @property	PhotoSize[] $photo Optional. Message is a photo, available sizes of the photo
* @method	PhotoSize[] getPhoto() Optional. Message is a photo, available sizes of the photo
* @method	bool isPhoto()
* @method	$this setPhoto()
* @method	$this unsetPhoto()

* @property	Sticker $sticker Optional. Message is a sticker, information about the sticker
* @method	Sticker getSticker() Optional. Message is a sticker, information about the sticker
* @method	bool isSticker()
* @method	$this setSticker()
* @method	$this unsetSticker()

* @property	Story $story Optional. Message is a forwarded story
* @method	Story getStory() Optional. Message is a forwarded story
* @method	bool isStory()
* @method	$this setStory()
* @method	$this unsetStory()

* @property	Video $video Optional. Message is a video, information about the video
* @method	Video getVideo() Optional. Message is a video, information about the video
* @method	bool isVideo()
* @method	$this setVideo()
* @method	$this unsetVideo()

* @property	VideoNote $video_note Optional. Message is a video note, information about the video message
* @method	VideoNote getVideoNote() Optional. Message is a video note, information about the video message
* @method	bool isVideoNote()
* @method	$this setVideoNote()
* @method	$this unsetVideoNote()

* @property	Voice $voice Optional. Message is a voice message, information about the file
* @method	Voice getVoice() Optional. Message is a voice message, information about the file
* @method	bool isVoice()
* @method	$this setVoice()
* @method	$this unsetVoice()

* @property	string $caption Optional. Caption for the animation, audio, document, paid media, photo, video or voice
* @method	string getCaption() Optional. Caption for the animation, audio, document, paid media, photo, video or voice
* @method	bool isCaption()
* @method	$this setCaption()
* @method	$this unsetCaption()

* @property	MessageEntity[] $caption_entities Optional. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption
* @method	MessageEntity[] getCaptionEntities() Optional. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption
* @method	bool isCaptionEntities()
* @method	$this setCaptionEntities()
* @method	$this unsetCaptionEntities()

* @property	bool $show_caption_above_media Optional. True, if the caption must be shown above the message media
* @method	bool getShowCaptionAboveMedia() Optional. True, if the caption must be shown above the message media
* @method	bool isShowCaptionAboveMedia()
* @method	$this setShowCaptionAboveMedia()
* @method	$this unsetShowCaptionAboveMedia()

* @property	bool $has_media_spoiler Optional. True, if the message media is covered by a spoiler animation
* @method	bool getHasMediaSpoiler() Optional. True, if the message media is covered by a spoiler animation
* @method	bool isHasMediaSpoiler()
* @method	$this setHasMediaSpoiler()
* @method	$this unsetHasMediaSpoiler()

* @property	Contact $contact Optional. Message is a shared contact, information about the contact
* @method	Contact getContact() Optional. Message is a shared contact, information about the contact
* @method	bool isContact()
* @method	$this setContact()
* @method	$this unsetContact()

* @property	Dice $dice Optional. Message is a dice with random value
* @method	Dice getDice() Optional. Message is a dice with random value
* @method	bool isDice()
* @method	$this setDice()
* @method	$this unsetDice()

* @property	Game $game Optional. Message is a game, information about the game. More about games »
* @method	Game getGame() Optional. Message is a game, information about the game. More about games »
* @method	bool isGame()
* @method	$this setGame()
* @method	$this unsetGame()

* @property	Poll $poll Optional. Message is a native poll, information about the poll
* @method	Poll getPoll() Optional. Message is a native poll, information about the poll
* @method	bool isPoll()
* @method	$this setPoll()
* @method	$this unsetPoll()

* @property	Venue $venue Optional. Message is a venue, information about the venue. For backward compatibility, when this field is set, the location field will also be set
* @method	Venue getVenue() Optional. Message is a venue, information about the venue. For backward compatibility, when this field is set, the location field will also be set
* @method	bool isVenue()
* @method	$this setVenue()
* @method	$this unsetVenue()

* @property	Location $location Optional. Message is a shared location, information about the location
* @method	Location getLocation() Optional. Message is a shared location, information about the location
* @method	bool isLocation()
* @method	$this setLocation()
* @method	$this unsetLocation()

* @property	User[] $new_chat_members Optional. New members that were added to the group or supergroup and information about them (the bot itself may be one of these members)
* @method	User[] getNewChatMembers() Optional. New members that were added to the group or supergroup and information about them (the bot itself may be one of these members)
* @method	bool isNewChatMembers()
* @method	$this setNewChatMembers()
* @method	$this unsetNewChatMembers()

* @property	User $left_chat_member Optional. A member was removed from the group, information about them (this member may be the bot itself)
* @method	User getLeftChatMember() Optional. A member was removed from the group, information about them (this member may be the bot itself)
* @method	bool isLeftChatMember()
* @method	$this setLeftChatMember()
* @method	$this unsetLeftChatMember()

* @property	string $new_chat_title Optional. A chat title was changed to this value
* @method	string getNewChatTitle() Optional. A chat title was changed to this value
* @method	bool isNewChatTitle()
* @method	$this setNewChatTitle()
* @method	$this unsetNewChatTitle()

* @property	PhotoSize[] $new_chat_photo Optional. A chat photo was change to this value
* @method	PhotoSize[] getNewChatPhoto() Optional. A chat photo was change to this value
* @method	bool isNewChatPhoto()
* @method	$this setNewChatPhoto()
* @method	$this unsetNewChatPhoto()

* @property	bool $delete_chat_photo Optional. Service message: the chat photo was deleted
* @method	bool getDeleteChatPhoto() Optional. Service message: the chat photo was deleted
* @method	bool isDeleteChatPhoto()
* @method	$this setDeleteChatPhoto()
* @method	$this unsetDeleteChatPhoto()

* @property	bool $group_chat_created Optional. Service message: the group has been created
* @method	bool getGroupChatCreated() Optional. Service message: the group has been created
* @method	bool isGroupChatCreated()
* @method	$this setGroupChatCreated()
* @method	$this unsetGroupChatCreated()

* @property	bool $supergroup_chat_created Optional. Service message: the supergroup has been created. This field can't be received in a message coming through updates, because bot can't be a member of a supergroup when it is created. It can only be found in reply_to_message if someone replies to a very first message in a directly created supergroup.
* @method	bool getSupergroupChatCreated() Optional. Service message: the supergroup has been created. This field can't be received in a message coming through updates, because bot can't be a member of a supergroup when it is created. It can only be found in reply_to_message if someone replies to a very first message in a directly created supergroup.
* @method	bool isSupergroupChatCreated()
* @method	$this setSupergroupChatCreated()
* @method	$this unsetSupergroupChatCreated()

* @property	bool $channel_chat_created Optional. Service message: the channel has been created. This field can't be received in a message coming through updates, because bot can't be a member of a channel when it is created. It can only be found in reply_to_message if someone replies to a very first message in a channel.
* @method	bool getChannelChatCreated() Optional. Service message: the channel has been created. This field can't be received in a message coming through updates, because bot can't be a member of a channel when it is created. It can only be found in reply_to_message if someone replies to a very first message in a channel.
* @method	bool isChannelChatCreated()
* @method	$this setChannelChatCreated()
* @method	$this unsetChannelChatCreated()

* @property	MessageAutoDeleteTimerChanged $message_auto_delete_timer_changed Optional. Service message: auto-delete timer settings changed in the chat
* @method	MessageAutoDeleteTimerChanged getMessageAutoDeleteTimerChanged() Optional. Service message: auto-delete timer settings changed in the chat
* @method	bool isMessageAutoDeleteTimerChanged()
* @method	$this setMessageAutoDeleteTimerChanged()
* @method	$this unsetMessageAutoDeleteTimerChanged()

* @property	int $migrate_to_chat_id Optional. The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
* @method	int getMigrateToChatId() Optional. The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
* @method	bool isMigrateToChatId()
* @method	$this setMigrateToChatId()
* @method	$this unsetMigrateToChatId()

* @property	int $migrate_from_chat_id Optional. The supergroup has been migrated from a group with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
* @method	int getMigrateFromChatId() Optional. The supergroup has been migrated from a group with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
* @method	bool isMigrateFromChatId()
* @method	$this setMigrateFromChatId()
* @method	$this unsetMigrateFromChatId()

* @property	MaybeInaccessibleMessage $pinned_message Optional. Specified message was pinned. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.
* @method	MaybeInaccessibleMessage getPinnedMessage() Optional. Specified message was pinned. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.
* @method	bool isPinnedMessage()
* @method	$this setPinnedMessage()
* @method	$this unsetPinnedMessage()

* @property	Invoice $invoice Optional. Message is an invoice for a payment, information about the invoice. More about payments »
* @method	Invoice getInvoice() Optional. Message is an invoice for a payment, information about the invoice. More about payments »
* @method	bool isInvoice()
* @method	$this setInvoice()
* @method	$this unsetInvoice()

* @property	SuccessfulPayment $successful_payment Optional. Message is a service message about a successful payment, information about the payment. More about payments »
* @method	SuccessfulPayment getSuccessfulPayment() Optional. Message is a service message about a successful payment, information about the payment. More about payments »
* @method	bool isSuccessfulPayment()
* @method	$this setSuccessfulPayment()
* @method	$this unsetSuccessfulPayment()

* @property	RefundedPayment $refunded_payment Optional. Message is a service message about a refunded payment, information about the payment. More about payments »
* @method	RefundedPayment getRefundedPayment() Optional. Message is a service message about a refunded payment, information about the payment. More about payments »
* @method	bool isRefundedPayment()
* @method	$this setRefundedPayment()
* @method	$this unsetRefundedPayment()

* @property	UsersShared $users_shared Optional. Service message: users were shared with the bot
* @method	UsersShared getUsersShared() Optional. Service message: users were shared with the bot
* @method	bool isUsersShared()
* @method	$this setUsersShared()
* @method	$this unsetUsersShared()

* @property	ChatShared $chat_shared Optional. Service message: a chat was shared with the bot
* @method	ChatShared getChatShared() Optional. Service message: a chat was shared with the bot
* @method	bool isChatShared()
* @method	$this setChatShared()
* @method	$this unsetChatShared()

* @property	GiftInfo $gift Optional. Service message: a regular gift was sent or received
* @method	GiftInfo getGift() Optional. Service message: a regular gift was sent or received
* @method	bool isGift()
* @method	$this setGift()
* @method	$this unsetGift()

* @property	UniqueGiftInfo $unique_gift Optional. Service message: a unique gift was sent or received
* @method	UniqueGiftInfo getUniqueGift() Optional. Service message: a unique gift was sent or received
* @method	bool isUniqueGift()
* @method	$this setUniqueGift()
* @method	$this unsetUniqueGift()

* @property	string $connected_website Optional. The domain name of the website on which the user has logged in. More about Telegram Login »
* @method	string getConnectedWebsite() Optional. The domain name of the website on which the user has logged in. More about Telegram Login »
* @method	bool isConnectedWebsite()
* @method	$this setConnectedWebsite()
* @method	$this unsetConnectedWebsite()

* @property	WriteAccessAllowed $write_access_allowed Optional. Service message: the user allowed the bot to write messages after adding it to the attachment or side menu, launching a Web App from a link, or accepting an explicit request from a Web App sent by the method requestWriteAccess
* @method	WriteAccessAllowed getWriteAccessAllowed() Optional. Service message: the user allowed the bot to write messages after adding it to the attachment or side menu, launching a Web App from a link, or accepting an explicit request from a Web App sent by the method requestWriteAccess
* @method	bool isWriteAccessAllowed()
* @method	$this setWriteAccessAllowed()
* @method	$this unsetWriteAccessAllowed()

* @property	PassportData $passport_data Optional. Telegram Passport data
* @method	PassportData getPassportData() Optional. Telegram Passport data
* @method	bool isPassportData()
* @method	$this setPassportData()
* @method	$this unsetPassportData()

* @property	ProximityAlertTriggered $proximity_alert_triggered Optional. Service message. A user in the chat triggered another user's proximity alert while sharing Live Location.
* @method	ProximityAlertTriggered getProximityAlertTriggered() Optional. Service message. A user in the chat triggered another user's proximity alert while sharing Live Location.
* @method	bool isProximityAlertTriggered()
* @method	$this setProximityAlertTriggered()
* @method	$this unsetProximityAlertTriggered()

* @property	ChatBoostAdded $boost_added Optional. Service message: user boosted the chat
* @method	ChatBoostAdded getBoostAdded() Optional. Service message: user boosted the chat
* @method	bool isBoostAdded()
* @method	$this setBoostAdded()
* @method	$this unsetBoostAdded()

* @property	ChatBackground $chat_background_set Optional. Service message: chat background set
* @method	ChatBackground getChatBackgroundSet() Optional. Service message: chat background set
* @method	bool isChatBackgroundSet()
* @method	$this setChatBackgroundSet()
* @method	$this unsetChatBackgroundSet()

* @property	ForumTopicCreated $forum_topic_created Optional. Service message: forum topic created
* @method	ForumTopicCreated getForumTopicCreated() Optional. Service message: forum topic created
* @method	bool isForumTopicCreated()
* @method	$this setForumTopicCreated()
* @method	$this unsetForumTopicCreated()

* @property	ForumTopicEdited $forum_topic_edited Optional. Service message: forum topic edited
* @method	ForumTopicEdited getForumTopicEdited() Optional. Service message: forum topic edited
* @method	bool isForumTopicEdited()
* @method	$this setForumTopicEdited()
* @method	$this unsetForumTopicEdited()

* @property	ForumTopicClosed $forum_topic_closed Optional. Service message: forum topic closed
* @method	ForumTopicClosed getForumTopicClosed() Optional. Service message: forum topic closed
* @method	bool isForumTopicClosed()
* @method	$this setForumTopicClosed()
* @method	$this unsetForumTopicClosed()

* @property	ForumTopicReopened $forum_topic_reopened Optional. Service message: forum topic reopened
* @method	ForumTopicReopened getForumTopicReopened() Optional. Service message: forum topic reopened
* @method	bool isForumTopicReopened()
* @method	$this setForumTopicReopened()
* @method	$this unsetForumTopicReopened()

* @property	GeneralForumTopicHidden $general_forum_topic_hidden Optional. Service message: the 'General' forum topic hidden
* @method	GeneralForumTopicHidden getGeneralForumTopicHidden() Optional. Service message: the 'General' forum topic hidden
* @method	bool isGeneralForumTopicHidden()
* @method	$this setGeneralForumTopicHidden()
* @method	$this unsetGeneralForumTopicHidden()

* @property	GeneralForumTopicUnhidden $general_forum_topic_unhidden Optional. Service message: the 'General' forum topic unhidden
* @method	GeneralForumTopicUnhidden getGeneralForumTopicUnhidden() Optional. Service message: the 'General' forum topic unhidden
* @method	bool isGeneralForumTopicUnhidden()
* @method	$this setGeneralForumTopicUnhidden()
* @method	$this unsetGeneralForumTopicUnhidden()

* @property	GiveawayCreated $giveaway_created Optional. Service message: a scheduled giveaway was created
* @method	GiveawayCreated getGiveawayCreated() Optional. Service message: a scheduled giveaway was created
* @method	bool isGiveawayCreated()
* @method	$this setGiveawayCreated()
* @method	$this unsetGiveawayCreated()

* @property	Giveaway $giveaway Optional. The message is a scheduled giveaway message
* @method	Giveaway getGiveaway() Optional. The message is a scheduled giveaway message
* @method	bool isGiveaway()
* @method	$this setGiveaway()
* @method	$this unsetGiveaway()

* @property	GiveawayWinners $giveaway_winners Optional. A giveaway with public winners was completed
* @method	GiveawayWinners getGiveawayWinners() Optional. A giveaway with public winners was completed
* @method	bool isGiveawayWinners()
* @method	$this setGiveawayWinners()
* @method	$this unsetGiveawayWinners()

* @property	GiveawayCompleted $giveaway_completed Optional. Service message: a giveaway without public winners was completed
* @method	GiveawayCompleted getGiveawayCompleted() Optional. Service message: a giveaway without public winners was completed
* @method	bool isGiveawayCompleted()
* @method	$this setGiveawayCompleted()
* @method	$this unsetGiveawayCompleted()

* @property	PaidMessagePriceChanged $paid_message_price_changed Optional. Service message: the price for paid messages has changed in the chat
* @method	PaidMessagePriceChanged getPaidMessagePriceChanged() Optional. Service message: the price for paid messages has changed in the chat
* @method	bool isPaidMessagePriceChanged()
* @method	$this setPaidMessagePriceChanged()
* @method	$this unsetPaidMessagePriceChanged()

* @property	VideoChatScheduled $video_chat_scheduled Optional. Service message: video chat scheduled
* @method	VideoChatScheduled getVideoChatScheduled() Optional. Service message: video chat scheduled
* @method	bool isVideoChatScheduled()
* @method	$this setVideoChatScheduled()
* @method	$this unsetVideoChatScheduled()

* @property	VideoChatStarted $video_chat_started Optional. Service message: video chat started
* @method	VideoChatStarted getVideoChatStarted() Optional. Service message: video chat started
* @method	bool isVideoChatStarted()
* @method	$this setVideoChatStarted()
* @method	$this unsetVideoChatStarted()

* @property	VideoChatEnded $video_chat_ended Optional. Service message: video chat ended
* @method	VideoChatEnded getVideoChatEnded() Optional. Service message: video chat ended
* @method	bool isVideoChatEnded()
* @method	$this setVideoChatEnded()
* @method	$this unsetVideoChatEnded()

* @property	VideoChatParticipantsInvited $video_chat_participants_invited Optional. Service message: new participants invited to a video chat
* @method	VideoChatParticipantsInvited getVideoChatParticipantsInvited() Optional. Service message: new participants invited to a video chat
* @method	bool isVideoChatParticipantsInvited()
* @method	$this setVideoChatParticipantsInvited()
* @method	$this unsetVideoChatParticipantsInvited()

* @property	WebAppData $web_app_data Optional. Service message: data sent by a Web App
* @method	WebAppData getWebAppData() Optional. Service message: data sent by a Web App
* @method	bool isWebAppData()
* @method	$this setWebAppData()
* @method	$this unsetWebAppData()

* @property	InlineKeyboardMarkup $reply_markup Optional. Inline keyboard attached to the message. login_url buttons are represented as ordinary url buttons.
* @method	InlineKeyboardMarkup getReplyMarkup() Optional. Inline keyboard attached to the message. login_url buttons are represented as ordinary url buttons.
* @method	bool isReplyMarkup()
* @method	$this setReplyMarkup()
* @method	$this unsetReplyMarkup()

*/

class Message extends TLObject
{
	use \Jeely\Concerns\InteractsWithMessage;

	const JSON_PROPERTY_MAP = [
		'message_id'=> 'int',
		'message_thread_id'=> 'int',
		'from'=> 'User',
		'sender_chat'=> 'Chat',
		'sender_boost_count'=> 'int',
		'sender_business_bot'=> 'User',
		'date'=> 'int',
		'business_connection_id'=> 'string',
		'chat'=> 'Chat',
		'forward_origin'=> 'MessageOrigin',
		'is_topic_message'=> 'bool',
		'is_automatic_forward'=> 'bool',
		'reply_to_message'=> 'Message',
		'external_reply'=> 'ExternalReplyInfo',
		'quote'=> 'TextQuote',
		'reply_to_story'=> 'Story',
		'via_bot'=> 'User',
		'edit_date'=> 'int',
		'has_protected_content'=> 'bool',
		'is_from_offline'=> 'bool',
		'media_group_id'=> 'string',
		'author_signature'=> 'string',
		'paid_star_count'=> 'int',
		'text'=> 'string',
		'entities'=> 'MessageEntity[]',
		'link_preview_options'=> 'LinkPreviewOptions',
		'effect_id'=> 'string',
		'animation'=> 'Animation',
		'audio'=> 'Audio',
		'document'=> 'Document',
		'paid_media'=> 'PaidMediaInfo',
		'photo'=> 'PhotoSize[]',
		'sticker'=> 'Sticker',
		'story'=> 'Story',
		'video'=> 'Video',
		'video_note'=> 'VideoNote',
		'voice'=> 'Voice',
		'caption'=> 'string',
		'caption_entities'=> 'MessageEntity[]',
		'show_caption_above_media'=> 'bool',
		'has_media_spoiler'=> 'bool',
		'contact'=> 'Contact',
		'dice'=> 'Dice',
		'game'=> 'Game',
		'poll'=> 'Poll',
		'venue'=> 'Venue',
		'location'=> 'Location',
		'new_chat_members'=> 'User[]',
		'left_chat_member'=> 'User',
		'new_chat_title'=> 'string',
		'new_chat_photo'=> 'PhotoSize[]',
		'delete_chat_photo'=> 'bool',
		'group_chat_created'=> 'bool',
		'supergroup_chat_created'=> 'bool',
		'channel_chat_created'=> 'bool',
		'message_auto_delete_timer_changed'=> 'MessageAutoDeleteTimerChanged',
		'migrate_to_chat_id'=> 'int',
		'migrate_from_chat_id'=> 'int',
		'pinned_message'=> 'MaybeInaccessibleMessage',
		'invoice'=> 'Invoice',
		'successful_payment'=> 'SuccessfulPayment',
		'refunded_payment'=> 'RefundedPayment',
		'users_shared'=> 'UsersShared',
		'chat_shared'=> 'ChatShared',
		'gift'=> 'GiftInfo',
		'unique_gift'=> 'UniqueGiftInfo',
		'connected_website'=> 'string',
		'write_access_allowed'=> 'WriteAccessAllowed',
		'passport_data'=> 'PassportData',
		'proximity_alert_triggered'=> 'ProximityAlertTriggered',
		'boost_added'=> 'ChatBoostAdded',
		'chat_background_set'=> 'ChatBackground',
		'forum_topic_created'=> 'ForumTopicCreated',
		'forum_topic_edited'=> 'ForumTopicEdited',
		'forum_topic_closed'=> 'ForumTopicClosed',
		'forum_topic_reopened'=> 'ForumTopicReopened',
		'general_forum_topic_hidden'=> 'GeneralForumTopicHidden',
		'general_forum_topic_unhidden'=> 'GeneralForumTopicUnhidden',
		'giveaway_created'=> 'GiveawayCreated',
		'giveaway'=> 'Giveaway',
		'giveaway_winners'=> 'GiveawayWinners',
		'giveaway_completed'=> 'GiveawayCompleted',
		'paid_message_price_changed'=> 'PaidMessagePriceChanged',
		'video_chat_scheduled'=> 'VideoChatScheduled',
		'video_chat_started'=> 'VideoChatStarted',
		'video_chat_ended'=> 'VideoChatEnded',
		'video_chat_participants_invited'=> 'VideoChatParticipantsInvited',
		'web_app_data'=> 'WebAppData',
		'reply_markup'=> 'InlineKeyboardMarkup',
		\Jeely\Extra\LazyProps\Message::class,
	];

}