<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class SetMyDescription
* @description Use this method to change the bot's description, which is shown in the chat with the bot if the chat is empty. Returns True on success.
*
*
* @param	string $description New bot description; 0-512 characters. Pass an empty string to remove the dedicated description for the given language.
* @param	string $language_code A two-letter ISO 639-1 language code. If empty, the description will be applied to all users for whose language there is no dedicated description.
*
*
* @property	string $description New bot description; 0-512 characters. Pass an empty string to remove the dedicated description for the given language.
* @property	string $language_code A two-letter ISO 639-1 language code. If empty, the description will be applied to all users for whose language there is no dedicated description.
*
*/

#[Casts(['bool'])]
class SetMyDescription extends MethodDefinition implements MethodDefinitionInterface
{

}