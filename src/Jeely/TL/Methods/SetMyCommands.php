<?php

namespace Jeely\TL\Methods;

use Jeely\TL\Types\BotCommand;
use Jeely\TL\Types\BotCommandScope;

/**
 * @class SetMyCommands
 * @description Use this method to change the list of the bot's commands. See https://core.telegram.org/bots#commands for more details about bot commands. Returns True on success.
 *
 * @property BotCommand[] $commands A JSON-serialized list of bot commands to be set as the list of the bot's commands. At most 100 commands can be specified.
 * @property BotCommandScope $scope A JSON-serialized object, describing scope of users for which the commands are relevant. Defaults to BotCommandScopeDefault.
 * @property string $language_code A two-letter ISO 639-1 language code. If empty, commands will be applied to all users from the given scope, for whose language there are no dedicated commands
 *
 * @see https://api.telegram.org/bots/api#setmycommands
 */
class SetMyCommands extends MethodDefinition implements MethodDefinitionInterface
{
    public string $castsTo = 'bool';

    /**
     * @var BotCommand[] $commands A JSON-serialized list of bot commands to be set as the list of the bot's commands. At most 100 commands can be specified.
     */
    public array $commands;

    /**
     * @var string $language_code A two-letter ISO 639-1 language code. If empty, commands will be applied to all users from the given scope, for whose language there are no dedicated commands
     */
    public string $language_code = '';

    /**
     * @var mixed $scope A JSON-serialized object, describing scope of users for which the commands are relevant. Defaults to BotCommandScopeDefault.
     */
    public $scope = 'botcommandscopedefault';

    /**
     * @var array $vars The value that are taken in the constructor method as method parameters.
     */
    public function __construct(public array $vars = [])
    {
    }

    /**
     * @return bool
     */
    public function __invoke()
    {
        return $this->call();
    }
}