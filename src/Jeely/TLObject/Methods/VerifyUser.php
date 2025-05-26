<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class VerifyUser
* @description Verifies a user on behalf of the organization which is represented by the bot. Returns True on success.
*
*
* @param	int $user_id Unique identifier of the target user
* @param	string $custom_description Custom description for the verification; 0-70 characters. Must be empty if the organization isn't allowed to provide a custom verification description.
*
*
* @property	int $user_id Unique identifier of the target user
* @property	string $custom_description Custom description for the verification; 0-70 characters. Must be empty if the organization isn't allowed to provide a custom verification description.
*
*/

#[Casts(['bool'])]
class VerifyUser extends MethodDefinition implements MethodDefinitionInterface
{

}