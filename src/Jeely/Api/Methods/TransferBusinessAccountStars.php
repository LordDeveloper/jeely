<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class TransferBusinessAccountStars
 * @description Transfers Telegram Stars from the business account balance to the bot's balance. Requires the can_transfer_stars business bot right. Returns True on success.
 *
 * @property string $business_connection_id Unique identifier of the business connection
 * @property int $star_count Number of Telegram Stars to transfer; 1-10000
 *
 * @see https://core.telegram.org/bots/api#transferbusinessaccountstars
 */
class TransferBusinessAccountStars extends MethodDefinition implements MethodDefinitionInterface
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
