<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class GetMyShortDescription
 * @description Use this method to get the current bot short description for the given user language. Returns BotShortDescription on success.
 *
 * @property string $language_code A two-letter ISO 639-1 language code or an empty string
 *
 * @see https://core.telegram.org/bots/api#getmyshortdescription
 */
class GetMyShortDescription extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'BotShortDescription';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return BotShortDescription
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
