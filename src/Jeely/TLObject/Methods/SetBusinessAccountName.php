<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class SetBusinessAccountName
* @description Changes the first and last name of a managed business account. Requires the can_change_name business bot right. Returns True on success.
*
*
* @param	string $business_connection_id Unique identifier of the business connection
* @param	string $first_name The new value of the first name for the business account; 1-64 characters
* @param	string $last_name The new value of the last name for the business account; 0-64 characters
*
*
* @property	string $business_connection_id Unique identifier of the business connection
* @property	string $first_name The new value of the first name for the business account; 1-64 characters
* @property	string $last_name The new value of the last name for the business account; 0-64 characters
*
*/

#[Casts(['bool'])]
class SetBusinessAccountName extends MethodDefinition implements MethodDefinitionInterface
{

}