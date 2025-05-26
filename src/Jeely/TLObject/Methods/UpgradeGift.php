<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class UpgradeGift
* @description Upgrades a given regular gift to a unique gift. Requires the can_transfer_and_upgrade_gifts business bot right. Additionally requires the can_transfer_stars business bot right if the upgrade is paid. Returns True on success.
*
*
* @param	string $business_connection_id Unique identifier of the business connection
* @param	string $owned_gift_id Unique identifier of the regular gift that should be upgraded to a unique one
* @param	bool $keep_original_details Pass True to keep the original gift text, sender and receiver in the upgraded gift
* @param	int $star_count The amount of Telegram Stars that will be paid for the upgrade from the business account balance. If gift.prepaid_upgrade_star_count > 0, then pass 0, otherwise, the can_transfer_stars business bot right is required and gift.upgrade_star_count must be passed.
*
*
* @property	string $business_connection_id Unique identifier of the business connection
* @property	string $owned_gift_id Unique identifier of the regular gift that should be upgraded to a unique one
* @property	bool $keep_original_details Pass True to keep the original gift text, sender and receiver in the upgraded gift
* @property	int $star_count The amount of Telegram Stars that will be paid for the upgrade from the business account balance. If gift.prepaid_upgrade_star_count > 0, then pass 0, otherwise, the can_transfer_stars business bot right is required and gift.upgrade_star_count must be passed.
*
*/

#[Casts(['bool'])]
class UpgradeGift extends MethodDefinition implements MethodDefinitionInterface
{

}