<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class DeleteBusinessMessages
 * @description Delete messages on behalf of a business account. Requires the can_delete_sent_messages business bot right to delete messages sent by the bot itself, or the can_delete_all_messages business bot right to delete any message. Returns True on success.
 *
 * @property string $business_connection_id Unique identifier of the business connection on behalf of which to delete the messages
 * @property int[] $message_ids A JSON-serialized list of 1-100 identifiers of messages to delete. All messages must be from the same chat. See deleteMessage for limitations on which messages can be deleted.
 *
 * @see https://core.telegram.org/bots/api#deletebusinessmessages
 */
class DeleteBusinessMessages extends MethodDefinition implements MethodDefinitionInterface
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
