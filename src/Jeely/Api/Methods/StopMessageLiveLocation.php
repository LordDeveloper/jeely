<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class StopMessageLiveLocation
 * @description Use this method to stop updating a live location message before live_period expires. On success, if the message is not an inline message, the edited Message is returned, otherwise True is returned.
 *
 * @property string $business_connection_id Unique identifier of the business connection on behalf of which the message to be edited was sent
 * @property int|string $chat_id Required if inline_message_id is not specified. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format ＠username.
 * @property int $message_id Required if inline_message_id is not specified. Identifier of the message with live location to stop.
 * @property string $inline_message_id Required if chat_id and message_id are not specified. Identifier of the inline message.
 * @property InlineKeyboardMarkup $reply_markup A JSON-serialized object for a new inline keyboard
 *
 * @see https://core.telegram.org/bots/api#stopmessagelivelocation
 */
class StopMessageLiveLocation extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'Message';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return Message|bool
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
