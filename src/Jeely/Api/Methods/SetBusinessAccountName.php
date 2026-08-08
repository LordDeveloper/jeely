<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class SetBusinessAccountName
 * @description Changes the first and last name of a managed business account. Requires the can_change_name business bot right. Returns True on success.
 *
 * @property string $business_connection_id Unique identifier of the business connection
 * @property string $first_name The new value of the first name for the business account; 1-64 characters
 * @property string $last_name The new value of the last name for the business account; 0-64 characters
 *
 * @see https://core.telegram.org/bots/api#setbusinessaccountname
 */
class SetBusinessAccountName extends MethodDefinition implements MethodDefinitionInterface
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
