<?php

namespace Jeely\Api\Types;

/**
 * @class PaidMediaInfo
 * @description Describes the paid media added to a message.
 *
 * @method int getStarCount() The number of Telegram Stars that must be paid to buy access to the media
 * @method PaidMedia[] getPaidMedia() Information about the paid media
 *
 * @method bool isStarCount()
 * @method bool isPaidMedia()
 *
 * @method $this setStarCount()
 * @method $this setPaidMedia()
 *
 * @method $this unsetStarCount()
 * @method $this unsetPaidMedia()
 *
 * @property int $star_count The number of Telegram Stars that must be paid to buy access to the media
 * @property PaidMedia[] $paid_media Information about the paid media
 *
 * @see https://core.telegram.org/bots/api#paidmediainfo
 */
class PaidMediaInfo extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'star_count' => 'int',
        'paid_media' => 'PaidMedia[]',
    ];
}
