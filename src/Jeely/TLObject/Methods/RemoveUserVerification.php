<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class RemoveUserVerification
* @description Removes verification from a user who is currently verified on behalf of the organization represented by the bot. Returns True on success.
*
*
* @param	int $user_id Unique identifier of the target user
*
*
* @property	int $user_id Unique identifier of the target user
*
*/

#[Casts(['bool'])]
class RemoveUserVerification extends MethodDefinition implements MethodDefinitionInterface
{

}