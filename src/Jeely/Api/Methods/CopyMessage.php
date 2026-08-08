<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class CopyMessage
 * @description Use this method to copy messages of any kind. Service messages, paid media messages, giveaway messages, giveaway winners messages, and invoice messages can't be copied. A quiz poll can be copied only if the value of the field correct_option_ids is known to the bot. The method is analogous to the method forwardMessage, but the copied message doesn't have a link to the original message. Returns the MessageId of the sent message on success.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target bot, supergroup or channel in the format ＠username
 * @property int $message_thread_id Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
 * @property int $direct_messages_topic_id Identifier of the direct messages topic to which the message will be sent; required if the message is sent to a direct messages chat
 * @property int|string $from_chat_id Unique identifier for the chat where the original message was sent (or username of the target bot, supergroup or channel in the format ＠username)
 * @property int $message_id Message identifier in the chat specified in from_chat_id
 * @property int $video_start_timestamp New start timestamp for the copied video in the message
 * @property string $caption New caption for media, 0-1024 characters after entities parsing. If not specified, the original caption is kept.
 * @property string $parse_mode Mode for parsing entities in the new caption. See formatting options for more details.
 * @property MessageEntity[] $caption_entities A JSON-serialized list of special entities that appear in the new caption, which can be specified instead of parse_mode
 * @property bool $show_caption_above_media Pass True if the caption must be shown above the message media. Ignored if a new caption isn't specified.
 * @property bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
 * @property bool $protect_content Protects the contents of the sent message from forwarding and saving
 * @property bool $allow_paid_broadcast Pass True to allow up to 1000 messages per second, ignoring broadcasting limits for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance.
 * @property string $message_effect_id Unique identifier of the message effect to be added to the message; only available when copying to private chats
 * @property SuggestedPostParameters $suggested_post_parameters A JSON-serialized object containing the parameters of the suggested post to send; for direct messages chats only. If the message is sent as a reply to another suggested post, then that suggested post is automatically declined.
 * @property ReplyParameters $reply_parameters Description of the message to reply to
 * @property InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove a reply keyboard or to force a reply from the user.
 *
 * @see https://core.telegram.org/bots/api#copymessage
 */
class CopyMessage extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'MessageId';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return MessageId
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
