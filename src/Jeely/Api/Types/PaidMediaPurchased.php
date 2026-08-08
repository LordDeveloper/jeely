<?php

namespace Jeely\Api\Types;

/**
 * @class PaidMediaPurchased
 * @description This object contains information about a paid media purchase.
 *
 * @method User getFrom() User who purchased the media
 * @method string getPaidMediaPayload() Bot-specified paid media payload
 *
 * @method bool isFrom()
 * @method bool isPaidMediaPayload()
 *
 * @method $this setFrom()
 * @method $this setPaidMediaPayload()
 *
 * @method $this unsetFrom()
 * @method $this unsetPaidMediaPayload()
 *
 * @property User $from User who purchased the media
 * @property string $paid_media_payload Bot-specified paid media payload
 *
 * @see https://core.telegram.org/bots/api#paidmediapurchased
 */
class PaidMediaPurchased extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'from' => 'User',
        'paid_media_payload' => 'string',
    ];
}
