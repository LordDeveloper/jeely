<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\OwnedGifts;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class GetBusinessAccountGifts
* @description Returns the gifts received and owned by a managed business account. Requires the can_view_gifts_and_stars business bot right. Returns OwnedGifts on success.
*
*
* @param	string $business_connection_id Unique identifier of the business connection
* @param	bool $exclude_unsaved Pass True to exclude gifts that aren't saved to the account's profile page
* @param	bool $exclude_saved Pass True to exclude gifts that are saved to the account's profile page
* @param	bool $exclude_unlimited Pass True to exclude gifts that can be purchased an unlimited number of times
* @param	bool $exclude_limited Pass True to exclude gifts that can be purchased a limited number of times
* @param	bool $exclude_unique Pass True to exclude unique gifts
* @param	bool $sort_by_price Pass True to sort results by gift price instead of send date. Sorting is applied before pagination.
* @param	string $offset Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results
* @param	int $limit The maximum number of gifts to be returned; 1-100. Defaults to 100
*
*
* @property	string $business_connection_id Unique identifier of the business connection
* @property	bool $exclude_unsaved Pass True to exclude gifts that aren't saved to the account's profile page
* @property	bool $exclude_saved Pass True to exclude gifts that are saved to the account's profile page
* @property	bool $exclude_unlimited Pass True to exclude gifts that can be purchased an unlimited number of times
* @property	bool $exclude_limited Pass True to exclude gifts that can be purchased a limited number of times
* @property	bool $exclude_unique Pass True to exclude unique gifts
* @property	bool $sort_by_price Pass True to sort results by gift price instead of send date. Sorting is applied before pagination.
* @property	string $offset Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results
* @property	int $limit The maximum number of gifts to be returned; 1-100. Defaults to 100
*
*/

#[Casts(['Jeely\\TLObject\\Types\\OwnedGifts'])]
class GetBusinessAccountGifts extends MethodDefinition implements MethodDefinitionInterface
{

}