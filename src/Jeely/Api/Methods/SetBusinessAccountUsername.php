<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class SetBusinessAccountUsername
 * @description Changes the username of a managed business account. Requires the can_change_username business bot right. Returns True on success.
 *
 * @property string $business_connection_id Unique identifier of the business connection
 * @property string $username The new value of the username for the business account; 0-32 characters
 *
 * @see https://core.telegram.org/bots/api#setbusinessaccountusername
 */
class SetBusinessAccountUsername extends MethodDefinition implements MethodDefinitionInterface
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
