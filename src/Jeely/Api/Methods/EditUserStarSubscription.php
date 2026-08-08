<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class EditUserStarSubscription
 * @description Allows the bot to cancel or re-enable extension of a subscription paid in Telegram Stars. Returns True on success.
 *
 * @property int $user_id Identifier of the user whose subscription will be edited
 * @property string $telegram_payment_charge_id Telegram payment identifier for the subscription
 * @property bool $is_canceled Pass True to cancel extension of the user subscription; the subscription must be active up to the end of the current subscription period. Pass False to allow the user to re-enable a subscription that was previously canceled by the bot.
 *
 * @see https://core.telegram.org/bots/api#edituserstarsubscription
 */
class EditUserStarSubscription extends MethodDefinition implements MethodDefinitionInterface
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
