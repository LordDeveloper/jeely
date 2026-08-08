<?php

namespace Jeely\Api;

use Jeely\Mixins\InteractsWithUpdate;

/**
 * @class Update
 * @description This object represents an incoming update.At most one of the optional fields can be present in any given update.
 *
 * @method int getUpdateId() The update's unique identifier. Update identifiers start from a certain positive number and increase sequentially. This identifier becomes especially handy if you're using webhooks, since it allows you to ignore repeated updates or to restore the correct update sequence, should they get out of order. If there are no new updates for at least a week, then identifier of the next update will be chosen randomly instead of sequentially.
 * @method Message getMessage() Optional. New incoming message of any kind - text, photo, sticker, etc.
 * @method Message getEditedMessage() Optional. New version of a message that is known to the bot and was edited. This update may at times be triggered by changes to message fields that are either unavailable or not actively used by your bot.
 * @method Message getChannelPost() Optional. New incoming channel post of any kind - text, photo, sticker, etc.
 * @method Message getEditedChannelPost() Optional. New version of a channel post that is known to the bot and was edited. This update may at times be triggered by changes to message fields that are either unavailable or not actively used by your bot.
 * @method BusinessConnection getBusinessConnection() Optional. The bot was connected to or disconnected from a business account, or a user edited an existing connection with the bot
 * @method Message getBusinessMessage() Optional. New message from a connected business account
 * @method Message getEditedBusinessMessage() Optional. New version of a message from a connected business account
 * @method BusinessMessagesDeleted getDeletedBusinessMessages() Optional. Messages were deleted from a connected business account
 * @method Message getGuestMessage() Optional. New guest message. The bot can use the field Message.guest_query_id and the method answerGuestQuery to send a message in response.
 * @method MessageReactionUpdated getMessageReaction() Optional. A reaction to a message was changed by a user. The bot must be an administrator in the chat and must explicitly specify "message_reaction" in the list of allowed_updates to receive these updates. The update isn't received for reactions set by bots.
 * @method MessageReactionCountUpdated getMessageReactionCount() Optional. Reactions to a message with anonymous reactions were changed. The bot must be an administrator in the chat and must explicitly specify "message_reaction_count" in the list of allowed_updates to receive these updates. The updates are grouped and can be sent with delay up to a few minutes.
 * @method InlineQuery getInlineQuery() Optional. New incoming inline query
 * @method ChosenInlineResult getChosenInlineResult() Optional. The result of an inline query that was chosen by a user and sent to their chat partner. Please see our documentation on the feedback collecting for details on how to enable these updates for your bot.
 * @method CallbackQuery getCallbackQuery() Optional. New incoming callback query
 * @method ShippingQuery getShippingQuery() Optional. New incoming shipping query. Only for invoices with flexible price.
 * @method PreCheckoutQuery getPreCheckoutQuery() Optional. New incoming pre-checkout query. Contains full information about checkout.
 * @method PaidMediaPurchased getPurchasedPaidMedia() Optional. A user purchased paid media with a non-empty payload sent by the bot in a non-channel chat
 * @method Poll getPoll() Optional. New poll state. Bots receive only updates about manually stopped polls and polls, which are sent by the bot.
 * @method PollAnswer getPollAnswer() Optional. A user changed their answer in a non-anonymous poll. Bots receive new votes only in polls that were sent by the bot itself.
 * @method ChatMemberUpdated getMyChatMember() Optional. The bot's chat member status was updated in a chat. For private chats, this update is received only when the bot is blocked or unblocked by the user.
 * @method ChatMemberUpdated getChatMember() Optional. A chat member's status was updated in a chat. The bot must be an administrator in the chat and must explicitly specify "chat_member" in the list of allowed_updates to receive these updates.
 * @method ChatJoinRequest getChatJoinRequest() Optional. A request to join the chat has been sent. The bot must have the can_invite_users administrator right in the chat to receive these updates.
 * @method ChatBoostUpdated getChatBoost() Optional. A chat boost was added or changed. The bot must be an administrator in the chat to receive these updates.
 * @method ChatBoostRemoved getRemovedChatBoost() Optional. A boost was removed from a chat. The bot must be an administrator in the chat to receive these updates.
 * @method ManagedBotUpdated getManagedBot() Optional. A new bot was created to be managed by the bot, or token or owner of a managed bot was changed
 * @method BotSubscriptionUpdated getSubscription() Optional. User payment subscription has changed
 *
 * @method bool isUpdateId()
 * @method bool isMessage()
 * @method bool isEditedMessage()
 * @method bool isChannelPost()
 * @method bool isEditedChannelPost()
 * @method bool isBusinessConnection()
 * @method bool isBusinessMessage()
 * @method bool isEditedBusinessMessage()
 * @method bool isDeletedBusinessMessages()
 * @method bool isGuestMessage()
 * @method bool isMessageReaction()
 * @method bool isMessageReactionCount()
 * @method bool isInlineQuery()
 * @method bool isChosenInlineResult()
 * @method bool isCallbackQuery()
 * @method bool isShippingQuery()
 * @method bool isPreCheckoutQuery()
 * @method bool isPurchasedPaidMedia()
 * @method bool isPoll()
 * @method bool isPollAnswer()
 * @method bool isMyChatMember()
 * @method bool isChatMember()
 * @method bool isChatJoinRequest()
 * @method bool isChatBoost()
 * @method bool isRemovedChatBoost()
 * @method bool isManagedBot()
 * @method bool isSubscription()
 *
 * @method $this setUpdateId()
 * @method $this setMessage()
 * @method $this setEditedMessage()
 * @method $this setChannelPost()
 * @method $this setEditedChannelPost()
 * @method $this setBusinessConnection()
 * @method $this setBusinessMessage()
 * @method $this setEditedBusinessMessage()
 * @method $this setDeletedBusinessMessages()
 * @method $this setGuestMessage()
 * @method $this setMessageReaction()
 * @method $this setMessageReactionCount()
 * @method $this setInlineQuery()
 * @method $this setChosenInlineResult()
 * @method $this setCallbackQuery()
 * @method $this setShippingQuery()
 * @method $this setPreCheckoutQuery()
 * @method $this setPurchasedPaidMedia()
 * @method $this setPoll()
 * @method $this setPollAnswer()
 * @method $this setMyChatMember()
 * @method $this setChatMember()
 * @method $this setChatJoinRequest()
 * @method $this setChatBoost()
 * @method $this setRemovedChatBoost()
 * @method $this setManagedBot()
 * @method $this setSubscription()
 *
 * @method $this unsetUpdateId()
 * @method $this unsetMessage()
 * @method $this unsetEditedMessage()
 * @method $this unsetChannelPost()
 * @method $this unsetEditedChannelPost()
 * @method $this unsetBusinessConnection()
 * @method $this unsetBusinessMessage()
 * @method $this unsetEditedBusinessMessage()
 * @method $this unsetDeletedBusinessMessages()
 * @method $this unsetGuestMessage()
 * @method $this unsetMessageReaction()
 * @method $this unsetMessageReactionCount()
 * @method $this unsetInlineQuery()
 * @method $this unsetChosenInlineResult()
 * @method $this unsetCallbackQuery()
 * @method $this unsetShippingQuery()
 * @method $this unsetPreCheckoutQuery()
 * @method $this unsetPurchasedPaidMedia()
 * @method $this unsetPoll()
 * @method $this unsetPollAnswer()
 * @method $this unsetMyChatMember()
 * @method $this unsetChatMember()
 * @method $this unsetChatJoinRequest()
 * @method $this unsetChatBoost()
 * @method $this unsetRemovedChatBoost()
 * @method $this unsetManagedBot()
 * @method $this unsetSubscription()
 *
 * @property int $update_id The update's unique identifier. Update identifiers start from a certain positive number and increase sequentially. This identifier becomes especially handy if you're using webhooks, since it allows you to ignore repeated updates or to restore the correct update sequence, should they get out of order. If there are no new updates for at least a week, then identifier of the next update will be chosen randomly instead of sequentially.
 * @property Message $message Optional. New incoming message of any kind - text, photo, sticker, etc.
 * @property Message $edited_message Optional. New version of a message that is known to the bot and was edited. This update may at times be triggered by changes to message fields that are either unavailable or not actively used by your bot.
 * @property Message $channel_post Optional. New incoming channel post of any kind - text, photo, sticker, etc.
 * @property Message $edited_channel_post Optional. New version of a channel post that is known to the bot and was edited. This update may at times be triggered by changes to message fields that are either unavailable or not actively used by your bot.
 * @property BusinessConnection $business_connection Optional. The bot was connected to or disconnected from a business account, or a user edited an existing connection with the bot
 * @property Message $business_message Optional. New message from a connected business account
 * @property Message $edited_business_message Optional. New version of a message from a connected business account
 * @property BusinessMessagesDeleted $deleted_business_messages Optional. Messages were deleted from a connected business account
 * @property Message $guest_message Optional. New guest message. The bot can use the field Message.guest_query_id and the method answerGuestQuery to send a message in response.
 * @property MessageReactionUpdated $message_reaction Optional. A reaction to a message was changed by a user. The bot must be an administrator in the chat and must explicitly specify "message_reaction" in the list of allowed_updates to receive these updates. The update isn't received for reactions set by bots.
 * @property MessageReactionCountUpdated $message_reaction_count Optional. Reactions to a message with anonymous reactions were changed. The bot must be an administrator in the chat and must explicitly specify "message_reaction_count" in the list of allowed_updates to receive these updates. The updates are grouped and can be sent with delay up to a few minutes.
 * @property InlineQuery $inline_query Optional. New incoming inline query
 * @property ChosenInlineResult $chosen_inline_result Optional. The result of an inline query that was chosen by a user and sent to their chat partner. Please see our documentation on the feedback collecting for details on how to enable these updates for your bot.
 * @property CallbackQuery $callback_query Optional. New incoming callback query
 * @property ShippingQuery $shipping_query Optional. New incoming shipping query. Only for invoices with flexible price.
 * @property PreCheckoutQuery $pre_checkout_query Optional. New incoming pre-checkout query. Contains full information about checkout.
 * @property PaidMediaPurchased $purchased_paid_media Optional. A user purchased paid media with a non-empty payload sent by the bot in a non-channel chat
 * @property Poll $poll Optional. New poll state. Bots receive only updates about manually stopped polls and polls, which are sent by the bot.
 * @property PollAnswer $poll_answer Optional. A user changed their answer in a non-anonymous poll. Bots receive new votes only in polls that were sent by the bot itself.
 * @property ChatMemberUpdated $my_chat_member Optional. The bot's chat member status was updated in a chat. For private chats, this update is received only when the bot is blocked or unblocked by the user.
 * @property ChatMemberUpdated $chat_member Optional. A chat member's status was updated in a chat. The bot must be an administrator in the chat and must explicitly specify "chat_member" in the list of allowed_updates to receive these updates.
 * @property ChatJoinRequest $chat_join_request Optional. A request to join the chat has been sent. The bot must have the can_invite_users administrator right in the chat to receive these updates.
 * @property ChatBoostUpdated $chat_boost Optional. A chat boost was added or changed. The bot must be an administrator in the chat to receive these updates.
 * @property ChatBoostRemoved $removed_chat_boost Optional. A boost was removed from a chat. The bot must be an administrator in the chat to receive these updates.
 * @property ManagedBotUpdated $managed_bot Optional. A new bot was created to be managed by the bot, or token or owner of a managed bot was changed
 * @property BotSubscriptionUpdated $subscription Optional. User payment subscription has changed
 *
 * @see https://core.telegram.org/bots/api#update
 */
class Update extends \Jeely\Nectar
{
    use InteractsWithUpdate;

    public const JSON_PROPERTY_MAP = [
        'update_id' => 'int',
        'message' => 'Types\Message',
        'edited_message' => 'Types\Message',
        'channel_post' => 'Types\Message',
        'edited_channel_post' => 'Types\Message',
        'business_connection' => 'Types\BusinessConnection',
        'business_message' => 'Types\Message',
        'edited_business_message' => 'Types\Message',
        'deleted_business_messages' => 'Types\BusinessMessagesDeleted',
        'guest_message' => 'Types\Message',
        'message_reaction' => 'Types\MessageReactionUpdated',
        'message_reaction_count' => 'Types\MessageReactionCountUpdated',
        'inline_query' => 'Types\InlineQuery',
        'chosen_inline_result' => 'Types\ChosenInlineResult',
        'callback_query' => 'Types\CallbackQuery',
        'shipping_query' => 'Types\ShippingQuery',
        'pre_checkout_query' => 'Types\PreCheckoutQuery',
        'purchased_paid_media' => 'Types\PaidMediaPurchased',
        'poll' => 'Types\Poll',
        'poll_answer' => 'Types\PollAnswer',
        'my_chat_member' => 'Types\ChatMemberUpdated',
        'chat_member' => 'Types\ChatMemberUpdated',
        'chat_join_request' => 'Types\ChatJoinRequest',
        'chat_boost' => 'Types\ChatBoostUpdated',
        'removed_chat_boost' => 'Types\ChatBoostRemoved',
        'managed_bot' => 'Types\ManagedBotUpdated',
        'subscription' => 'Types\BotSubscriptionUpdated',
    ];
}
