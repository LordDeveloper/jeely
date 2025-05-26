<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\User;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class GetMe
* @description A simple method for testing your bot's authentication token. Requires no parameters. Returns basic information about the bot in form of a User object.
*
*
*
*
*
*/

#[Casts(['Jeely\\TLObject\\Types\\User'])]
class GetMe extends MethodDefinition implements MethodDefinitionInterface
{

}