<?php

namespace Jeely\Api\Types;

/**
 * @class OwnedGifts
 * @description Contains the list of gifts received and owned by a user or a chat.
 *
 * @method int getTotalCount() The total number of gifts owned by the user or the chat
 * @method OwnedGift[] getGifts() The list of gifts
 * @method string getNextOffset() Optional. Offset for the next request. If empty, then there are no more results.
 *
 * @method bool isTotalCount()
 * @method bool isGifts()
 * @method bool isNextOffset()
 *
 * @method $this setTotalCount()
 * @method $this setGifts()
 * @method $this setNextOffset()
 *
 * @method $this unsetTotalCount()
 * @method $this unsetGifts()
 * @method $this unsetNextOffset()
 *
 * @property int $total_count The total number of gifts owned by the user or the chat
 * @property OwnedGift[] $gifts The list of gifts
 * @property string $next_offset Optional. Offset for the next request. If empty, then there are no more results.
 *
 * @see https://core.telegram.org/bots/api#ownedgifts
 */
class OwnedGifts extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'total_count' => 'int',
        'gifts' => 'OwnedGift[]',
        'next_offset' => 'string',
    ];
}
