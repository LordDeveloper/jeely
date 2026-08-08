<?php

namespace Jeely\Api\Types;

/**
 * @class SuggestedPostApprovalFailed
 * @description Describes a service message about the failed approval of a suggested post. Currently, only caused by insufficient user funds at the time of approval.
 *
 * @method Message getSuggestedPostMessage() Optional. Message containing the suggested post whose approval has failed. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
 * @method SuggestedPostPrice getPrice() Expected price of the post
 *
 * @method bool isSuggestedPostMessage()
 * @method bool isPrice()
 *
 * @method $this setSuggestedPostMessage()
 * @method $this setPrice()
 *
 * @method $this unsetSuggestedPostMessage()
 * @method $this unsetPrice()
 *
 * @property Message $suggested_post_message Optional. Message containing the suggested post whose approval has failed. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
 * @property SuggestedPostPrice $price Expected price of the post
 *
 * @see https://core.telegram.org/bots/api#suggestedpostapprovalfailed
 */
class SuggestedPostApprovalFailed extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'suggested_post_message' => 'Message',
        'price' => 'SuggestedPostPrice',
    ];
}
