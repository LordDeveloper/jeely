<?php

namespace Jeely\Api\Types;

/**
 * @class SuggestedPostPaid
 * @description Describes a service message about a successful payment for a suggested post.
 *
 * @method Message getSuggestedPostMessage() Optional. Message containing the suggested post. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
 * @method string getCurrency() Currency in which the payment was made. Currently, one of “XTR” for Telegram Stars or “TON” for TON grams.
 * @method int getAmount() Optional. The amount of the currency that was received by the channel in nanograms; for payments in TON grams only
 * @method StarAmount getStarAmount() Optional. The amount of Telegram Stars that was received by the channel; for payments in Telegram Stars only
 *
 * @method bool isSuggestedPostMessage()
 * @method bool isCurrency()
 * @method bool isAmount()
 * @method bool isStarAmount()
 *
 * @method $this setSuggestedPostMessage()
 * @method $this setCurrency()
 * @method $this setAmount()
 * @method $this setStarAmount()
 *
 * @method $this unsetSuggestedPostMessage()
 * @method $this unsetCurrency()
 * @method $this unsetAmount()
 * @method $this unsetStarAmount()
 *
 * @property Message $suggested_post_message Optional. Message containing the suggested post. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
 * @property string $currency Currency in which the payment was made. Currently, one of “XTR” for Telegram Stars or “TON” for TON grams.
 * @property int $amount Optional. The amount of the currency that was received by the channel in nanograms; for payments in TON grams only
 * @property StarAmount $star_amount Optional. The amount of Telegram Stars that was received by the channel; for payments in Telegram Stars only
 *
 * @see https://core.telegram.org/bots/api#suggestedpostpaid
 */
class SuggestedPostPaid extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'suggested_post_message' => 'Message',
        'currency' => 'string',
        'amount' => 'int',
        'star_amount' => 'StarAmount',
    ];
}
