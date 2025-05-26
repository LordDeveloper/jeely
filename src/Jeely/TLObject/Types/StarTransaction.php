<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class StarTransaction
* @description Describes a Telegram Star transaction. Note that if the buyer initiates a chargeback with the payment provider from whom they acquired Stars (e.g., Apple, Google) following this transaction, the refunded Stars will be deducted from the bot's balance. This is outside of Telegram's control.
*
* @property	string $id Unique identifier of the transaction. Coincides with the identifier of the original transaction for refund transactions. Coincides with SuccessfulPayment.telegram_payment_charge_id for successful incoming payments from users.
* @method	string getId() Unique identifier of the transaction. Coincides with the identifier of the original transaction for refund transactions. Coincides with SuccessfulPayment.telegram_payment_charge_id for successful incoming payments from users.
* @method	bool isId()
* @method	$this setId()
* @method	$this unsetId()

* @property	int $amount Integer amount of Telegram Stars transferred by the transaction
* @method	int getAmount() Integer amount of Telegram Stars transferred by the transaction
* @method	bool isAmount()
* @method	$this setAmount()
* @method	$this unsetAmount()

* @property	int $nanostar_amount Optional. The number of 1/1000000000 shares of Telegram Stars transferred by the transaction; from 0 to 999999999
* @method	int getNanostarAmount() Optional. The number of 1/1000000000 shares of Telegram Stars transferred by the transaction; from 0 to 999999999
* @method	bool isNanostarAmount()
* @method	$this setNanostarAmount()
* @method	$this unsetNanostarAmount()

* @property	int $date Date the transaction was created in Unix time
* @method	int getDate() Date the transaction was created in Unix time
* @method	bool isDate()
* @method	$this setDate()
* @method	$this unsetDate()

* @property	TransactionPartner $source Optional. Source of an incoming transaction (e.g., a user purchasing goods or services, Fragment refunding a failed withdrawal). Only for incoming transactions
* @method	TransactionPartner getSource() Optional. Source of an incoming transaction (e.g., a user purchasing goods or services, Fragment refunding a failed withdrawal). Only for incoming transactions
* @method	bool isSource()
* @method	$this setSource()
* @method	$this unsetSource()

* @property	TransactionPartner $receiver Optional. Receiver of an outgoing transaction (e.g., a user for a purchase refund, Fragment for a withdrawal). Only for outgoing transactions
* @method	TransactionPartner getReceiver() Optional. Receiver of an outgoing transaction (e.g., a user for a purchase refund, Fragment for a withdrawal). Only for outgoing transactions
* @method	bool isReceiver()
* @method	$this setReceiver()
* @method	$this unsetReceiver()

*/

class StarTransaction extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'id'=> 'string',
		'amount'=> 'int',
		'nanostar_amount'=> 'int',
		'date'=> 'int',
		'source'=> 'TransactionPartner',
		'receiver'=> 'TransactionPartner',
	];

}