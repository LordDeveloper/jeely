<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class GetBusinessConnection
 * @description Use this method to get information about the connection of the bot with a business account. Returns a BusinessConnection object on success.
 *
 * @property string $business_connection_id Unique identifier of the business connection
 *
 * @see https://core.telegram.org/bots/api#getbusinessconnection
 */
class GetBusinessConnection extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'BusinessConnection';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return BusinessConnection
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
