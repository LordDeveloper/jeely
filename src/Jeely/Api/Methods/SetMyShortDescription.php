<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class SetMyShortDescription
 * @description Use this method to change the bot's short description, which is shown on the bot's profile page and is sent together with the link when users share the bot. Returns True on success.
 *
 * @property string $short_description New short description for the bot; 0-120 characters. Pass an empty string to remove the dedicated short description for the given language.
 * @property string $language_code A two-letter ISO 639-1 language code. If empty, the short description will be applied to all users for whose language there is no dedicated short description.
 *
 * @see https://core.telegram.org/bots/api#setmyshortdescription
 */
class SetMyShortDescription extends MethodDefinition implements MethodDefinitionInterface
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
