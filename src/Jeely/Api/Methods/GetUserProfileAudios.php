<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class GetUserProfileAudios
 * @description Use this method to get a list of profile audios for a user. Returns a UserProfileAudios object.
 *
 * @property int $user_id Unique identifier of the target user
 * @property int $offset Sequential number of the first audio to be returned. By default, all audios are returned.
 * @property int $limit Limits the number of audios to be retrieved. Values between 1-100 are accepted. Defaults to 100.
 *
 * @see https://core.telegram.org/bots/api#getuserprofileaudios
 */
class GetUserProfileAudios extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'UserProfileAudios';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return UserProfileAudios
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
