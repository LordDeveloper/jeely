<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class Update
* @description This object represents an incoming update.At most one of the optional parameters can be present in any given update.
*
* @property	int $update_id The update's unique identifier. Update identifiers start from a certain positive number and increase sequentially. This identifier becomes especially handy if you're using webhooks, since it allows you to ignore repeated updates or to restore the correct update sequence, should they get out of order. If there are no new updates for at least a week, then identifier of the next update will be chosen randomly instead of sequentially.
* @method	int getUpdateId() The update's unique identifier. Update identifiers start from a certain positive number and increase sequentially. This identifier becomes especially handy if you're using webhooks, since it allows you to ignore repeated updates or to restore the correct update sequence, should they get out of order. If there are no new updates for at least a week, then identifier of the next update will be chosen randomly instead of sequentially.
* @method	bool isUpdateId()
* @method	$this setUpdateId()
* @method	$this unsetUpdateId()

* @property	Message $message Optional. New incoming message of any kind - text, photo, sticker, etc.
* @method	Message getMessage() Optional. New incoming message of any kind - text, photo, sticker, etc.
* @method	bool isMessage()
* @method	$this setMessage()
* @method	$this unsetMessage()

* @property	Message $edited_message Optional. New version of a message that is known to the bot and was edited. This update may at times be triggered by changes to message fields that are either unavailable or not actively used by your bot.
* @method	Message getEditedMessage() Optional. New version of a message that is known to the bot and was edited. This update may at times be triggered by changes to message fields that are either unavailable or not actively used by your bot.
* @method	bool isEditedMessage()
* @method	$this setEditedMessage()
* @method	$this unsetEditedMessage()

* @property	Message $channel_post Optional. New incoming channel post of any kind - text, photo, sticker, etc.
* @method	Message getChannelPost() Optional. New incoming channel post of any kind - text, photo, sticker, etc.
* @method	bool isChannelPost()
* @method	$this setChannelPost()
* @method	$this unsetChannelPost()

* @property	Message $edited_channel_post Optional. New version of a channel post that is known to the bot and was edited. This update may at times be triggered by changes to message fields that are either unavailable or not actively used by your bot.
* @method	Message getEditedChannelPost() Optional. New version of a channel post that is known to the bot and was edited. This update may at times be triggered by changes to message fields that are either unavailable or not actively used by your bot.
* @method	bool isEditedChannelPost()
* @method	$this setEditedChannelPost()
* @method	$this unsetEditedChannelPost()

* @property	BusinessConnection $business_connection Optional. The bot was connected to or disconnected from a business account, or a user edited an existing connection with the bot
* @method	BusinessConnection getBusinessConnection() Optional. The bot was connected to or disconnected from a business account, or a user edited an existing connection with the bot
* @method	bool isBusinessConnection()
* @method	$this setBusinessConnection()
* @method	$this unsetBusinessConnection()

* @property	Message $business_message Optional. New message from a connected business account
* @method	Message getBusinessMessage() Optional. New message from a connected business account
* @method	bool isBusinessMessage()
* @method	$this setBusinessMessage()
* @method	$this unsetBusinessMessage()

* @property	Message $edited_business_message Optional. New version of a message from a connected business account
* @method	Message getEditedBusinessMessage() Optional. New version of a message from a connected business account
* @method	bool isEditedBusinessMessage()
* @method	$this setEditedBusinessMessage()
* @method	$this unsetEditedBusinessMessage()

* @property	BusinessMessagesDeleted $deleted_business_messages Optional. Messages were deleted from a connected business account
* @method	BusinessMessagesDeleted getDeletedBusinessMessages() Optional. Messages were deleted from a connected business account
* @method	bool isDeletedBusinessMessages()
* @method	$this setDeletedBusinessMessages()
* @method	$this unsetDeletedBusinessMessages()

* @property	MessageReactionUpdated $message_reaction Optional. A reaction to a message was changed by a user. The bot must be an administrator in the chat and must explicitly specify "message_reaction" in the list of allowed_updates to receive these updates. The update isn't received for reactions set by bots.
* @method	MessageReactionUpdated getMessageReaction() Optional. A reaction to a message was changed by a user. The bot must be an administrator in the chat and must explicitly specify "message_reaction" in the list of allowed_updates to receive these updates. The update isn't received for reactions set by bots.
* @method	bool isMessageReaction()
* @method	$this setMessageReaction()
* @method	$this unsetMessageReaction()

* @property	MessageReactionCountUpdated $message_reaction_count Optional. Reactions to a message with anonymous reactions were changed. The bot must be an administrator in the chat and must explicitly specify "message_reaction_count" in the list of allowed_updates to receive these updates. The updates are grouped and can be sent with delay up to a few minutes.
* @method	MessageReactionCountUpdated getMessageReactionCount() Optional. Reactions to a message with anonymous reactions were changed. The bot must be an administrator in the chat and must explicitly specify "message_reaction_count" in the list of allowed_updates to receive these updates. The updates are grouped and can be sent with delay up to a few minutes.
* @method	bool isMessageReactionCount()
* @method	$this setMessageReactionCount()
* @method	$this unsetMessageReactionCount()

* @property	InlineQuery $inline_query Optional. New incoming inline query
* @method	InlineQuery getInlineQuery() Optional. New incoming inline query
* @method	bool isInlineQuery()
* @method	$this setInlineQuery()
* @method	$this unsetInlineQuery()

* @property	ChosenInlineResult $chosen_inline_result Optional. The result of an inline query that was chosen by a user and sent to their chat partner. Please see our documentation on the feedback collecting for details on how to enable these updates for your bot.
* @method	ChosenInlineResult getChosenInlineResult() Optional. The result of an inline query that was chosen by a user and sent to their chat partner. Please see our documentation on the feedback collecting for details on how to enable these updates for your bot.
* @method	bool isChosenInlineResult()
* @method	$this setChosenInlineResult()
* @method	$this unsetChosenInlineResult()

* @property	CallbackQuery $callback_query Optional. New incoming callback query
* @method	CallbackQuery getCallbackQuery() Optional. New incoming callback query
* @method	bool isCallbackQuery()
* @method	$this setCallbackQuery()
* @method	$this unsetCallbackQuery()

* @property	ShippingQuery $shipping_query Optional. New incoming shipping query. Only for invoices with flexible price
* @method	ShippingQuery getShippingQuery() Optional. New incoming shipping query. Only for invoices with flexible price
* @method	bool isShippingQuery()
* @method	$this setShippingQuery()
* @method	$this unsetShippingQuery()

* @property	PreCheckoutQuery $pre_checkout_query Optional. New incoming pre-checkout query. Contains full information about checkout
* @method	PreCheckoutQuery getPreCheckoutQuery() Optional. New incoming pre-checkout query. Contains full information about checkout
* @method	bool isPreCheckoutQuery()
* @method	$this setPreCheckoutQuery()
* @method	$this unsetPreCheckoutQuery()

* @property	PaidMediaPurchased $purchased_paid_media Optional. A user purchased paid media with a non-empty payload sent by the bot in a non-channel chat
* @method	PaidMediaPurchased getPurchasedPaidMedia() Optional. A user purchased paid media with a non-empty payload sent by the bot in a non-channel chat
* @method	bool isPurchasedPaidMedia()
* @method	$this setPurchasedPaidMedia()
* @method	$this unsetPurchasedPaidMedia()

* @property	Poll $poll Optional. New poll state. Bots receive only updates about manually stopped polls and polls, which are sent by the bot
* @method	Poll getPoll() Optional. New poll state. Bots receive only updates about manually stopped polls and polls, which are sent by the bot
* @method	bool isPoll()
* @method	$this setPoll()
* @method	$this unsetPoll()

* @property	PollAnswer $poll_answer Optional. A user changed their answer in a non-anonymous poll. Bots receive new votes only in polls that were sent by the bot itself.
* @method	PollAnswer getPollAnswer() Optional. A user changed their answer in a non-anonymous poll. Bots receive new votes only in polls that were sent by the bot itself.
* @method	bool isPollAnswer()
* @method	$this setPollAnswer()
* @method	$this unsetPollAnswer()

* @property	ChatMemberUpdated $my_chat_member Optional. The bot's chat member status was updated in a chat. For private chats, this update is received only when the bot is blocked or unblocked by the user.
* @method	ChatMemberUpdated getMyChatMember() Optional. The bot's chat member status was updated in a chat. For private chats, this update is received only when the bot is blocked or unblocked by the user.
* @method	bool isMyChatMember()
* @method	$this setMyChatMember()
* @method	$this unsetMyChatMember()

* @property	ChatMemberUpdated $chat_member Optional. A chat member's status was updated in a chat. The bot must be an administrator in the chat and must explicitly specify "chat_member" in the list of allowed_updates to receive these updates.
* @method	ChatMemberUpdated getChatMember() Optional. A chat member's status was updated in a chat. The bot must be an administrator in the chat and must explicitly specify "chat_member" in the list of allowed_updates to receive these updates.
* @method	bool isChatMember()
* @method	$this setChatMember()
* @method	$this unsetChatMember()

* @property	ChatJoinRequest $chat_join_request Optional. A request to join the chat has been sent. The bot must have the can_invite_users administrator right in the chat to receive these updates.
* @method	ChatJoinRequest getChatJoinRequest() Optional. A request to join the chat has been sent. The bot must have the can_invite_users administrator right in the chat to receive these updates.
* @method	bool isChatJoinRequest()
* @method	$this setChatJoinRequest()
* @method	$this unsetChatJoinRequest()

* @property	ChatBoostUpdated $chat_boost Optional. A chat boost was added or changed. The bot must be an administrator in the chat to receive these updates.
* @method	ChatBoostUpdated getChatBoost() Optional. A chat boost was added or changed. The bot must be an administrator in the chat to receive these updates.
* @method	bool isChatBoost()
* @method	$this setChatBoost()
* @method	$this unsetChatBoost()

* @property	ChatBoostRemoved $removed_chat_boost Optional. A boost was removed from a chat. The bot must be an administrator in the chat to receive these updates.
* @method	ChatBoostRemoved getRemovedChatBoost() Optional. A boost was removed from a chat. The bot must be an administrator in the chat to receive these updates.
* @method	bool isRemovedChatBoost()
* @method	$this setRemovedChatBoost()
* @method	$this unsetRemovedChatBoost()

*/

class Update extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'update_id'=> 'int',
		'message'=> 'Message',
		'edited_message'=> 'Message',
		'channel_post'=> 'Message',
		'edited_channel_post'=> 'Message',
		'business_connection'=> 'BusinessConnection',
		'business_message'=> 'Message',
		'edited_business_message'=> 'Message',
		'deleted_business_messages'=> 'BusinessMessagesDeleted',
		'message_reaction'=> 'MessageReactionUpdated',
		'message_reaction_count'=> 'MessageReactionCountUpdated',
		'inline_query'=> 'InlineQuery',
		'chosen_inline_result'=> 'ChosenInlineResult',
		'callback_query'=> 'CallbackQuery',
		'shipping_query'=> 'ShippingQuery',
		'pre_checkout_query'=> 'PreCheckoutQuery',
		'purchased_paid_media'=> 'PaidMediaPurchased',
		'poll'=> 'Poll',
		'poll_answer'=> 'PollAnswer',
		'my_chat_member'=> 'ChatMemberUpdated',
		'chat_member'=> 'ChatMemberUpdated',
		'chat_join_request'=> 'ChatJoinRequest',
		'chat_boost'=> 'ChatBoostUpdated',
		'removed_chat_boost'=> 'ChatBoostRemoved',
	];

}