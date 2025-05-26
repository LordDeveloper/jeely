<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\InputProfilePhoto;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class SetBusinessAccountProfilePhoto
* @description Changes the profile photo of a managed business account. Requires the can_edit_profile_photo business bot right. Returns True on success.
*
*
* @param	string $business_connection_id Unique identifier of the business connection
* @param	InputProfilePhoto $photo The new profile photo to set
* @param	bool $is_public Pass True to set the public photo, which will be visible even if the main photo is hidden by the business account's privacy settings. An account can have only one public photo.
*
*
* @property	string $business_connection_id Unique identifier of the business connection
* @property	InputProfilePhoto $photo The new profile photo to set
* @property	bool $is_public Pass True to set the public photo, which will be visible even if the main photo is hidden by the business account's privacy settings. An account can have only one public photo.
*
*/

#[Casts(['bool'])]
class SetBusinessAccountProfilePhoto extends MethodDefinition implements MethodDefinitionInterface
{

}