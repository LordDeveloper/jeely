<?php

namespace Jeely\Api\Types;

/**
 * @class SuggestedPostRefunded
 * @description Describes a service message about a payment refund for a suggested post.
 *
 * @method Message getSuggestedPostMessage() Optional. Message containing the suggested post. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
 * @method string getReason() Reason for the refund. Currently, one of “post_deleted” if the post was deleted within 24 hours of being posted or removed from scheduled messages without being posted, or “payment_refunded” if the payer refunded their payment.
 *
 * @method bool isSuggestedPostMessage()
 * @method bool isReason()
 *
 * @method $this setSuggestedPostMessage()
 * @method $this setReason()
 *
 * @method $this unsetSuggestedPostMessage()
 * @method $this unsetReason()
 *
 * @property Message $suggested_post_message Optional. Message containing the suggested post. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
 * @property string $reason Reason for the refund. Currently, one of “post_deleted” if the post was deleted within 24 hours of being posted or removed from scheduled messages without being posted, or “payment_refunded” if the payer refunded their payment.
 *
 * @see https://core.telegram.org/bots/api#suggestedpostrefunded
 */
class SuggestedPostRefunded extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'suggested_post_message' => 'Message',
        'reason' => 'string',
    ];
}
