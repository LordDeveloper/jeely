<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class RefundStarPayment
 * @description Refunds a successful payment in Telegram Stars. Returns True on success.
 *
 * @property int $user_id Identifier of the user whose payment will be refunded
 * @property string $telegram_payment_charge_id Telegram payment identifier
 *
 * @see https://core.telegram.org/bots/api#refundstarpayment
 */
class RefundStarPayment extends MethodDefinition implements MethodDefinitionInterface
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
