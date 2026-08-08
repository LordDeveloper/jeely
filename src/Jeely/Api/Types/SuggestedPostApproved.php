<?php

namespace Jeely\Api\Types;

/**
 * @class SuggestedPostApproved
 * @description Describes a service message about the approval of a suggested post.
 *
 * @method Message getSuggestedPostMessage() Optional. Message containing the suggested post. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
 * @method SuggestedPostPrice getPrice() Optional. Amount paid for the post
 * @method int getSendDate() Date when the post will be published
 *
 * @method bool isSuggestedPostMessage()
 * @method bool isPrice()
 * @method bool isSendDate()
 *
 * @method $this setSuggestedPostMessage()
 * @method $this setPrice()
 * @method $this setSendDate()
 *
 * @method $this unsetSuggestedPostMessage()
 * @method $this unsetPrice()
 * @method $this unsetSendDate()
 *
 * @property Message $suggested_post_message Optional. Message containing the suggested post. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
 * @property SuggestedPostPrice $price Optional. Amount paid for the post
 * @property int $send_date Date when the post will be published
 *
 * @see https://core.telegram.org/bots/api#suggestedpostapproved
 */
class SuggestedPostApproved extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'suggested_post_message' => 'Message',
        'price' => 'SuggestedPostPrice',
        'send_date' => 'int',
    ];
}
