<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class RemoveUserVerification
 * @description Removes verification from a user who is currently verified on behalf of the organization represented by the bot. Returns True on success.
 *
 * @property int $user_id Unique identifier of the target user
 *
 * @see https://core.telegram.org/bots/api#removeuserverification
 */
class RemoveUserVerification extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'bool';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return bool
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
