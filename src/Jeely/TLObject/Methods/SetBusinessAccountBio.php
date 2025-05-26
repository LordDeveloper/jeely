<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class SetBusinessAccountBio
* @description Changes the bio of a managed business account. Requires the can_change_bio business bot right. Returns True on success.
*
*
* @param	string $business_connection_id Unique identifier of the business connection
* @param	string $bio The new value of the bio for the business account; 0-140 characters
*
*
* @property	string $business_connection_id Unique identifier of the business connection
* @property	string $bio The new value of the bio for the business account; 0-140 characters
*
*/

#[Casts(['bool'])]
class SetBusinessAccountBio extends MethodDefinition implements MethodDefinitionInterface
{

}