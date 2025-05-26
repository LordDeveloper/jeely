<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\BotCommandScope;
use Jeely\TLObject\Types\BotCommand;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class GetMyCommands
* @description Use this method to get the current list of the bot's commands for the given scope and user language. Returns an Array of BotCommand objects. If commands aren't set, an empty list is returned.
*
*
* @param	BotCommandScope $scope A JSON-serialized object, describing scope of users. Defaults to BotCommandScopeDefault.
* @param	string $language_code A two-letter ISO 639-1 language code or an empty string
*
*
* @property	BotCommandScope $scope A JSON-serialized object, describing scope of users. Defaults to BotCommandScopeDefault.
* @property	string $language_code A two-letter ISO 639-1 language code or an empty string
*
*/

#[Casts(['Jeely\\TLObject\\Types\\BotCommand[]'])]
class GetMyCommands extends MethodDefinition implements MethodDefinitionInterface
{

}