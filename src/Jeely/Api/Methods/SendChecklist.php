<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class SendChecklist
 * @description Use this method to send a checklist on behalf of a connected business account. On success, the sent Message is returned.
 *
 * @property string $business_connection_id Unique identifier of the business connection on behalf of which the message will be sent
 * @property int|string $chat_id Unique identifier for the target chat or username of the target bot in the format ＠username
 * @property InputChecklist $checklist A JSON-serialized object for the checklist to send
 * @property bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
 * @property bool $protect_content Protects the contents of the sent message from forwarding and saving
 * @property string $message_effect_id Unique identifier of the message effect to be added to the message
 * @property ReplyParameters $reply_parameters A JSON-serialized object for description of the message to reply to
 * @property InlineKeyboardMarkup $reply_markup A JSON-serialized object for an inline keyboard
 *
 * @see https://core.telegram.org/bots/api#sendchecklist
 */
class SendChecklist extends MethodDefinition implements MethodDefinitionInterface
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
