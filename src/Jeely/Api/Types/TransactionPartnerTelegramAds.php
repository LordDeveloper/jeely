<?php

namespace Jeely\Api\Types;

/**
 * @class TransactionPartnerTelegramAds
 * @description Describes a withdrawal transaction to the Telegram Ads platform.
 *
 * @method string getType() Type of the transaction partner, always “telegram_ads”
 *
 * @method bool isType()
 *
 * @method $this setType()
 *
 * @method $this unsetType()
 *
 * @property string $type Type of the transaction partner, always “telegram_ads”
 *
 * @see https://core.telegram.org/bots/api#transactionpartnertelegramads
 */
class TransactionPartnerTelegramAds extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
    ];
}
