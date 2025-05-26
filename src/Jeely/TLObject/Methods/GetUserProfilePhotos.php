<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\UserProfilePhotos;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class GetUserProfilePhotos
* @description Use this method to get a list of profile pictures for a user. Returns a UserProfilePhotos object.
*
*
* @param	int $user_id Unique identifier of the target user
* @param	int $offset Sequential number of the first photo to be returned. By default, all photos are returned.
* @param	int $limit Limits the number of photos to be retrieved. Values between 1-100 are accepted. Defaults to 100.
*
*
* @property	int $user_id Unique identifier of the target user
* @property	int $offset Sequential number of the first photo to be returned. By default, all photos are returned.
* @property	int $limit Limits the number of photos to be retrieved. Values between 1-100 are accepted. Defaults to 100.
*
*/

#[Casts(['Jeely\\TLObject\\Types\\UserProfilePhotos'])]
class GetUserProfilePhotos extends MethodDefinition implements MethodDefinitionInterface
{

}