<?php

namespace Jeely\Api\Types;

/**
 * @class TransactionPartnerAffiliateProgram
 * @description Describes the affiliate program that issued the affiliate commission received via this transaction.
 *
 * @method string getType() Type of the transaction partner, always “affiliate_program”
 * @method User getSponsorUser() Optional. Information about the bot that sponsored the affiliate program
 * @method int getCommissionPerMille() The number of Telegram Stars received by the bot for each 1000 Telegram Stars received by the affiliate program sponsor from referred users
 *
 * @method bool isType()
 * @method bool isSponsorUser()
 * @method bool isCommissionPerMille()
 *
 * @method $this setType()
 * @method $this setSponsorUser()
 * @method $this setCommissionPerMille()
 *
 * @method $this unsetType()
 * @method $this unsetSponsorUser()
 * @method $this unsetCommissionPerMille()
 *
 * @property string $type Type of the transaction partner, always “affiliate_program”
 * @property User $sponsor_user Optional. Information about the bot that sponsored the affiliate program
 * @property int $commission_per_mille The number of Telegram Stars received by the bot for each 1000 Telegram Stars received by the affiliate program sponsor from referred users
 *
 * @see https://core.telegram.org/bots/api#transactionpartneraffiliateprogram
 */
class TransactionPartnerAffiliateProgram extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'sponsor_user' => 'User',
        'commission_per_mille' => 'int',
    ];
}
