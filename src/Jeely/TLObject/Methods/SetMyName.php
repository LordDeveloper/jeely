<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class SetMyName
* @description Use this method to change the bot's name. Returns True on success.
*
*
* @param	string $name New bot name; 0-64 characters. Pass an empty string to remove the dedicated name for the given language.
* @param	string $language_code A two-letter ISO 639-1 language code. If empty, the name will be shown to all users for whose language there is no dedicated name.
*
*
* @property	string $name New bot name; 0-64 characters. Pass an empty string to remove the dedicated name for the given language.
* @property	string $language_code A two-letter ISO 639-1 language code. If empty, the name will be shown to all users for whose language there is no dedicated name.
*
*/

#[Casts(['bool'])]
class SetMyName extends MethodDefinition implements MethodDefinitionInterface
{

}