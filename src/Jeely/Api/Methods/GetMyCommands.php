<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class GetMyCommands
 * @description Use this method to get the current list of the bot's commands for the given scope and user language. Returns an Array of BotCommand objects. If commands aren't set, an empty list is returned.
 *
 * @property BotCommandScope $scope A JSON-serialized object, describing scope of users. Defaults to BotCommandScopeDefault.
 * @property string $language_code A two-letter ISO 639-1 language code or an empty string
 *
 * @see https://core.telegram.org/bots/api#getmycommands
 */
class GetMyCommands extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'BotCommand[]';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return BotCommand[]
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
