<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\StarAmount;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class GetBusinessAccountStarBalance
* @description Returns the amount of Telegram Stars owned by a managed business account. Requires the can_view_gifts_and_stars business bot right. Returns StarAmount on success.
*
*
* @param	string $business_connection_id Unique identifier of the business connection
*
*
* @property	string $business_connection_id Unique identifier of the business connection
*
*/

#[Casts(['Jeely\\TLObject\\Types\\StarAmount'])]
class GetBusinessAccountStarBalance extends MethodDefinition implements MethodDefinitionInterface
{

}