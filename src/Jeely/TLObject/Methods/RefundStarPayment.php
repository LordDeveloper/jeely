<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class RefundStarPayment
* @description Refunds a successful payment in Telegram Stars. Returns True on success.
*
*
* @param	int $user_id Identifier of the user whose payment will be refunded
* @param	string $telegram_payment_charge_id Telegram payment identifier
*
*
* @property	int $user_id Identifier of the user whose payment will be refunded
* @property	string $telegram_payment_charge_id Telegram payment identifier
*
*/

#[Casts(['bool'])]
class RefundStarPayment extends MethodDefinition implements MethodDefinitionInterface
{

}