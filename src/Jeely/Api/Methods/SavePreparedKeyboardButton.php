<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class SavePreparedKeyboardButton
 * @description Stores a keyboard button that can be used by a user within a Mini App. Returns a PreparedKeyboardButton object.
 *
 * @property int $user_id Unique identifier of the target user that can use the button
 * @property KeyboardButton $button A JSON-serialized object describing the button to be saved. The button must be of the type request_users, request_chat, or request_managed_bot.
 *
 * @see https://core.telegram.org/bots/api#savepreparedkeyboardbutton
 */
class SavePreparedKeyboardButton extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'PreparedKeyboardButton';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return PreparedKeyboardButton
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
