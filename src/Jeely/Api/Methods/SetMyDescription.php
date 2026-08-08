<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class SetMyDescription
 * @description Use this method to change the bot's description, which is shown in the chat with the bot if the chat is empty. Returns True on success.
 *
 * @property string $description New bot description; 0-512 characters. Pass an empty string to remove the dedicated description for the given language.
 * @property string $language_code A two-letter ISO 639-1 language code. If empty, the description will be applied to all users for whose language there is no dedicated description.
 *
 * @see https://core.telegram.org/bots/api#setmydescription
 */
class SetMyDescription extends MethodDefinition implements MethodDefinitionInterface
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
