<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class GetMyName
 * @description Use this method to get the current bot name for the given user language. Returns BotName on success.
 *
 * @property string $language_code A two-letter ISO 639-1 language code or an empty string
 *
 * @see https://core.telegram.org/bots/api#getmyname
 */
class GetMyName extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'BotName';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return BotName
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
