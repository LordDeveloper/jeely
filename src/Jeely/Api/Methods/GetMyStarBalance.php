<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class GetMyStarBalance
 * @description A method to get the current Telegram Stars balance of the bot. Requires no parameters. On success, returns a StarAmount object.
 *
 *
 * @see https://core.telegram.org/bots/api#getmystarbalance
 */
class GetMyStarBalance extends MethodDefinition implements MethodDefinitionInterface
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
