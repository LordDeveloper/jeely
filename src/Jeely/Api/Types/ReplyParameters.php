<?php

namespace Jeely\Api\Types;

/**
 * @class ReplyParameters
 * @description Describes reply parameters for the message that is being sent.
 *
 * @method int getMessageId() Optional. Identifier of the message that will be replied to in the current chat, or in the chat chat_id if it is specified. Required if ephemeral_message_id isn't specified.
 * @method int|string getChatId() Optional. If the message to be replied to is from a different chat, unique identifier for the chat or username of the bot, supergroup or channel in the format ＠username. Not supported for messages sent on behalf of a business account, messages from channel direct messages chats and ephemeral messages.
 * @method int getEphemeralMessageId() Optional. Identifier of the incoming ephemeral message that will be replied to in the current chat. A reply to an ephemeral message must itself be an ephemeral message. An ephemeral message may only be replied to within 15 seconds of being sent. Required if message_id isn't specified.
 * @method bool getAllowSendingWithoutReply() Optional. Pass True if the message should be sent even if the specified message to be replied to is not found. Always False for replies in another chat or forum topic, and sent ephemeral messages. Always True for messages sent on behalf of a business account.
 * @method string getQuote() Optional. Quoted part of the message to be replied to; 0-1024 characters after entities parsing. The quote must be an exact substring of the message to be replied to, including bold, italic, underline, strikethrough, spoiler, custom_emoji, and date_time entities. The message will fail to send if the quote isn't found in the original message. Ignored for ephemeral messages.
 * @method string getQuoteParseMode() Optional. Mode for parsing entities in the quote. See formatting options for more details.
 * @method MessageEntity[] getQuoteEntities() Optional. A JSON-serialized list of special entities that appear in the quote. It can be specified instead of quote_parse_mode.
 * @method int getQuotePosition() Optional. Position of the quote in the original message in UTF-16 code units
 * @method int getChecklistTaskId() Optional. Identifier of the specific checklist task to be replied to
 * @method string getPollOptionId() Optional. Persistent identifier of the specific poll option to be replied to
 *
 * @method bool isMessageId()
 * @method bool isChatId()
 * @method bool isEphemeralMessageId()
 * @method bool isAllowSendingWithoutReply()
 * @method bool isQuote()
 * @method bool isQuoteParseMode()
 * @method bool isQuoteEntities()
 * @method bool isQuotePosition()
 * @method bool isChecklistTaskId()
 * @method bool isPollOptionId()
 *
 * @method $this setMessageId()
 * @method $this setChatId()
 * @method $this setEphemeralMessageId()
 * @method $this setAllowSendingWithoutReply()
 * @method $this setQuote()
 * @method $this setQuoteParseMode()
 * @method $this setQuoteEntities()
 * @method $this setQuotePosition()
 * @method $this setChecklistTaskId()
 * @method $this setPollOptionId()
 *
 * @method $this unsetMessageId()
 * @method $this unsetChatId()
 * @method $this unsetEphemeralMessageId()
 * @method $this unsetAllowSendingWithoutReply()
 * @method $this unsetQuote()
 * @method $this unsetQuoteParseMode()
 * @method $this unsetQuoteEntities()
 * @method $this unsetQuotePosition()
 * @method $this unsetChecklistTaskId()
 * @method $this unsetPollOptionId()
 *
 * @property int $message_id Optional. Identifier of the message that will be replied to in the current chat, or in the chat chat_id if it is specified. Required if ephemeral_message_id isn't specified.
 * @property int|string $chat_id Optional. If the message to be replied to is from a different chat, unique identifier for the chat or username of the bot, supergroup or channel in the format ＠username. Not supported for messages sent on behalf of a business account, messages from channel direct messages chats and ephemeral messages.
 * @property int $ephemeral_message_id Optional. Identifier of the incoming ephemeral message that will be replied to in the current chat. A reply to an ephemeral message must itself be an ephemeral message. An ephemeral message may only be replied to within 15 seconds of being sent. Required if message_id isn't specified.
 * @property bool $allow_sending_without_reply Optional. Pass True if the message should be sent even if the specified message to be replied to is not found. Always False for replies in another chat or forum topic, and sent ephemeral messages. Always True for messages sent on behalf of a business account.
 * @property string $quote Optional. Quoted part of the message to be replied to; 0-1024 characters after entities parsing. The quote must be an exact substring of the message to be replied to, including bold, italic, underline, strikethrough, spoiler, custom_emoji, and date_time entities. The message will fail to send if the quote isn't found in the original message. Ignored for ephemeral messages.
 * @property string $quote_parse_mode Optional. Mode for parsing entities in the quote. See formatting options for more details.
 * @property MessageEntity[] $quote_entities Optional. A JSON-serialized list of special entities that appear in the quote. It can be specified instead of quote_parse_mode.
 * @property int $quote_position Optional. Position of the quote in the original message in UTF-16 code units
 * @property int $checklist_task_id Optional. Identifier of the specific checklist task to be replied to
 * @property string $poll_option_id Optional. Persistent identifier of the specific poll option to be replied to
 *
 * @see https://core.telegram.org/bots/api#replyparameters
 */
class ReplyParameters extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'message_id' => 'int',
        'chat_id' => 'int',
        'ephemeral_message_id' => 'int',
        'allow_sending_without_reply' => 'bool',
        'quote' => 'string',
        'quote_parse_mode' => 'string',
        'quote_entities' => 'MessageEntity[]',
        'quote_position' => 'int',
        'checklist_task_id' => 'int',
        'poll_option_id' => 'string',
    ];
}
