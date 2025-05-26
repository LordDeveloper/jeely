<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class RemoveBusinessAccountProfilePhoto
* @description Removes the current profile photo of a managed business account. Requires the can_edit_profile_photo business bot right. Returns True on success.
*
*
* @param	string $business_connection_id Unique identifier of the business connection
* @param	bool $is_public Pass True to remove the public photo, which is visible even if the main photo is hidden by the business account's privacy settings. After the main photo is removed, the previous profile photo (if present) becomes the main photo.
*
*
* @property	string $business_connection_id Unique identifier of the business connection
* @property	bool $is_public Pass True to remove the public photo, which is visible even if the main photo is hidden by the business account's privacy settings. After the main photo is removed, the previous profile photo (if present) becomes the main photo.
*
*/

#[Casts(['bool'])]
class RemoveBusinessAccountProfilePhoto extends MethodDefinition implements MethodDefinitionInterface
{

}