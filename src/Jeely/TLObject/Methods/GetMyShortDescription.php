<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\BotShortDescription;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class GetMyShortDescription
* @description Use this method to get the current bot short description for the given user language. Returns BotShortDescription on success.
*
*
* @param	string $language_code A two-letter ISO 639-1 language code or an empty string
*
*
* @property	string $language_code A two-letter ISO 639-1 language code or an empty string
*
*/

#[Casts(['Jeely\\TLObject\\Types\\BotShortDescription'])]
class GetMyShortDescription extends MethodDefinition implements MethodDefinitionInterface
{

}