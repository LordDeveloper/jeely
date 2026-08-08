<?php

namespace Jeely\Api\Types;

/**
 * @class PaidMessagePriceChanged
 * @description Describes a service message about a change in the price of paid messages within a chat.
 *
 * @method int getPaidMessageStarCount() The new number of Telegram Stars that must be paid by non-administrator users of the supergroup chat for each sent message
 *
 * @method bool isPaidMessageStarCount()
 *
 * @method $this setPaidMessageStarCount()
 *
 * @method $this unsetPaidMessageStarCount()
 *
 * @property int $paid_message_star_count The new number of Telegram Stars that must be paid by non-administrator users of the supergroup chat for each sent message
 *
 * @see https://core.telegram.org/bots/api#paidmessagepricechanged
 */
class PaidMessagePriceChanged extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'paid_message_star_count' => 'int',
    ];
}
