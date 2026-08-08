<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class GetBusinessAccountStarBalance
 * @description Returns the amount of Telegram Stars owned by a managed business account. Requires the can_view_gifts_and_stars business bot right. Returns StarAmount on success.
 *
 * @property string $business_connection_id Unique identifier of the business connection
 *
 * @see https://core.telegram.org/bots/api#getbusinessaccountstarbalance
 */
class GetBusinessAccountStarBalance extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'StarAmount';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return StarAmount
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
