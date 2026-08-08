<?php

namespace Jeely\Api\Types;

/**
 * @class SuggestedPostInfo
 * @description Contains information about a suggested post.
 *
 * @method string getState() State of the suggested post. Currently, it can be one of “pending”, “approved”, “declined”.
 * @method SuggestedPostPrice getPrice() Optional. Proposed price of the post. If the field is omitted, then the post is unpaid.
 * @method int getSendDate() Optional. Proposed send date of the post. If the field is omitted, then the post can be published at any time within 30 days at the sole discretion of the user or administrator who approves it.
 *
 * @method bool isState()
 * @method bool isPrice()
 * @method bool isSendDate()
 *
 * @method $this setState()
 * @method $this setPrice()
 * @method $this setSendDate()
 *
 * @method $this unsetState()
 * @method $this unsetPrice()
 * @method $this unsetSendDate()
 *
 * @property string $state State of the suggested post. Currently, it can be one of “pending”, “approved”, “declined”.
 * @property SuggestedPostPrice $price Optional. Proposed price of the post. If the field is omitted, then the post is unpaid.
 * @property int $send_date Optional. Proposed send date of the post. If the field is omitted, then the post can be published at any time within 30 days at the sole discretion of the user or administrator who approves it.
 *
 * @see https://core.telegram.org/bots/api#suggestedpostinfo
 */
class SuggestedPostInfo extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'state' => 'string',
        'price' => 'SuggestedPostPrice',
        'send_date' => 'int',
    ];
}
