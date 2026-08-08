<?php

namespace Jeely\Api\Types;

use Jeely\Mixins\InteractsWithMessage;

/**
 * @class Message
 * @description This object represents a message.
 *
 * @method int getMessageId() Unique message identifier inside this chat; 0 for ephemeral messages. In specific instances (e.g., a message containing a video sent to a big chat), the server might automatically schedule a message instead of sending it immediately. In such cases, this field will be 0 and the relevant message will be unusable until it is actually sent.
 * @method int getMessageThreadId() Optional. Unique identifier of a message thread or forum topic to which the message belongs; for supergroups and private chats only
 * @method DirectMessagesTopic getDirectMessagesTopic() Optional. Information about the direct messages chat topic that contains the message
 * @method User getFrom() Optional. Sender of the message; may be empty for messages sent to channels. For backward compatibility, if the message was sent on behalf of a chat, the field contains a fake sender user in non-channel chats.
 * @method Chat getSenderChat() Optional. Sender of the message when sent on behalf of a chat. For example, the supergroup itself for messages sent by its anonymous administrators or a linked channel for messages automatically forwarded to the channel's discussion group. For backward compatibility, if the message was sent on behalf of a chat, the field from contains a fake sender user in non-channel chats.
 * @method int getSenderBoostCount() Optional. If the sender of the message boosted the chat, the number of boosts added by the user
 * @method User getSenderBusinessBot() Optional. The bot that actually sent the message on behalf of the business account. Available only for outgoing messages sent on behalf of the connected business account.
 * @method string getSenderTag() Optional. Tag or custom title of the sender of the message; for supergroups only
 * @method User getReceiverUser() Optional. For ephemeral messages, the user who received the message
 * @method int getEphemeralMessageId() Optional. For ephemeral messages, identifier of the ephemeral message inside this chat. The identifier may be reused for another ephemeral message after the message is deleted or expires.
 * @method int getDate() Date the message was sent in Unix time. It is always a positive number, representing a valid date.
 * @method string getGuestQueryId() Optional. The unique identifier for the guest query. Use this identifier with the method answerGuestQuery to send a response message. If non-empty, the message belongs to the chat where the guest bot was summoned, which may not coincide with other existing bot chats sharing the same identifier.
 * @method string getBusinessConnectionId() Optional. Unique identifier of the business connection from which the message was received. If non-empty, the message belongs to a chat of the corresponding business account that is independent from any potential bot chat which might share the same identifier.
 * @method Chat getChat() Chat the message belongs to
 * @method MessageOrigin getForwardOrigin() Optional. Information about the original message for forwarded messages
 * @method bool getIsTopicMessage() Optional. True, if the message is sent to a topic in a forum supergroup or a private chat with the bot
 * @method bool getIsAutomaticForward() Optional. True, if the message is a channel post that was automatically forwarded to the connected discussion group
 * @method Message getReplyToMessage() Optional. For replies in the same chat and message thread, the original message. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply. If the message is a reply to an ephemeral message, then this field may be omitted.
 * @method ExternalReplyInfo getExternalReply() Optional. Information about the message that is being replied to, which may come from another chat or forum topic
 * @method TextQuote getQuote() Optional. For replies that quote part of the original message, the quoted part of the message
 * @method Story getReplyToStory() Optional. For replies to a story, the original story
 * @method int getReplyToChecklistTaskId() Optional. Identifier of the specific checklist task that is being replied to
 * @method string getReplyToPollOptionId() Optional. Persistent identifier of the specific poll option that is being replied to
 * @method User getViaBot() Optional. Bot through which the message was sent
 * @method User getGuestBotCallerUser() Optional. For a message sent by a guest bot, this is the user whose original message triggered the bot's response
 * @method Chat getGuestBotCallerChat() Optional. For a message sent by a guest bot, this is the chat whose original message triggered the bot's response
 * @method int getEditDate() Optional. Date the message was last edited in Unix time
 * @method bool getHasProtectedContent() Optional. True, if the message can't be forwarded
 * @method bool getIsFromOffline() Optional. True, if the message was sent by an implicit action, for example, as an away or a greeting business message, or as a scheduled message
 * @method bool getIsPaidPost() Optional. True, if the message is a paid post. Note that such posts must not be deleted for 24 hours to receive the payment and can't be edited.
 * @method string getMediaGroupId() Optional. The unique identifier inside this chat of a media message group this message belongs to
 * @method string getAuthorSignature() Optional. Signature of the post author for messages in channels, or the custom title of an anonymous group administrator
 * @method int getPaidStarCount() Optional. The number of Telegram Stars that were paid by the sender of the message to send it
 * @method string getText() Optional. For text messages, the actual UTF-8 text of the message
 * @method MessageEntity[] getEntities() Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
 * @method LinkPreviewOptions getLinkPreviewOptions() Optional. Options used for link preview generation for the message, if it is a text message and link preview options were changed
 * @method SuggestedPostInfo getSuggestedPostInfo() Optional. Information about suggested post parameters if the message is a suggested post in a channel direct messages chat. If the message is an approved or declined suggested post, then it can't be edited.
 * @method string getEffectId() Optional. Unique identifier of the message effect added to the message
 * @method RichMessage getRichMessage() Optional. Message is a rich formatted message
 * @method Animation getAnimation() Optional. Message is an animation, information about the animation. For backward compatibility, when this field is set, the document field will also be set.
 * @method Audio getAudio() Optional. Message is an audio file, information about the file
 * @method Document getDocument() Optional. Message is a general file, information about the file
 * @method LivePhoto getLivePhoto() Optional. Message is a live photo, information about the live photo. For backward compatibility, when this field is set, the photo field will also be set.
 * @method PaidMediaInfo getPaidMedia() Optional. Message contains paid media; information about the paid media
 * @method PhotoSize[] getPhoto() Optional. Message is a photo, available sizes of the photo
 * @method Sticker getSticker() Optional. Message is a sticker, information about the sticker
 * @method Story getStory() Optional. Message is a forwarded story
 * @method Video getVideo() Optional. Message is a video, information about the video
 * @method VideoNote getVideoNote() Optional. Message is a video note, information about the video message
 * @method Voice getVoice() Optional. Message is a voice message, information about the file
 * @method string getCaption() Optional. Caption for the animation, audio, document, paid media, photo, video or voice
 * @method MessageEntity[] getCaptionEntities() Optional. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption
 * @method bool getShowCaptionAboveMedia() Optional. True, if the caption must be shown above the message media
 * @method bool getHasMediaSpoiler() Optional. True, if the message media is covered by a spoiler animation
 * @method Checklist getChecklist() Optional. Message is a checklist
 * @method Contact getContact() Optional. Message is a shared contact, information about the contact
 * @method Dice getDice() Optional. Message is a dice with random value
 * @method Game getGame() Optional. Message is a game, information about the game. More about games »
 * @method Poll getPoll() Optional. Message is a native poll, information about the poll
 * @method Venue getVenue() Optional. Message is a venue, information about the venue. For backward compatibility, when this field is set, the location field will also be set.
 * @method Location getLocation() Optional. Message is a shared location, information about the location
 * @method User[] getNewChatMembers() Optional. New members that were added to the group or supergroup and information about them (the bot itself may be one of these members)
 * @method User getLeftChatMember() Optional. A member was removed from the group, information about them (this member may be the bot itself)
 * @method ChatOwnerLeft getChatOwnerLeft() Optional. Service message: chat owner has left
 * @method ChatOwnerChanged getChatOwnerChanged() Optional. Service message: chat owner has changed
 * @method string getNewChatTitle() Optional. A chat title was changed to this value
 * @method PhotoSize[] getNewChatPhoto() Optional. A chat photo was change to this value
 * @method bool getDeleteChatPhoto() Optional. Service message: the chat photo was deleted
 * @method bool getGroupChatCreated() Optional. Service message: the group has been created
 * @method bool getSupergroupChatCreated() Optional. Service message: the supergroup has been created. This field can't be received in a message coming through updates, because bot can't be a member of a supergroup when it is created. It can only be found in reply_to_message if someone replies to a very first message in a directly created supergroup.
 * @method bool getChannelChatCreated() Optional. Service message: the channel has been created. This field can't be received in a message coming through updates, because bot can't be a member of a channel when it is created. It can only be found in reply_to_message if someone replies to a very first message in a channel.
 * @method MessageAutoDeleteTimerChanged getMessageAutoDeleteTimerChanged() Optional. Service message: auto-delete timer settings changed in the chat
 * @method int getMigrateToChatId() Optional. The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
 * @method int getMigrateFromChatId() Optional. The supergroup has been migrated from a group with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
 * @method MaybeInaccessibleMessage getPinnedMessage() Optional. Specified message was pinned. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.
 * @method Invoice getInvoice() Optional. Message is an invoice for a payment, information about the invoice. More about payments »
 * @method SuccessfulPayment getSuccessfulPayment() Optional. Message is a service message about a successful payment, information about the payment. More about payments »
 * @method RefundedPayment getRefundedPayment() Optional. Message is a service message about a refunded payment, information about the payment. More about payments »
 * @method UsersShared getUsersShared() Optional. Service message: users were shared with the bot
 * @method ChatShared getChatShared() Optional. Service message: a chat was shared with the bot
 * @method GiftInfo getGift() Optional. Service message: a regular gift was sent or received
 * @method UniqueGiftInfo getUniqueGift() Optional. Service message: a unique gift was sent or received
 * @method GiftInfo getGiftUpgradeSent() Optional. Service message: upgrade of a gift was purchased after the gift was sent
 * @method string getConnectedWebsite() Optional. The domain name of the website on which the user has logged in. More about Telegram Login »
 * @method WriteAccessAllowed getWriteAccessAllowed() Optional. Service message: the user allowed the bot to write messages after adding it to the attachment or side menu, launching a Web App from a link, or accepting an explicit request from a Web App sent by the method requestWriteAccess
 * @method PassportData getPassportData() Optional. Telegram Passport data
 * @method ProximityAlertTriggered getProximityAlertTriggered() Optional. Service message: a user in the chat triggered another user's proximity alert while sharing Live Location
 * @method ChatBoostAdded getBoostAdded() Optional. Service message: user boosted the chat
 * @method ChatBackground getChatBackgroundSet() Optional. Service message: chat background set
 * @method ChecklistTasksDone getChecklistTasksDone() Optional. Service message: some tasks in a checklist were marked as done or not done
 * @method ChecklistTasksAdded getChecklistTasksAdded() Optional. Service message: tasks were added to a checklist
 * @method CommunityChatAdded getCommunityChatAdded() Optional. Service message: chat added to a Community
 * @method CommunityChatRemoved getCommunityChatRemoved() Optional. Service message: chat removed from a Community
 * @method DirectMessagePriceChanged getDirectMessagePriceChanged() Optional. Service message: the price for paid messages in the corresponding direct messages chat of a channel has changed
 * @method ForumTopicCreated getForumTopicCreated() Optional. Service message: forum topic created
 * @method ForumTopicEdited getForumTopicEdited() Optional. Service message: forum topic edited
 * @method ForumTopicClosed getForumTopicClosed() Optional. Service message: forum topic closed
 * @method ForumTopicReopened getForumTopicReopened() Optional. Service message: forum topic reopened
 * @method GeneralForumTopicHidden getGeneralForumTopicHidden() Optional. Service message: the 'General' forum topic hidden
 * @method GeneralForumTopicUnhidden getGeneralForumTopicUnhidden() Optional. Service message: the 'General' forum topic unhidden
 * @method GiveawayCreated getGiveawayCreated() Optional. Service message: a scheduled giveaway was created
 * @method Giveaway getGiveaway() Optional. The message is a scheduled giveaway message
 * @method GiveawayWinners getGiveawayWinners() Optional. A giveaway with public winners was completed
 * @method GiveawayCompleted getGiveawayCompleted() Optional. Service message: a giveaway without public winners was completed
 * @method ManagedBotCreated getManagedBotCreated() Optional. Service message: user created a bot that will be managed by the current bot
 * @method PaidMessagePriceChanged getPaidMessagePriceChanged() Optional. Service message: the price for paid messages has changed in the chat
 * @method PollOptionAdded getPollOptionAdded() Optional. Service message: answer option was added to a poll
 * @method PollOptionDeleted getPollOptionDeleted() Optional. Service message: answer option was deleted from a poll
 * @method SuggestedPostApproved getSuggestedPostApproved() Optional. Service message: a suggested post was approved
 * @method SuggestedPostApprovalFailed getSuggestedPostApprovalFailed() Optional. Service message: approval of a suggested post has failed
 * @method SuggestedPostDeclined getSuggestedPostDeclined() Optional. Service message: a suggested post was declined
 * @method SuggestedPostPaid getSuggestedPostPaid() Optional. Service message: payment for a suggested post was received
 * @method SuggestedPostRefunded getSuggestedPostRefunded() Optional. Service message: payment for a suggested post was refunded
 * @method VideoChatScheduled getVideoChatScheduled() Optional. Service message: video chat scheduled
 * @method VideoChatStarted getVideoChatStarted() Optional. Service message: video chat started
 * @method VideoChatEnded getVideoChatEnded() Optional. Service message: video chat ended
 * @method VideoChatParticipantsInvited getVideoChatParticipantsInvited() Optional. Service message: new participants invited to a video chat
 * @method WebAppData getWebAppData() Optional. Service message: data sent by a Web App
 * @method InlineKeyboardMarkup getReplyMarkup() Optional. Inline keyboard attached to the message. login_url buttons are represented as ordinary url buttons.
 *
 * @method bool isMessageId()
 * @method bool isMessageThreadId()
 * @method bool isDirectMessagesTopic()
 * @method bool isFrom()
 * @method bool isSenderChat()
 * @method bool isSenderBoostCount()
 * @method bool isSenderBusinessBot()
 * @method bool isSenderTag()
 * @method bool isReceiverUser()
 * @method bool isEphemeralMessageId()
 * @method bool isDate()
 * @method bool isGuestQueryId()
 * @method bool isBusinessConnectionId()
 * @method bool isChat()
 * @method bool isForwardOrigin()
 * @method bool isIsTopicMessage()
 * @method bool isIsAutomaticForward()
 * @method bool isReplyToMessage()
 * @method bool isExternalReply()
 * @method bool isQuote()
 * @method bool isReplyToStory()
 * @method bool isReplyToChecklistTaskId()
 * @method bool isReplyToPollOptionId()
 * @method bool isViaBot()
 * @method bool isGuestBotCallerUser()
 * @method bool isGuestBotCallerChat()
 * @method bool isEditDate()
 * @method bool isHasProtectedContent()
 * @method bool isIsFromOffline()
 * @method bool isIsPaidPost()
 * @method bool isMediaGroupId()
 * @method bool isAuthorSignature()
 * @method bool isPaidStarCount()
 * @method bool isText()
 * @method bool isEntities()
 * @method bool isLinkPreviewOptions()
 * @method bool isSuggestedPostInfo()
 * @method bool isEffectId()
 * @method bool isRichMessage()
 * @method bool isAnimation()
 * @method bool isAudio()
 * @method bool isDocument()
 * @method bool isLivePhoto()
 * @method bool isPaidMedia()
 * @method bool isPhoto()
 * @method bool isSticker()
 * @method bool isStory()
 * @method bool isVideo()
 * @method bool isVideoNote()
 * @method bool isVoice()
 * @method bool isCaption()
 * @method bool isCaptionEntities()
 * @method bool isShowCaptionAboveMedia()
 * @method bool isHasMediaSpoiler()
 * @method bool isChecklist()
 * @method bool isContact()
 * @method bool isDice()
 * @method bool isGame()
 * @method bool isPoll()
 * @method bool isVenue()
 * @method bool isLocation()
 * @method bool isNewChatMembers()
 * @method bool isLeftChatMember()
 * @method bool isChatOwnerLeft()
 * @method bool isChatOwnerChanged()
 * @method bool isNewChatTitle()
 * @method bool isNewChatPhoto()
 * @method bool isDeleteChatPhoto()
 * @method bool isGroupChatCreated()
 * @method bool isSupergroupChatCreated()
 * @method bool isChannelChatCreated()
 * @method bool isMessageAutoDeleteTimerChanged()
 * @method bool isMigrateToChatId()
 * @method bool isMigrateFromChatId()
 * @method bool isPinnedMessage()
 * @method bool isInvoice()
 * @method bool isSuccessfulPayment()
 * @method bool isRefundedPayment()
 * @method bool isUsersShared()
 * @method bool isChatShared()
 * @method bool isGift()
 * @method bool isUniqueGift()
 * @method bool isGiftUpgradeSent()
 * @method bool isConnectedWebsite()
 * @method bool isWriteAccessAllowed()
 * @method bool isPassportData()
 * @method bool isProximityAlertTriggered()
 * @method bool isBoostAdded()
 * @method bool isChatBackgroundSet()
 * @method bool isChecklistTasksDone()
 * @method bool isChecklistTasksAdded()
 * @method bool isCommunityChatAdded()
 * @method bool isCommunityChatRemoved()
 * @method bool isDirectMessagePriceChanged()
 * @method bool isForumTopicCreated()
 * @method bool isForumTopicEdited()
 * @method bool isForumTopicClosed()
 * @method bool isForumTopicReopened()
 * @method bool isGeneralForumTopicHidden()
 * @method bool isGeneralForumTopicUnhidden()
 * @method bool isGiveawayCreated()
 * @method bool isGiveaway()
 * @method bool isGiveawayWinners()
 * @method bool isGiveawayCompleted()
 * @method bool isManagedBotCreated()
 * @method bool isPaidMessagePriceChanged()
 * @method bool isPollOptionAdded()
 * @method bool isPollOptionDeleted()
 * @method bool isSuggestedPostApproved()
 * @method bool isSuggestedPostApprovalFailed()
 * @method bool isSuggestedPostDeclined()
 * @method bool isSuggestedPostPaid()
 * @method bool isSuggestedPostRefunded()
 * @method bool isVideoChatScheduled()
 * @method bool isVideoChatStarted()
 * @method bool isVideoChatEnded()
 * @method bool isVideoChatParticipantsInvited()
 * @method bool isWebAppData()
 * @method bool isReplyMarkup()
 *
 * @method $this setMessageId()
 * @method $this setMessageThreadId()
 * @method $this setDirectMessagesTopic()
 * @method $this setFrom()
 * @method $this setSenderChat()
 * @method $this setSenderBoostCount()
 * @method $this setSenderBusinessBot()
 * @method $this setSenderTag()
 * @method $this setReceiverUser()
 * @method $this setEphemeralMessageId()
 * @method $this setDate()
 * @method $this setGuestQueryId()
 * @method $this setBusinessConnectionId()
 * @method $this setChat()
 * @method $this setForwardOrigin()
 * @method $this setIsTopicMessage()
 * @method $this setIsAutomaticForward()
 * @method $this setReplyToMessage()
 * @method $this setExternalReply()
 * @method $this setQuote()
 * @method $this setReplyToStory()
 * @method $this setReplyToChecklistTaskId()
 * @method $this setReplyToPollOptionId()
 * @method $this setViaBot()
 * @method $this setGuestBotCallerUser()
 * @method $this setGuestBotCallerChat()
 * @method $this setEditDate()
 * @method $this setHasProtectedContent()
 * @method $this setIsFromOffline()
 * @method $this setIsPaidPost()
 * @method $this setMediaGroupId()
 * @method $this setAuthorSignature()
 * @method $this setPaidStarCount()
 * @method $this setText()
 * @method $this setEntities()
 * @method $this setLinkPreviewOptions()
 * @method $this setSuggestedPostInfo()
 * @method $this setEffectId()
 * @method $this setRichMessage()
 * @method $this setAnimation()
 * @method $this setAudio()
 * @method $this setDocument()
 * @method $this setLivePhoto()
 * @method $this setPaidMedia()
 * @method $this setPhoto()
 * @method $this setSticker()
 * @method $this setStory()
 * @method $this setVideo()
 * @method $this setVideoNote()
 * @method $this setVoice()
 * @method $this setCaption()
 * @method $this setCaptionEntities()
 * @method $this setShowCaptionAboveMedia()
 * @method $this setHasMediaSpoiler()
 * @method $this setChecklist()
 * @method $this setContact()
 * @method $this setDice()
 * @method $this setGame()
 * @method $this setPoll()
 * @method $this setVenue()
 * @method $this setLocation()
 * @method $this setNewChatMembers()
 * @method $this setLeftChatMember()
 * @method $this setChatOwnerLeft()
 * @method $this setChatOwnerChanged()
 * @method $this setNewChatTitle()
 * @method $this setNewChatPhoto()
 * @method $this setDeleteChatPhoto()
 * @method $this setGroupChatCreated()
 * @method $this setSupergroupChatCreated()
 * @method $this setChannelChatCreated()
 * @method $this setMessageAutoDeleteTimerChanged()
 * @method $this setMigrateToChatId()
 * @method $this setMigrateFromChatId()
 * @method $this setPinnedMessage()
 * @method $this setInvoice()
 * @method $this setSuccessfulPayment()
 * @method $this setRefundedPayment()
 * @method $this setUsersShared()
 * @method $this setChatShared()
 * @method $this setGift()
 * @method $this setUniqueGift()
 * @method $this setGiftUpgradeSent()
 * @method $this setConnectedWebsite()
 * @method $this setWriteAccessAllowed()
 * @method $this setPassportData()
 * @method $this setProximityAlertTriggered()
 * @method $this setBoostAdded()
 * @method $this setChatBackgroundSet()
 * @method $this setChecklistTasksDone()
 * @method $this setChecklistTasksAdded()
 * @method $this setCommunityChatAdded()
 * @method $this setCommunityChatRemoved()
 * @method $this setDirectMessagePriceChanged()
 * @method $this setForumTopicCreated()
 * @method $this setForumTopicEdited()
 * @method $this setForumTopicClosed()
 * @method $this setForumTopicReopened()
 * @method $this setGeneralForumTopicHidden()
 * @method $this setGeneralForumTopicUnhidden()
 * @method $this setGiveawayCreated()
 * @method $this setGiveaway()
 * @method $this setGiveawayWinners()
 * @method $this setGiveawayCompleted()
 * @method $this setManagedBotCreated()
 * @method $this setPaidMessagePriceChanged()
 * @method $this setPollOptionAdded()
 * @method $this setPollOptionDeleted()
 * @method $this setSuggestedPostApproved()
 * @method $this setSuggestedPostApprovalFailed()
 * @method $this setSuggestedPostDeclined()
 * @method $this setSuggestedPostPaid()
 * @method $this setSuggestedPostRefunded()
 * @method $this setVideoChatScheduled()
 * @method $this setVideoChatStarted()
 * @method $this setVideoChatEnded()
 * @method $this setVideoChatParticipantsInvited()
 * @method $this setWebAppData()
 * @method $this setReplyMarkup()
 *
 * @method $this unsetMessageId()
 * @method $this unsetMessageThreadId()
 * @method $this unsetDirectMessagesTopic()
 * @method $this unsetFrom()
 * @method $this unsetSenderChat()
 * @method $this unsetSenderBoostCount()
 * @method $this unsetSenderBusinessBot()
 * @method $this unsetSenderTag()
 * @method $this unsetReceiverUser()
 * @method $this unsetEphemeralMessageId()
 * @method $this unsetDate()
 * @method $this unsetGuestQueryId()
 * @method $this unsetBusinessConnectionId()
 * @method $this unsetChat()
 * @method $this unsetForwardOrigin()
 * @method $this unsetIsTopicMessage()
 * @method $this unsetIsAutomaticForward()
 * @method $this unsetReplyToMessage()
 * @method $this unsetExternalReply()
 * @method $this unsetQuote()
 * @method $this unsetReplyToStory()
 * @method $this unsetReplyToChecklistTaskId()
 * @method $this unsetReplyToPollOptionId()
 * @method $this unsetViaBot()
 * @method $this unsetGuestBotCallerUser()
 * @method $this unsetGuestBotCallerChat()
 * @method $this unsetEditDate()
 * @method $this unsetHasProtectedContent()
 * @method $this unsetIsFromOffline()
 * @method $this unsetIsPaidPost()
 * @method $this unsetMediaGroupId()
 * @method $this unsetAuthorSignature()
 * @method $this unsetPaidStarCount()
 * @method $this unsetText()
 * @method $this unsetEntities()
 * @method $this unsetLinkPreviewOptions()
 * @method $this unsetSuggestedPostInfo()
 * @method $this unsetEffectId()
 * @method $this unsetRichMessage()
 * @method $this unsetAnimation()
 * @method $this unsetAudio()
 * @method $this unsetDocument()
 * @method $this unsetLivePhoto()
 * @method $this unsetPaidMedia()
 * @method $this unsetPhoto()
 * @method $this unsetSticker()
 * @method $this unsetStory()
 * @method $this unsetVideo()
 * @method $this unsetVideoNote()
 * @method $this unsetVoice()
 * @method $this unsetCaption()
 * @method $this unsetCaptionEntities()
 * @method $this unsetShowCaptionAboveMedia()
 * @method $this unsetHasMediaSpoiler()
 * @method $this unsetChecklist()
 * @method $this unsetContact()
 * @method $this unsetDice()
 * @method $this unsetGame()
 * @method $this unsetPoll()
 * @method $this unsetVenue()
 * @method $this unsetLocation()
 * @method $this unsetNewChatMembers()
 * @method $this unsetLeftChatMember()
 * @method $this unsetChatOwnerLeft()
 * @method $this unsetChatOwnerChanged()
 * @method $this unsetNewChatTitle()
 * @method $this unsetNewChatPhoto()
 * @method $this unsetDeleteChatPhoto()
 * @method $this unsetGroupChatCreated()
 * @method $this unsetSupergroupChatCreated()
 * @method $this unsetChannelChatCreated()
 * @method $this unsetMessageAutoDeleteTimerChanged()
 * @method $this unsetMigrateToChatId()
 * @method $this unsetMigrateFromChatId()
 * @method $this unsetPinnedMessage()
 * @method $this unsetInvoice()
 * @method $this unsetSuccessfulPayment()
 * @method $this unsetRefundedPayment()
 * @method $this unsetUsersShared()
 * @method $this unsetChatShared()
 * @method $this unsetGift()
 * @method $this unsetUniqueGift()
 * @method $this unsetGiftUpgradeSent()
 * @method $this unsetConnectedWebsite()
 * @method $this unsetWriteAccessAllowed()
 * @method $this unsetPassportData()
 * @method $this unsetProximityAlertTriggered()
 * @method $this unsetBoostAdded()
 * @method $this unsetChatBackgroundSet()
 * @method $this unsetChecklistTasksDone()
 * @method $this unsetChecklistTasksAdded()
 * @method $this unsetCommunityChatAdded()
 * @method $this unsetCommunityChatRemoved()
 * @method $this unsetDirectMessagePriceChanged()
 * @method $this unsetForumTopicCreated()
 * @method $this unsetForumTopicEdited()
 * @method $this unsetForumTopicClosed()
 * @method $this unsetForumTopicReopened()
 * @method $this unsetGeneralForumTopicHidden()
 * @method $this unsetGeneralForumTopicUnhidden()
 * @method $this unsetGiveawayCreated()
 * @method $this unsetGiveaway()
 * @method $this unsetGiveawayWinners()
 * @method $this unsetGiveawayCompleted()
 * @method $this unsetManagedBotCreated()
 * @method $this unsetPaidMessagePriceChanged()
 * @method $this unsetPollOptionAdded()
 * @method $this unsetPollOptionDeleted()
 * @method $this unsetSuggestedPostApproved()
 * @method $this unsetSuggestedPostApprovalFailed()
 * @method $this unsetSuggestedPostDeclined()
 * @method $this unsetSuggestedPostPaid()
 * @method $this unsetSuggestedPostRefunded()
 * @method $this unsetVideoChatScheduled()
 * @method $this unsetVideoChatStarted()
 * @method $this unsetVideoChatEnded()
 * @method $this unsetVideoChatParticipantsInvited()
 * @method $this unsetWebAppData()
 * @method $this unsetReplyMarkup()
 *
 * @property int $message_id Unique message identifier inside this chat; 0 for ephemeral messages. In specific instances (e.g., a message containing a video sent to a big chat), the server might automatically schedule a message instead of sending it immediately. In such cases, this field will be 0 and the relevant message will be unusable until it is actually sent.
 * @property int $message_thread_id Optional. Unique identifier of a message thread or forum topic to which the message belongs; for supergroups and private chats only
 * @property DirectMessagesTopic $direct_messages_topic Optional. Information about the direct messages chat topic that contains the message
 * @property User $from Optional. Sender of the message; may be empty for messages sent to channels. For backward compatibility, if the message was sent on behalf of a chat, the field contains a fake sender user in non-channel chats.
 * @property Chat $sender_chat Optional. Sender of the message when sent on behalf of a chat. For example, the supergroup itself for messages sent by its anonymous administrators or a linked channel for messages automatically forwarded to the channel's discussion group. For backward compatibility, if the message was sent on behalf of a chat, the field from contains a fake sender user in non-channel chats.
 * @property int $sender_boost_count Optional. If the sender of the message boosted the chat, the number of boosts added by the user
 * @property User $sender_business_bot Optional. The bot that actually sent the message on behalf of the business account. Available only for outgoing messages sent on behalf of the connected business account.
 * @property string $sender_tag Optional. Tag or custom title of the sender of the message; for supergroups only
 * @property User $receiver_user Optional. For ephemeral messages, the user who received the message
 * @property int $ephemeral_message_id Optional. For ephemeral messages, identifier of the ephemeral message inside this chat. The identifier may be reused for another ephemeral message after the message is deleted or expires.
 * @property int $date Date the message was sent in Unix time. It is always a positive number, representing a valid date.
 * @property string $guest_query_id Optional. The unique identifier for the guest query. Use this identifier with the method answerGuestQuery to send a response message. If non-empty, the message belongs to the chat where the guest bot was summoned, which may not coincide with other existing bot chats sharing the same identifier.
 * @property string $business_connection_id Optional. Unique identifier of the business connection from which the message was received. If non-empty, the message belongs to a chat of the corresponding business account that is independent from any potential bot chat which might share the same identifier.
 * @property Chat $chat Chat the message belongs to
 * @property MessageOrigin $forward_origin Optional. Information about the original message for forwarded messages
 * @property bool $is_topic_message Optional. True, if the message is sent to a topic in a forum supergroup or a private chat with the bot
 * @property bool $is_automatic_forward Optional. True, if the message is a channel post that was automatically forwarded to the connected discussion group
 * @property Message $reply_to_message Optional. For replies in the same chat and message thread, the original message. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply. If the message is a reply to an ephemeral message, then this field may be omitted.
 * @property ExternalReplyInfo $external_reply Optional. Information about the message that is being replied to, which may come from another chat or forum topic
 * @property TextQuote $quote Optional. For replies that quote part of the original message, the quoted part of the message
 * @property Story $reply_to_story Optional. For replies to a story, the original story
 * @property int $reply_to_checklist_task_id Optional. Identifier of the specific checklist task that is being replied to
 * @property string $reply_to_poll_option_id Optional. Persistent identifier of the specific poll option that is being replied to
 * @property User $via_bot Optional. Bot through which the message was sent
 * @property User $guest_bot_caller_user Optional. For a message sent by a guest bot, this is the user whose original message triggered the bot's response
 * @property Chat $guest_bot_caller_chat Optional. For a message sent by a guest bot, this is the chat whose original message triggered the bot's response
 * @property int $edit_date Optional. Date the message was last edited in Unix time
 * @property bool $has_protected_content Optional. True, if the message can't be forwarded
 * @property bool $is_from_offline Optional. True, if the message was sent by an implicit action, for example, as an away or a greeting business message, or as a scheduled message
 * @property bool $is_paid_post Optional. True, if the message is a paid post. Note that such posts must not be deleted for 24 hours to receive the payment and can't be edited.
 * @property string $media_group_id Optional. The unique identifier inside this chat of a media message group this message belongs to
 * @property string $author_signature Optional. Signature of the post author for messages in channels, or the custom title of an anonymous group administrator
 * @property int $paid_star_count Optional. The number of Telegram Stars that were paid by the sender of the message to send it
 * @property string $text Optional. For text messages, the actual UTF-8 text of the message
 * @property MessageEntity[] $entities Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
 * @property LinkPreviewOptions $link_preview_options Optional. Options used for link preview generation for the message, if it is a text message and link preview options were changed
 * @property SuggestedPostInfo $suggested_post_info Optional. Information about suggested post parameters if the message is a suggested post in a channel direct messages chat. If the message is an approved or declined suggested post, then it can't be edited.
 * @property string $effect_id Optional. Unique identifier of the message effect added to the message
 * @property RichMessage $rich_message Optional. Message is a rich formatted message
 * @property Animation $animation Optional. Message is an animation, information about the animation. For backward compatibility, when this field is set, the document field will also be set.
 * @property Audio $audio Optional. Message is an audio file, information about the file
 * @property Document $document Optional. Message is a general file, information about the file
 * @property LivePhoto $live_photo Optional. Message is a live photo, information about the live photo. For backward compatibility, when this field is set, the photo field will also be set.
 * @property PaidMediaInfo $paid_media Optional. Message contains paid media; information about the paid media
 * @property PhotoSize[] $photo Optional. Message is a photo, available sizes of the photo
 * @property Sticker $sticker Optional. Message is a sticker, information about the sticker
 * @property Story $story Optional. Message is a forwarded story
 * @property Video $video Optional. Message is a video, information about the video
 * @property VideoNote $video_note Optional. Message is a video note, information about the video message
 * @property Voice $voice Optional. Message is a voice message, information about the file
 * @property string $caption Optional. Caption for the animation, audio, document, paid media, photo, video or voice
 * @property MessageEntity[] $caption_entities Optional. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption
 * @property bool $show_caption_above_media Optional. True, if the caption must be shown above the message media
 * @property bool $has_media_spoiler Optional. True, if the message media is covered by a spoiler animation
 * @property Checklist $checklist Optional. Message is a checklist
 * @property Contact $contact Optional. Message is a shared contact, information about the contact
 * @property Dice $dice Optional. Message is a dice with random value
 * @property Game $game Optional. Message is a game, information about the game. More about games »
 * @property Poll $poll Optional. Message is a native poll, information about the poll
 * @property Venue $venue Optional. Message is a venue, information about the venue. For backward compatibility, when this field is set, the location field will also be set.
 * @property Location $location Optional. Message is a shared location, information about the location
 * @property User[] $new_chat_members Optional. New members that were added to the group or supergroup and information about them (the bot itself may be one of these members)
 * @property User $left_chat_member Optional. A member was removed from the group, information about them (this member may be the bot itself)
 * @property ChatOwnerLeft $chat_owner_left Optional. Service message: chat owner has left
 * @property ChatOwnerChanged $chat_owner_changed Optional. Service message: chat owner has changed
 * @property string $new_chat_title Optional. A chat title was changed to this value
 * @property PhotoSize[] $new_chat_photo Optional. A chat photo was change to this value
 * @property bool $delete_chat_photo Optional. Service message: the chat photo was deleted
 * @property bool $group_chat_created Optional. Service message: the group has been created
 * @property bool $supergroup_chat_created Optional. Service message: the supergroup has been created. This field can't be received in a message coming through updates, because bot can't be a member of a supergroup when it is created. It can only be found in reply_to_message if someone replies to a very first message in a directly created supergroup.
 * @property bool $channel_chat_created Optional. Service message: the channel has been created. This field can't be received in a message coming through updates, because bot can't be a member of a channel when it is created. It can only be found in reply_to_message if someone replies to a very first message in a channel.
 * @property MessageAutoDeleteTimerChanged $message_auto_delete_timer_changed Optional. Service message: auto-delete timer settings changed in the chat
 * @property int $migrate_to_chat_id Optional. The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
 * @property int $migrate_from_chat_id Optional. The supergroup has been migrated from a group with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
 * @property MaybeInaccessibleMessage $pinned_message Optional. Specified message was pinned. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.
 * @property Invoice $invoice Optional. Message is an invoice for a payment, information about the invoice. More about payments »
 * @property SuccessfulPayment $successful_payment Optional. Message is a service message about a successful payment, information about the payment. More about payments »
 * @property RefundedPayment $refunded_payment Optional. Message is a service message about a refunded payment, information about the payment. More about payments »
 * @property UsersShared $users_shared Optional. Service message: users were shared with the bot
 * @property ChatShared $chat_shared Optional. Service message: a chat was shared with the bot
 * @property GiftInfo $gift Optional. Service message: a regular gift was sent or received
 * @property UniqueGiftInfo $unique_gift Optional. Service message: a unique gift was sent or received
 * @property GiftInfo $gift_upgrade_sent Optional. Service message: upgrade of a gift was purchased after the gift was sent
 * @property string $connected_website Optional. The domain name of the website on which the user has logged in. More about Telegram Login »
 * @property WriteAccessAllowed $write_access_allowed Optional. Service message: the user allowed the bot to write messages after adding it to the attachment or side menu, launching a Web App from a link, or accepting an explicit request from a Web App sent by the method requestWriteAccess
 * @property PassportData $passport_data Optional. Telegram Passport data
 * @property ProximityAlertTriggered $proximity_alert_triggered Optional. Service message: a user in the chat triggered another user's proximity alert while sharing Live Location
 * @property ChatBoostAdded $boost_added Optional. Service message: user boosted the chat
 * @property ChatBackground $chat_background_set Optional. Service message: chat background set
 * @property ChecklistTasksDone $checklist_tasks_done Optional. Service message: some tasks in a checklist were marked as done or not done
 * @property ChecklistTasksAdded $checklist_tasks_added Optional. Service message: tasks were added to a checklist
 * @property CommunityChatAdded $community_chat_added Optional. Service message: chat added to a Community
 * @property CommunityChatRemoved $community_chat_removed Optional. Service message: chat removed from a Community
 * @property DirectMessagePriceChanged $direct_message_price_changed Optional. Service message: the price for paid messages in the corresponding direct messages chat of a channel has changed
 * @property ForumTopicCreated $forum_topic_created Optional. Service message: forum topic created
 * @property ForumTopicEdited $forum_topic_edited Optional. Service message: forum topic edited
 * @property ForumTopicClosed $forum_topic_closed Optional. Service message: forum topic closed
 * @property ForumTopicReopened $forum_topic_reopened Optional. Service message: forum topic reopened
 * @property GeneralForumTopicHidden $general_forum_topic_hidden Optional. Service message: the 'General' forum topic hidden
 * @property GeneralForumTopicUnhidden $general_forum_topic_unhidden Optional. Service message: the 'General' forum topic unhidden
 * @property GiveawayCreated $giveaway_created Optional. Service message: a scheduled giveaway was created
 * @property Giveaway $giveaway Optional. The message is a scheduled giveaway message
 * @property GiveawayWinners $giveaway_winners Optional. A giveaway with public winners was completed
 * @property GiveawayCompleted $giveaway_completed Optional. Service message: a giveaway without public winners was completed
 * @property ManagedBotCreated $managed_bot_created Optional. Service message: user created a bot that will be managed by the current bot
 * @property PaidMessagePriceChanged $paid_message_price_changed Optional. Service message: the price for paid messages has changed in the chat
 * @property PollOptionAdded $poll_option_added Optional. Service message: answer option was added to a poll
 * @property PollOptionDeleted $poll_option_deleted Optional. Service message: answer option was deleted from a poll
 * @property SuggestedPostApproved $suggested_post_approved Optional. Service message: a suggested post was approved
 * @property SuggestedPostApprovalFailed $suggested_post_approval_failed Optional. Service message: approval of a suggested post has failed
 * @property SuggestedPostDeclined $suggested_post_declined Optional. Service message: a suggested post was declined
 * @property SuggestedPostPaid $suggested_post_paid Optional. Service message: payment for a suggested post was received
 * @property SuggestedPostRefunded $suggested_post_refunded Optional. Service message: payment for a suggested post was refunded
 * @property VideoChatScheduled $video_chat_scheduled Optional. Service message: video chat scheduled
 * @property VideoChatStarted $video_chat_started Optional. Service message: video chat started
 * @property VideoChatEnded $video_chat_ended Optional. Service message: video chat ended
 * @property VideoChatParticipantsInvited $video_chat_participants_invited Optional. Service message: new participants invited to a video chat
 * @property WebAppData $web_app_data Optional. Service message: data sent by a Web App
 * @property InlineKeyboardMarkup $reply_markup Optional. Inline keyboard attached to the message. login_url buttons are represented as ordinary url buttons.
 *
 * @see https://core.telegram.org/bots/api#message
 */
class Message extends \Jeely\Nectar
{
    use InteractsWithMessage;

    public const JSON_PROPERTY_MAP = [
        'message_id' => 'int',
        'message_thread_id' => 'int',
        'direct_messages_topic' => 'DirectMessagesTopic',
        'from' => 'User',
        'sender_chat' => 'Chat',
        'sender_boost_count' => 'int',
        'sender_business_bot' => 'User',
        'sender_tag' => 'string',
        'receiver_user' => 'User',
        'ephemeral_message_id' => 'int',
        'date' => 'int',
        'guest_query_id' => 'string',
        'business_connection_id' => 'string',
        'chat' => 'Chat',
        'forward_origin' => 'MessageOrigin',
        'is_topic_message' => 'bool',
        'is_automatic_forward' => 'bool',
        'reply_to_message' => 'Message',
        'external_reply' => 'ExternalReplyInfo',
        'quote' => 'TextQuote',
        'reply_to_story' => 'Story',
        'reply_to_checklist_task_id' => 'int',
        'reply_to_poll_option_id' => 'string',
        'via_bot' => 'User',
        'guest_bot_caller_user' => 'User',
        'guest_bot_caller_chat' => 'Chat',
        'edit_date' => 'int',
        'has_protected_content' => 'bool',
        'is_from_offline' => 'bool',
        'is_paid_post' => 'bool',
        'media_group_id' => 'string',
        'author_signature' => 'string',
        'paid_star_count' => 'int',
        'text' => 'string',
        'entities' => 'MessageEntity[]',
        'link_preview_options' => 'LinkPreviewOptions',
        'suggested_post_info' => 'SuggestedPostInfo',
        'effect_id' => 'string',
        'rich_message' => 'RichMessage',
        'animation' => 'Animation',
        'audio' => 'Audio',
        'document' => 'Document',
        'live_photo' => 'LivePhoto',
        'paid_media' => 'PaidMediaInfo',
        'photo' => 'PhotoSize[]',
        'sticker' => 'Sticker',
        'story' => 'Story',
        'video' => 'Video',
        'video_note' => 'VideoNote',
        'voice' => 'Voice',
        'caption' => 'string',
        'caption_entities' => 'MessageEntity[]',
        'show_caption_above_media' => 'bool',
        'has_media_spoiler' => 'bool',
        'checklist' => 'Checklist',
        'contact' => 'Contact',
        'dice' => 'Dice',
        'game' => 'Game',
        'poll' => 'Poll',
        'venue' => 'Venue',
        'location' => 'Location',
        'new_chat_members' => 'User[]',
        'left_chat_member' => 'User',
        'chat_owner_left' => 'ChatOwnerLeft',
        'chat_owner_changed' => 'ChatOwnerChanged',
        'new_chat_title' => 'string',
        'new_chat_photo' => 'PhotoSize[]',
        'delete_chat_photo' => 'bool',
        'group_chat_created' => 'bool',
        'supergroup_chat_created' => 'bool',
        'channel_chat_created' => 'bool',
        'message_auto_delete_timer_changed' => 'MessageAutoDeleteTimerChanged',
        'migrate_to_chat_id' => 'int',
        'migrate_from_chat_id' => 'int',
        'pinned_message' => 'MaybeInaccessibleMessage',
        'invoice' => 'Invoice',
        'successful_payment' => 'SuccessfulPayment',
        'refunded_payment' => 'RefundedPayment',
        'users_shared' => 'UsersShared',
        'chat_shared' => 'ChatShared',
        'gift' => 'GiftInfo',
        'unique_gift' => 'UniqueGiftInfo',
        'gift_upgrade_sent' => 'GiftInfo',
        'connected_website' => 'string',
        'write_access_allowed' => 'WriteAccessAllowed',
        'passport_data' => 'PassportData',
        'proximity_alert_triggered' => 'ProximityAlertTriggered',
        'boost_added' => 'ChatBoostAdded',
        'chat_background_set' => 'ChatBackground',
        'checklist_tasks_done' => 'ChecklistTasksDone',
        'checklist_tasks_added' => 'ChecklistTasksAdded',
        'community_chat_added' => 'CommunityChatAdded',
        'community_chat_removed' => 'CommunityChatRemoved',
        'direct_message_price_changed' => 'DirectMessagePriceChanged',
        'forum_topic_created' => 'ForumTopicCreated',
        'forum_topic_edited' => 'ForumTopicEdited',
        'forum_topic_closed' => 'ForumTopicClosed',
        'forum_topic_reopened' => 'ForumTopicReopened',
        'general_forum_topic_hidden' => 'GeneralForumTopicHidden',
        'general_forum_topic_unhidden' => 'GeneralForumTopicUnhidden',
        'giveaway_created' => 'GiveawayCreated',
        'giveaway' => 'Giveaway',
        'giveaway_winners' => 'GiveawayWinners',
        'giveaway_completed' => 'GiveawayCompleted',
        'managed_bot_created' => 'ManagedBotCreated',
        'paid_message_price_changed' => 'PaidMessagePriceChanged',
        'poll_option_added' => 'PollOptionAdded',
        'poll_option_deleted' => 'PollOptionDeleted',
        'suggested_post_approved' => 'SuggestedPostApproved',
        'suggested_post_approval_failed' => 'SuggestedPostApprovalFailed',
        'suggested_post_declined' => 'SuggestedPostDeclined',
        'suggested_post_paid' => 'SuggestedPostPaid',
        'suggested_post_refunded' => 'SuggestedPostRefunded',
        'video_chat_scheduled' => 'VideoChatScheduled',
        'video_chat_started' => 'VideoChatStarted',
        'video_chat_ended' => 'VideoChatEnded',
        'video_chat_participants_invited' => 'VideoChatParticipantsInvited',
        'web_app_data' => 'WebAppData',
        'reply_markup' => 'InlineKeyboardMarkup',
    ];
}
