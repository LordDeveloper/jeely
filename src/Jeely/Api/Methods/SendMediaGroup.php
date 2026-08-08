<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class SendMediaGroup
 * @description Use this method to send a group of photos, live photos, videos, documents or audios as an album. Documents and audio files can be only grouped in an album with messages of the same type. On success, an Array of Message objects that were sent is returned.
 *
 * @property string $business_connection_id Unique identifier of the business connection on behalf of which the message will be sent
 * @property int|string $chat_id Unique identifier for the target chat or username of the target bot, supergroup or channel in the format ＠username
 * @property int $message_thread_id Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
 * @property int $direct_messages_topic_id Identifier of the direct messages topic to which the messages will be sent; required if the messages are sent to a direct messages chat
 * @property InputMediaAudio, InputMediaDocument, InputMediaLivePhoto, InputMediaPhoto, InputMediaVideo[] $media A JSON-serialized Array describing messages to be sent, must include 2-10 items
 * @property bool $disable_notification Sends messages silently. Users will receive a notification with no sound.
 * @property bool $protect_content Protects the contents of the sent messages from forwarding and saving
 * @property bool $allow_paid_broadcast Pass True to allow up to 1000 messages per second, ignoring broadcasting limits for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance.
 * @property string $message_effect_id Unique identifier of the message effect to be added to the message; for private chats only
 * @property ReplyParameters $reply_parameters Description of the message to reply to
 *
 * @see https://core.telegram.org/bots/api#sendmediagroup
 */
class SendMediaGroup extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'Message[]';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return Message[]
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
