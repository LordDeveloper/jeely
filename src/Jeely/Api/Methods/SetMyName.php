<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class SetMyName
 * @description Use this method to change the bot's name. Returns True on success.
 *
 * @property string $name New bot name; 0-64 characters. Pass an empty string to remove the dedicated name for the given language.
 * @property string $language_code A two-letter ISO 639-1 language code. If empty, the name will be shown to all users for whose language there is no dedicated name.
 *
 * @see https://core.telegram.org/bots/api#setmyname
 */
class SetMyName extends MethodDefinition implements MethodDefinitionInterface
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
