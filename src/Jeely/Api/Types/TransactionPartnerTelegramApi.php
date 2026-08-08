<?php

namespace Jeely\Api\Types;

/**
 * @class TransactionPartnerTelegramApi
 * @description Describes a transaction with payment for paid broadcasting.
 *
 * @method string getType() Type of the transaction partner, always “telegram_api”
 * @method int getRequestCount() The number of successful requests that exceeded regular limits and were therefore billed
 *
 * @method bool isType()
 * @method bool isRequestCount()
 *
 * @method $this setType()
 * @method $this setRequestCount()
 *
 * @method $this unsetType()
 * @method $this unsetRequestCount()
 *
 * @property string $type Type of the transaction partner, always “telegram_api”
 * @property int $request_count The number of successful requests that exceeded regular limits and were therefore billed
 *
 * @see https://core.telegram.org/bots/api#transactionpartnertelegramapi
 */
class TransactionPartnerTelegramApi extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'request_count' => 'int',
    ];
}
