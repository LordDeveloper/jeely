<?php

namespace Jeely\Api\Types;

/**
 * @class RevenueWithdrawalStateSucceeded
 * @description The withdrawal succeeded.
 *
 * @method string getType() Type of the state, always “succeeded”
 * @method int getDate() Date the withdrawal was completed in Unix time
 * @method string getUrl() An HTTPS URL that can be used to see transaction details
 *
 * @method bool isType()
 * @method bool isDate()
 * @method bool isUrl()
 *
 * @method $this setType()
 * @method $this setDate()
 * @method $this setUrl()
 *
 * @method $this unsetType()
 * @method $this unsetDate()
 * @method $this unsetUrl()
 *
 * @property string $type Type of the state, always “succeeded”
 * @property int $date Date the withdrawal was completed in Unix time
 * @property string $url An HTTPS URL that can be used to see transaction details
 *
 * @see https://core.telegram.org/bots/api#revenuewithdrawalstatesucceeded
 */
class RevenueWithdrawalStateSucceeded extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'date' => 'int',
        'url' => 'string',
    ];
}
