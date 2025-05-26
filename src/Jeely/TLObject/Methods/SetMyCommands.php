<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\BotCommand;
use Jeely\TLObject\Types\BotCommandScope;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class SetMyCommands
* @description Use this method to change the list of the bot's commands. See this manual for more details about bot commands. Returns True on success.
*
*
* @param	BotCommand[] $commands A JSON-serialized list of bot commands to be set as the list of the bot's commands. At most 100 commands can be specified.
* @param	BotCommandScope $scope A JSON-serialized object, describing scope of users for which the commands are relevant. Defaults to BotCommandScopeDefault.
* @param	string $language_code A two-letter ISO 639-1 language code. If empty, commands will be applied to all users from the given scope, for whose language there are no dedicated commands
*
*
* @property	BotCommand[] $commands A JSON-serialized list of bot commands to be set as the list of the bot's commands. At most 100 commands can be specified.
* @property	BotCommandScope $scope A JSON-serialized object, describing scope of users for which the commands are relevant. Defaults to BotCommandScopeDefault.
* @property	string $language_code A two-letter ISO 639-1 language code. If empty, commands will be applied to all users from the given scope, for whose language there are no dedicated commands
*
*/

#[Casts(['bool'])]
class SetMyCommands extends MethodDefinition implements MethodDefinitionInterface
{

}