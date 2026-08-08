<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class AnswerChatJoinRequestQuery
 * @description Use this method to process a received chat join request query. Returns True on success.
 *
 * @property string $chat_join_request_query_id Unique identifier of the join request query
 * @property string $result Result of the query. Must be either “approve” to allow the user to join the chat, “decline” to disallow the user to join the chat, or “queue” to leave the decision to other administrators.
 *
 * @see https://core.telegram.org/bots/api#answerchatjoinrequestquery
 */
class AnswerChatJoinRequestQuery extends MethodDefinition implements MethodDefinitionInterface
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
