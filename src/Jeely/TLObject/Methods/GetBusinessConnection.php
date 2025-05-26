<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\BusinessConnection;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class GetBusinessConnection
* @description Use this method to get information about the connection of the bot with a business account. Returns a BusinessConnection object on success.
*
*
* @param	string $business_connection_id Unique identifier of the business connection
*
*
* @property	string $business_connection_id Unique identifier of the business connection
*
*/

#[Casts(['Jeely\\TLObject\\Types\\BusinessConnection'])]
class GetBusinessConnection extends MethodDefinition implements MethodDefinitionInterface
{

}