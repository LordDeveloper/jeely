<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class ConvertGiftToStars
* @description Converts a given regular gift to Telegram Stars. Requires the can_convert_gifts_to_stars business bot right. Returns True on success.
*
*
* @param	string $business_connection_id Unique identifier of the business connection
* @param	string $owned_gift_id Unique identifier of the regular gift that should be converted to Telegram Stars
*
*
* @property	string $business_connection_id Unique identifier of the business connection
* @property	string $owned_gift_id Unique identifier of the regular gift that should be converted to Telegram Stars
*
*/

#[Casts(['bool'])]
class ConvertGiftToStars extends MethodDefinition implements MethodDefinitionInterface
{

}