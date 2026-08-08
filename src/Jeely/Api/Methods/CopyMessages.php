<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class CopyMessages
 * @description Use this method to copy messages of any kind. If some of the specified messages can't be found or copied, they are skipped. Service messages, paid media messages, giveaway messages, giveaway winners messages, and invoice messages can't be copied. A quiz poll can be copied only if the value of the field correct_option_ids is known to the bot. The method is analogous to the method forwardMessages, but the copied messages don't have a link to the original message. Album grouping is kept for copied messages. On success, an Array of MessageId of the sent messages is returned.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target bot, supergroup or channel in the format ＠username
 * @property int $message_thread_id Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
 * @property int $direct_messages_topic_id Identifier of the direct messages topic to which the messages will be sent; required if the messages are sent to a direct messages chat
 * @property int|string $from_chat_id Unique identifier for the chat where the original messages were sent (or username of the target bot, supergroup or channel in the format ＠username)
 * @property int[] $message_ids A JSON-serialized list of 1-100 identifiers of messages in the chat from_chat_id to copy. The identifiers must be specified in a strictly increasing order.
 * @property bool $disable_notification Sends the messages silently. Users will receive a notification with no sound.
 * @property bool $protect_content Protects the contents of the sent messages from forwarding and saving
 * @property bool $remove_caption Pass True to copy the messages without their captions
 *
 * @see https://core.telegram.org/bots/api#copymessages
 */
class CopyMessages extends MethodDefinition implements MethodDefinitionInterface
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
