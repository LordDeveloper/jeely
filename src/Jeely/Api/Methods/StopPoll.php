<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class StopPoll
 * @description Use this method to stop a poll which was sent by the bot. On success, the stopped Poll is returned.
 *
 * @property string $business_connection_id Unique identifier of the business connection on behalf of which the message to be edited was sent
 * @property int|string $chat_id Unique identifier for the target chat or username of the target bot, supergroup or channel in the format ＠username
 * @property int $message_id Identifier of the original message with the poll
 * @property InlineKeyboardMarkup $reply_markup A JSON-serialized object for a new message inline keyboard
 *
 * @see https://core.telegram.org/bots/api#stoppoll
 */
class StopPoll extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'Poll';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return Poll
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
