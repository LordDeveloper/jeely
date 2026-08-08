<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class SetBusinessAccountBio
 * @description Changes the bio of a managed business account. Requires the can_change_bio business bot right. Returns True on success.
 *
 * @property string $business_connection_id Unique identifier of the business connection
 * @property string $bio The new value of the bio for the business account; 0-140 characters
 *
 * @see https://core.telegram.org/bots/api#setbusinessaccountbio
 */
class SetBusinessAccountBio extends MethodDefinition implements MethodDefinitionInterface
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
