<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class SendDice
 * @description Use this method to send an animated emoji that will display a random value. On success, the sent Message is returned.
 *
 * @property string $business_connection_id Unique identifier of the business connection on behalf of which the message will be sent
 * @property int|string $chat_id Unique identifier for the target chat or username of the target bot, supergroup or channel in the format ＠username
 * @property int $message_thread_id Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
 * @property int $direct_messages_topic_id Identifier of the direct messages topic to which the message will be sent; required if the message is sent to a direct messages chat
 * @property string $emoji Emoji on which the dice throw animation is based. Currently, must be one of “”, “”, “”, “”, “”, or “”. Dice can have values 1-6 for “”, “” and “”, values 1-5 for “” and “”, and values 1-64 for “”. Defaults to “”.
 * @property bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
 * @property bool $protect_content Protects the contents of the sent message from forwarding
 * @property bool $allow_paid_broadcast Pass True to allow up to 1000 messages per second, ignoring broadcasting limits for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance.
 * @property string $message_effect_id Unique identifier of the message effect to be added to the message; for private chats only
 * @property SuggestedPostParameters $suggested_post_parameters A JSON-serialized object containing the parameters of the suggested post to send; for direct messages chats only. If the message is sent as a reply to another suggested post, then that suggested post is automatically declined.
 * @property ReplyParameters $reply_parameters Description of the message to reply to
 * @property InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove a reply keyboard or to force a reply from the user.
 *
 * @see https://core.telegram.org/bots/api#senddice
 */
class SendDice extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'Message';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return Message
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
