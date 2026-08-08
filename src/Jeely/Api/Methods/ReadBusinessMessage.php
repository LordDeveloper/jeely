<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class ReadBusinessMessage
 * @description Marks incoming message as read on behalf of a business account. Requires the can_read_messages business bot right. Returns True on success.
 *
 * @property string $business_connection_id Unique identifier of the business connection on behalf of which to read the message
 * @property int $chat_id Unique identifier of the chat in which the message was received. The chat must have been active in the last 24 hours.
 * @property int $message_id Unique identifier of the message to mark as read
 *
 * @see https://core.telegram.org/bots/api#readbusinessmessage
 */
class ReadBusinessMessage extends MethodDefinition implements MethodDefinitionInterface
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
