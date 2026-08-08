<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class GetStarTransactions
 * @description Returns the bot's Telegram Star transactions in chronological order. On success, returns a StarTransactions object.
 *
 * @property int $offset Number of transactions to skip in the response
 * @property int $limit The maximum number of transactions to be retrieved. Values between 1-100 are accepted. Defaults to 100.
 *
 * @see https://core.telegram.org/bots/api#getstartransactions
 */
class GetStarTransactions extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'StarTransactions';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return StarTransactions
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
