<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class TransferBusinessAccountStars
* @description Transfers Telegram Stars from the business account balance to the bot's balance. Requires the can_transfer_stars business bot right. Returns True on success.
*
*
* @param	string $business_connection_id Unique identifier of the business connection
* @param	int $star_count Number of Telegram Stars to transfer; 1-10000
*
*
* @property	string $business_connection_id Unique identifier of the business connection
* @property	int $star_count Number of Telegram Stars to transfer; 1-10000
*
*/

#[Casts(['bool'])]
class TransferBusinessAccountStars extends MethodDefinition implements MethodDefinitionInterface
{

}