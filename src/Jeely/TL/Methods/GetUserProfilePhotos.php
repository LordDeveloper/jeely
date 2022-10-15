<?php

namespace Jeely\TL\Methods;

use Jeely\TL\Types\UserProfilePhotos;

/**
 * @class GetUserProfilePhotos
 * @description Use this method to get a list of profile pictures for a user. Returns a UserProfilePhotos object.
 *
 * @property int $user_id Unique identifier of the target user
 * @property int $offset Sequential number of the first photo to be returned. By default, all photos are returned.
 * @property int $limit Limits the number of photos to be retrieved. Values between 1-100 are accepted. Defaults to 100.
 *
 * @see https://api.telegram.org/bots/api#getuserprofilephotos
 */
class GetUserProfilePhotos extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'UserProfilePhotos';

    /**
     * @var array $params The value that are taken in the constructor method as method parameters.
     */
    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return UserProfilePhotos
     */
    public function __invoke()
    {
        return $this->call();
    }
}