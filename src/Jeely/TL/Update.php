<?php

namespace Jeely\TL;

use Jeely\LazyUpdates;
use Jeely\TL\Types\CallbackQuery;
use Jeely\TL\Types\ChatJoinRequest;
use Jeely\TL\Types\ChatMemberUpdated;
use Jeely\TL\Types\ChosenInlineResult;
use Jeely\TL\Types\InlineQuery;
use Jeely\TL\Types\Message;
use Jeely\TL\Types\Poll;
use Jeely\TL\Types\PollAnswer;
use Jeely\TL\Types\PreCheckoutQuery;
use Jeely\TL\Types\ShippingQuery;


/**
 * @class Update
 * @description This object represents an incoming update.At most one of the optional parameters can be present in any given update.
 *
 * @method int getUpdateId() The update's unique identifier. Update identifiers start from a certain positive number and increase sequentially. This ID becomes especially handy if you're using webhooks, since it allows you to ignore repeated updates or to restore the correct update sequence, should they get out of order. If there are no new updates for at least a week, then identifier of the next update will be chosen randomly instead of sequentially.
 * @method Message getMessage() Optional. New incoming message of any kind - text, photo, sticker, etc.
 * @method Message getEditedMessage() Optional. New version of a message that is known to the bot and was edited
 * @method Message getChannelPost() Optional. New incoming channel post of any kind - text, photo, sticker, etc.
 * @method Message getEditedChannelPost() Optional. New version of a channel post that is known to the bot and was edited
 * @method InlineQuery getInlineQuery() Optional. New incoming inline query
 * @method ChosenInlineResult getChosenInlineResult() Optional. The result of an inline query that was chosen by a user and sent to their chat partner. Please see our documentation on the feedback collecting for details on how to enable these updates for your bot.
 * @method CallbackQuery getCallbackQuery() Optional. New incoming callback query
 * @method ShippingQuery getShippingQuery() Optional. New incoming shipping query. Only for invoices with flexible price
 * @method PreCheckoutQuery getPreCheckoutQuery() Optional. New incoming pre-checkout query. Contains full information about checkout
 * @method Poll getPoll() Optional. New poll state. Bots receive only updates about stopped polls and polls, which are sent by the bot
 * @method PollAnswer getPollAnswer() Optional. A user changed their answer in a non-anonymous poll. Bots receive new votes only in polls that were sent by the bot itself.
 * @method ChatMemberUpdated getMyChatMember() Optional. The bot's chat member status was updated in a chat. For private chats, this update is received only when the bot is blocked or unblocked by the user.
 * @method ChatMemberUpdated getChatMember() Optional. A chat member's status was updated in a chat. The bot must be an administrator in the chat and must explicitly specify “chat_member” in the list of allowed_updates to receive these updates.
 * @method ChatJoinRequest getChatJoinRequest() Optional. A request to join the chat has been sent. The bot must have the can_invite_users administrator right in the chat to receive these updates.
 *
 * @method bool isUpdateId()
 * @method bool isMessage()
 * @method bool isEditedMessage()
 * @method bool isChannelPost()
 * @method bool isEditedChannelPost()
 * @method bool isInlineQuery()
 * @method bool isChosenInlineResult()
 * @method bool isCallbackQuery()
 * @method bool isShippingQuery()
 * @method bool isPreCheckoutQuery()
 * @method bool isPoll()
 * @method bool isPollAnswer()
 * @method bool isMyChatMember()
 * @method bool isChatMember()
 * @method bool isChatJoinRequest()
 *
 * @method $this setUpdateId()
 * @method $this setMessage()
 * @method $this setEditedMessage()
 * @method $this setChannelPost()
 * @method $this setEditedChannelPost()
 * @method $this setInlineQuery()
 * @method $this setChosenInlineResult()
 * @method $this setCallbackQuery()
 * @method $this setShippingQuery()
 * @method $this setPreCheckoutQuery()
 * @method $this setPoll()
 * @method $this setPollAnswer()
 * @method $this setMyChatMember()
 * @method $this setChatMember()
 * @method $this setChatJoinRequest()
 *
 * @method $this unsetUpdateId()
 * @method $this unsetMessage()
 * @method $this unsetEditedMessage()
 * @method $this unsetChannelPost()
 * @method $this unsetEditedChannelPost()
 * @method $this unsetInlineQuery()
 * @method $this unsetChosenInlineResult()
 * @method $this unsetCallbackQuery()
 * @method $this unsetShippingQuery()
 * @method $this unsetPreCheckoutQuery()
 * @method $this unsetPoll()
 * @method $this unsetPollAnswer()
 * @method $this unsetMyChatMember()
 * @method $this unsetChatMember()
 * @method $this unsetChatJoinRequest()
 *
 * @property int $update_id The update's unique identifier. Update identifiers start from a certain positive number and increase sequentially. This ID becomes especially handy if you're using webhooks, since it allows you to ignore repeated updates or to restore the correct update sequence, should they get out of order. If there are no new updates for at least a week, then identifier of the next update will be chosen randomly instead of sequentially.
 * @property Message $message Optional. New incoming message of any kind - text, photo, sticker, etc.
 * @property Message $edited_message Optional. New version of a message that is known to the bot and was edited
 * @property Message $channel_post Optional. New incoming channel post of any kind - text, photo, sticker, etc.
 * @property Message $edited_channel_post Optional. New version of a channel post that is known to the bot and was edited
 * @property InlineQuery $inline_query Optional. New incoming inline query
 * @property ChosenInlineResult $chosen_inline_result Optional. The result of an inline query that was chosen by a user and sent to their chat partner. Please see our documentation on the feedback collecting for details on how to enable these updates for your bot.
 * @property CallbackQuery $callback_query Optional. New incoming callback query
 * @property ShippingQuery $shipping_query Optional. New incoming shipping query. Only for invoices with flexible price
 * @property PreCheckoutQuery $pre_checkout_query Optional. New incoming pre-checkout query. Contains full information about checkout
 * @property Poll $poll Optional. New poll state. Bots receive only updates about stopped polls and polls, which are sent by the bot
 * @property PollAnswer $poll_answer Optional. A user changed their answer in a non-anonymous poll. Bots receive new votes only in polls that were sent by the bot itself.
 * @property ChatMemberUpdated $my_chat_member Optional. The bot's chat member status was updated in a chat. For private chats, this update is received only when the bot is blocked or unblocked by the user.
 * @property ChatMemberUpdated $chat_member Optional. A chat member's status was updated in a chat. The bot must be an administrator in the chat and must explicitly specify “chat_member” in the list of allowed_updates to receive these updates.
 * @property ChatJoinRequest $chat_join_request Optional. A request to join the chat has been sent. The bot must have the can_invite_users administrator right in the chat to receive these updates.
 *
 * @see https://core.telegram.org/bots/api#update
 */
class Update extends LazyUpdates
{
    const JSON_PROPERTY_MAP = [
        'update_id' => 'int',
        'message' => 'Types\Message',
        'edited_message' => 'Types\Message',
        'channel_post' => 'Types\Message',
        'edited_channel_post' => 'Types\Message',
        'inline_query' => 'Types\InlineQuery',
        'chosen_inline_result' => 'Types\ChosenInlineResult',
        'callback_query' => 'Types\CallbackQuery',
        'shipping_query' => 'Types\ShippingQuery',
        'pre_checkout_query' => 'Types\PreCheckoutQuery',
        'poll' => 'Types\Poll',
        'poll_answer' => 'Types\PollAnswer',
        'my_chat_member' => 'Types\ChatMemberUpdated',
        'chat_member' => 'Types\ChatMemberUpdated',
        'chat_join_request' => 'Types\ChatJoinRequest',
    ];
}