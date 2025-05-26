<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\Gifts;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class GetAvailableGifts
* @description Returns the list of gifts that can be sent by the bot to users and channel chats. Requires no parameters. Returns a Gifts object.
*
*
*
*
*
*/

#[Casts(['Jeely\\TLObject\\Types\\Gifts'])]
class GetAvailableGifts extends MethodDefinition implements MethodDefinitionInterface
{

}