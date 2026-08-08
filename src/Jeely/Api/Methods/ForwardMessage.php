<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class ForwardMessage
 * @description Use this method to forward messages of any kind. Service messages and messages with protected content can't be forwarded. On success, the sent Message is returned.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target bot, supergroup or channel in the format ＠username
 * @property int $message_thread_id Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
 * @property int $direct_messages_topic_id Identifier of the direct messages topic to which the message will be forwarded; required if the message is forwarded to a direct messages chat
 * @property int|string $from_chat_id Unique identifier for the chat where the original message was sent (or username of the target bot, supergroup or channel in the format ＠username)
 * @property int $video_start_timestamp New start timestamp for the forwarded video in the message
 * @property bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
 * @property bool $protect_content Protects the contents of the forwarded message from forwarding and saving
 * @property string $message_effect_id Unique identifier of the message effect to be added to the message; only available when forwarding to private chats
 * @property SuggestedPostParameters $suggested_post_parameters A JSON-serialized object containing the parameters of the suggested post to send; for direct messages chats only
 * @property int $message_id Message identifier in the chat specified in from_chat_id
 *
 * @see https://core.telegram.org/bots/api#forwardmessage
 */
class ForwardMessage extends MethodDefinition implements MethodDefinitionInterface
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
