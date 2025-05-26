<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\BotName;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class GetMyName
* @description Use this method to get the current bot name for the given user language. Returns BotName on success.
*
*
* @param	string $language_code A two-letter ISO 639-1 language code or an empty string
*
*
* @property	string $language_code A two-letter ISO 639-1 language code or an empty string
*
*/

#[Casts(['Jeely\\TLObject\\Types\\BotName'])]
class GetMyName extends MethodDefinition implements MethodDefinitionInterface
{

}