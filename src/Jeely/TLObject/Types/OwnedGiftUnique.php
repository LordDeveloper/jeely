<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class OwnedGiftUnique
* @description Describes a unique gift received and owned by a user or a chat.
*
* @property	string $type Type of the gift, always “unique”
* @method	string getType() Type of the gift, always “unique”
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	UniqueGift $gift Information about the unique gift
* @method	UniqueGift getGift() Information about the unique gift
* @method	bool isGift()
* @method	$this setGift()
* @method	$this unsetGift()

* @property	string $owned_gift_id Optional. Unique identifier of the received gift for the bot; for gifts received on behalf of business accounts only
* @method	string getOwnedGiftId() Optional. Unique identifier of the received gift for the bot; for gifts received on behalf of business accounts only
* @method	bool isOwnedGiftId()
* @method	$this setOwnedGiftId()
* @method	$this unsetOwnedGiftId()

* @property	User $sender_user Optional. Sender of the gift if it is a known user
* @method	User getSenderUser() Optional. Sender of the gift if it is a known user
* @method	bool isSenderUser()
* @method	$this setSenderUser()
* @method	$this unsetSenderUser()

* @property	int $send_date Date the gift was sent in Unix time
* @method	int getSendDate() Date the gift was sent in Unix time
* @method	bool isSendDate()
* @method	$this setSendDate()
* @method	$this unsetSendDate()

* @property	bool $is_saved Optional. True, if the gift is displayed on the account's profile page; for gifts received on behalf of business accounts only
* @method	bool getIsSaved() Optional. True, if the gift is displayed on the account's profile page; for gifts received on behalf of business accounts only
* @method	bool isIsSaved()
* @method	$this setIsSaved()
* @method	$this unsetIsSaved()

* @property	bool $can_be_transferred Optional. True, if the gift can be transferred to another owner; for gifts received on behalf of business accounts only
* @method	bool getCanBeTransferred() Optional. True, if the gift can be transferred to another owner; for gifts received on behalf of business accounts only
* @method	bool isCanBeTransferred()
* @method	$this setCanBeTransferred()
* @method	$this unsetCanBeTransferred()

* @property	int $transfer_star_count Optional. Number of Telegram Stars that must be paid to transfer the gift; omitted if the bot cannot transfer the gift
* @method	int getTransferStarCount() Optional. Number of Telegram Stars that must be paid to transfer the gift; omitted if the bot cannot transfer the gift
* @method	bool isTransferStarCount()
* @method	$this setTransferStarCount()
* @method	$this unsetTransferStarCount()

*/

class OwnedGiftUnique extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'gift'=> 'UniqueGift',
		'owned_gift_id'=> 'string',
		'sender_user'=> 'User',
		'send_date'=> 'int',
		'is_saved'=> 'bool',
		'can_be_transferred'=> 'bool',
		'transfer_star_count'=> 'int',
	];

}