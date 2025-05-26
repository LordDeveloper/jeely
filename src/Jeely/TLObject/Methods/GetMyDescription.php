<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\BotDescription;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class GetMyDescription
* @description Use this method to get the current bot description for the given user language. Returns BotDescription on success.
*
*
* @param	string $language_code A two-letter ISO 639-1 language code or an empty string
*
*
* @property	string $language_code A two-letter ISO 639-1 language code or an empty string
*
*/

#[Casts(['Jeely\\TLObject\\Types\\BotDescription'])]
class GetMyDescription extends MethodDefinition implements MethodDefinitionInterface
{

}