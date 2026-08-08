<?php

namespace Jeely\Api\Types;

/**
 * @class AffiliateInfo
 * @description Contains information about the affiliate that received a commission via this transaction.
 *
 * @method User getAffiliateUser() Optional. The bot or the user that received an affiliate commission if it was received by a bot or a user
 * @method Chat getAffiliateChat() Optional. The chat that received an affiliate commission if it was received by a chat
 * @method int getCommissionPerMille() The number of Telegram Stars received by the affiliate for each 1000 Telegram Stars received by the bot from referred users
 * @method int getAmount() Integer amount of Telegram Stars received by the affiliate from the transaction, rounded to 0; can be negative for refunds
 * @method int getNanostarAmount() Optional. The number of 1/1000000000 shares of Telegram Stars received by the affiliate; from -999999999 to 999999999; can be negative for refunds
 *
 * @method bool isAffiliateUser()
 * @method bool isAffiliateChat()
 * @method bool isCommissionPerMille()
 * @method bool isAmount()
 * @method bool isNanostarAmount()
 *
 * @method $this setAffiliateUser()
 * @method $this setAffiliateChat()
 * @method $this setCommissionPerMille()
 * @method $this setAmount()
 * @method $this setNanostarAmount()
 *
 * @method $this unsetAffiliateUser()
 * @method $this unsetAffiliateChat()
 * @method $this unsetCommissionPerMille()
 * @method $this unsetAmount()
 * @method $this unsetNanostarAmount()
 *
 * @property User $affiliate_user Optional. The bot or the user that received an affiliate commission if it was received by a bot or a user
 * @property Chat $affiliate_chat Optional. The chat that received an affiliate commission if it was received by a chat
 * @property int $commission_per_mille The number of Telegram Stars received by the affiliate for each 1000 Telegram Stars received by the bot from referred users
 * @property int $amount Integer amount of Telegram Stars received by the affiliate from the transaction, rounded to 0; can be negative for refunds
 * @property int $nanostar_amount Optional. The number of 1/1000000000 shares of Telegram Stars received by the affiliate; from -999999999 to 999999999; can be negative for refunds
 *
 * @see https://core.telegram.org/bots/api#affiliateinfo
 */
class AffiliateInfo extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'affiliate_user' => 'User',
        'affiliate_chat' => 'Chat',
        'commission_per_mille' => 'int',
        'amount' => 'int',
        'nanostar_amount' => 'int',
    ];
}
