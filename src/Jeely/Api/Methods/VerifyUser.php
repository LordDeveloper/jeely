<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class VerifyUser
 * @description Verifies a user on behalf of the organization which is represented by the bot. Returns True on success.
 *
 * @property int $user_id Unique identifier of the target user
 * @property string $custom_description Custom description for the verification; 0-70 characters. Must be empty if the organization isn't allowed to provide a custom verification description.
 *
 * @see https://core.telegram.org/bots/api#verifyuser
 */
class VerifyUser extends MethodDefinition implements MethodDefinitionInterface
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
