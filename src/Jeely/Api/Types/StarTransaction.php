<?php

namespace Jeely\Api\Types;

/**
 * @class StarTransaction
 * @description Describes a Telegram Star transaction. Note that if the buyer initiates a chargeback with the payment provider from whom they acquired Stars (e.g., Apple, Google) following this transaction, the refunded Stars will be deducted from the bot's balance. This is outside of Telegram's control.
 *
 * @method string getId() Unique identifier of the transaction. Coincides with the identifier of the original transaction for refund transactions. Coincides with SuccessfulPayment.telegram_payment_charge_id for successful incoming payments from users.
 * @method int getAmount() Integer amount of Telegram Stars transferred by the transaction
 * @method int getNanostarAmount() Optional. The number of 1/1000000000 shares of Telegram Stars transferred by the transaction; from 0 to 999999999
 * @method int getDate() Date the transaction was created in Unix time
 * @method TransactionPartner getSource() Optional. Source of an incoming transaction (e.g., a user purchasing goods or services, Fragment refunding a failed withdrawal). Only for incoming transactions.
 * @method TransactionPartner getReceiver() Optional. Receiver of an outgoing transaction (e.g., a user for a purchase refund, Fragment for a withdrawal). Only for outgoing transactions.
 *
 * @method bool isId()
 * @method bool isAmount()
 * @method bool isNanostarAmount()
 * @method bool isDate()
 * @method bool isSource()
 * @method bool isReceiver()
 *
 * @method $this setId()
 * @method $this setAmount()
 * @method $this setNanostarAmount()
 * @method $this setDate()
 * @method $this setSource()
 * @method $this setReceiver()
 *
 * @method $this unsetId()
 * @method $this unsetAmount()
 * @method $this unsetNanostarAmount()
 * @method $this unsetDate()
 * @method $this unsetSource()
 * @method $this unsetReceiver()
 *
 * @property string $id Unique identifier of the transaction. Coincides with the identifier of the original transaction for refund transactions. Coincides with SuccessfulPayment.telegram_payment_charge_id for successful incoming payments from users.
 * @property int $amount Integer amount of Telegram Stars transferred by the transaction
 * @property int $nanostar_amount Optional. The number of 1/1000000000 shares of Telegram Stars transferred by the transaction; from 0 to 999999999
 * @property int $date Date the transaction was created in Unix time
 * @property TransactionPartner $source Optional. Source of an incoming transaction (e.g., a user purchasing goods or services, Fragment refunding a failed withdrawal). Only for incoming transactions.
 * @property TransactionPartner $receiver Optional. Receiver of an outgoing transaction (e.g., a user for a purchase refund, Fragment for a withdrawal). Only for outgoing transactions.
 *
 * @see https://core.telegram.org/bots/api#startransaction
 */
class StarTransaction extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'id' => 'string',
        'amount' => 'int',
        'nanostar_amount' => 'int',
        'date' => 'int',
        'source' => 'TransactionPartner',
        'receiver' => 'TransactionPartner',
    ];
}
