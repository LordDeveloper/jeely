<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class SetBusinessAccountUsername
* @description Changes the username of a managed business account. Requires the can_change_username business bot right. Returns True on success.
*
*
* @param	string $business_connection_id Unique identifier of the business connection
* @param	string $username The new value of the username for the business account; 0-32 characters
*
*
* @property	string $business_connection_id Unique identifier of the business connection
* @property	string $username The new value of the username for the business account; 0-32 characters
*
*/

#[Casts(['bool'])]
class SetBusinessAccountUsername extends MethodDefinition implements MethodDefinitionInterface
{

}