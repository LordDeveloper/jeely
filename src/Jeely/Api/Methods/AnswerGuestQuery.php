<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class AnswerGuestQuery
 * @description Use this method to reply to a received guest message. On success, a SentGuestMessage object is returned.
 *
 * @property string $guest_query_id Unique identifier for the query to be answered
 * @property InlineQueryResult $result A JSON-serialized object describing the message to be sent
 *
 * @see https://core.telegram.org/bots/api#answerguestquery
 */
class AnswerGuestQuery extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'SentGuestMessage';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return SentGuestMessage
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
