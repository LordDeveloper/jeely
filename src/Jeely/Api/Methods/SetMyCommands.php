<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class SetMyCommands
 * @description Use this method to change the list of the bot's commands. See this manual for more details about bot commands. Returns True on success.
 *
 * @property BotCommand[] $commands A JSON-serialized list of bot commands to be set as the list of the bot's commands. At most 100 commands can be specified.
 * @property BotCommandScope $scope A JSON-serialized object, describing scope of users for which the commands are relevant. Defaults to BotCommandScopeDefault.
 * @property string $language_code A two-letter ISO 639-1 language code. If empty, commands will be applied to all users from the given scope, for whose language there are no dedicated commands.
 *
 * @see https://core.telegram.org/bots/api#setmycommands
 */
class SetMyCommands extends MethodDefinition implements MethodDefinitionInterface
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
