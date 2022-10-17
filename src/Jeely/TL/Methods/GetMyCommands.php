<?php

namespace Jeely\TL\Methods;

use Jeely\Telegram;
use Jeely\TL\Types\BotCommand;
use Jeely\TL\Types\BotCommandScope;

/**
 * @class GetMyCommands
 * @description Use this method to get the current list of the bot's commands for the given scope and user language. Returns an Array of BotCommand objects. If commands aren't set, an empty list is returned.
 *
 * @property BotCommandScope $scope A JSON-serialized object, describing scope of users. Defaults to BotCommandScopeDefault.
 * @property string $language_code A two-letter ISO 639-1 language code or an empty string
 *
 *
 * @see https://api.telegram.org/bots/api#getmycommands
 */
class GetMyCommands extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'BotCommand[]';

    /**
     * @var mixed $params The value that are taken in the constructor method as method parameters.
     */
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