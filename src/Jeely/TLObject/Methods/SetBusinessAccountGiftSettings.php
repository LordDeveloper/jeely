<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\AcceptedGiftTypes;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class SetBusinessAccountGiftSettings
* @description Changes the privacy settings pertaining to incoming gifts in a managed business account. Requires the can_change_gift_settings business bot right. Returns True on success.
*
*
* @param	string $business_connection_id Unique identifier of the business connection
* @param	bool $show_gift_button Pass True, if a button for sending a gift to the user or by the business account must always be shown in the input field
* @param	AcceptedGiftTypes $accepted_gift_types Types of gifts accepted by the business account
*
*
* @property	string $business_connection_id Unique identifier of the business connection
* @property	bool $show_gift_button Pass True, if a button for sending a gift to the user or by the business account must always be shown in the input field
* @property	AcceptedGiftTypes $accepted_gift_types Types of gifts accepted by the business account
*
*/

#[Casts(['bool'])]
class SetBusinessAccountGiftSettings extends MethodDefinition implements MethodDefinitionInterface
{

}