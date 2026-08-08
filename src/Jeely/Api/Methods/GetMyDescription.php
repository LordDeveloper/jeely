<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class GetMyDescription
 * @description Use this method to get the current bot description for the given user language. Returns BotDescription on success.
 *
 * @property string $language_code A two-letter ISO 639-1 language code or an empty string
 *
 * @see https://core.telegram.org/bots/api#getmydescription
 */
class GetMyDescription extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'BotDescription';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return BotDescription
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
