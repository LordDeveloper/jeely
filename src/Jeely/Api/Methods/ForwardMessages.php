<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class ForwardMessages
 * @description Use this method to forward multiple messages of any kind. If some of the specified messages can't be found or forwarded, they are skipped. Service messages and messages with protected content can't be forwarded. Album grouping is kept for forwarded messages. On success, an Array of MessageId of the sent messages is returned.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target bot, supergroup or channel in the format ＠username
 * @property int $message_thread_id Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
 * @property int $direct_messages_topic_id Identifier of the direct messages topic to which the messages will be forwarded; required if the messages are forwarded to a direct messages chat
 * @property int|string $from_chat_id Unique identifier for the chat where the original messages were sent (or username of the target bot, supergroup or channel in the format ＠username)
 * @property int[] $message_ids A JSON-serialized list of 1-100 identifiers of messages in the chat from_chat_id to forward. The identifiers must be specified in a strictly increasing order.
 * @property bool $disable_notification Sends the messages silently. Users will receive a notification with no sound.
 * @property bool $protect_content Protects the contents of the forwarded messages from forwarding and saving
 *
 * @see https://core.telegram.org/bots/api#forwardmessages
 */
class ForwardMessages extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'MessageId[]';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return MessageId[]
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
