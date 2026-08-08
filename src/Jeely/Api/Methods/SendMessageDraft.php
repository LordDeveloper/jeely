<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class SendMessageDraft
 * @description Use this method to stream a partial message to a user while the message is being generated. Note that the streamed draft is ephemeral and acts as a temporary 30-second preview - once the output is finalized, you must call sendMessage with the complete message to persist it in the user's chat. Returns True on success.
 *
 * @property int $chat_id Unique identifier for the target private chat
 * @property int $message_thread_id Unique identifier for the target message thread
 * @property int $draft_id Unique identifier of the message draft; must be non-zero. Changes to drafts with the same identifier are animated.
 * @property string $text Text of the message to be sent, 0-4096 characters after entities parsing. Pass an empty text to show a “Thinking…” placeholder.
 * @property string $parse_mode Mode for parsing entities in the message text. See formatting options for more details.
 * @property MessageEntity[] $entities A JSON-serialized list of special entities that appear in message text, which can be specified instead of parse_mode
 *
 * @see https://core.telegram.org/bots/api#sendmessagedraft
 */
class SendMessageDraft extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'bool';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return bool
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
