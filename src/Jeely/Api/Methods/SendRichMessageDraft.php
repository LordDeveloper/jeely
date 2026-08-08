<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class SendRichMessageDraft
 * @description Use this method to stream a partial rich message to a user while the message is being generated. Note that the streamed draft is ephemeral and acts as a temporary 30-second preview - once the output is finalized, you must call sendRichMessage with the complete message to persist it in the user's chat. Returns True on success.
 *
 * @property int $chat_id Unique identifier for the target private chat
 * @property int $message_thread_id Unique identifier for the target message thread
 * @property int $draft_id Unique identifier of the message draft; must be non-zero. Changes to drafts with the same identifier are animated.
 * @property InputRichMessage $rich_message The partial message to be streamed. Direct upload of new files isn't supported.
 *
 * @see https://core.telegram.org/bots/api#sendrichmessagedraft
 */
class SendRichMessageDraft extends MethodDefinition implements MethodDefinitionInterface
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
