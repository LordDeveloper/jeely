<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class EditMessageChecklist
 * @description Use this method to edit a checklist on behalf of a connected business account. On success, the edited Message is returned.
 *
 * @property string $business_connection_id Unique identifier of the business connection on behalf of which the message will be sent
 * @property int|string $chat_id Unique identifier for the target chat or username of the target bot in the format ＠username
 * @property int $message_id Unique identifier for the target message
 * @property InputChecklist $checklist A JSON-serialized object for the new checklist
 * @property InlineKeyboardMarkup $reply_markup A JSON-serialized object for the new inline keyboard for the message
 *
 * @see https://core.telegram.org/bots/api#editmessagechecklist
 */
class EditMessageChecklist extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'Message';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return Message
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
