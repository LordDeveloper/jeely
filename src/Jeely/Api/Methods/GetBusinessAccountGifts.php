<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class GetBusinessAccountGifts
 * @description Returns the gifts received and owned by a managed business account. Requires the can_view_gifts_and_stars business bot right. Returns OwnedGifts on success.
 *
 * @property string $business_connection_id Unique identifier of the business connection
 * @property bool $exclude_unsaved Pass True to exclude gifts that aren't saved to the account's profile page
 * @property bool $exclude_saved Pass True to exclude gifts that are saved to the account's profile page
 * @property bool $exclude_unlimited Pass True to exclude gifts that can be purchased an unlimited number of times
 * @property bool $exclude_limited_upgradable Pass True to exclude gifts that can be purchased a limited number of times and can be upgraded to unique
 * @property bool $exclude_limited_non_upgradable Pass True to exclude gifts that can be purchased a limited number of times and can't be upgraded to unique
 * @property bool $exclude_unique Pass True to exclude unique gifts
 * @property bool $exclude_from_blockchain Pass True to exclude gifts that were assigned from the TON blockchain and can't be resold or transferred in Telegram
 * @property bool $sort_by_price Pass True to sort results by gift price instead of send date. Sorting is applied before pagination.
 * @property string $offset Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results
 * @property int $limit The maximum number of gifts to be returned; 1-100. Defaults to 100.
 *
 * @see https://core.telegram.org/bots/api#getbusinessaccountgifts
 */
class GetBusinessAccountGifts extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'OwnedGifts';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return OwnedGifts
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
