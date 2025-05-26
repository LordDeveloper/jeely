<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class OwnedGiftRegular
* @description Describes a regular gift owned by a user or a chat.
*
* @property	string $type Type of the gift, always “regular”
* @method	string getType() Type of the gift, always “regular”
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	Gift $gift Information about the regular gift
* @method	Gift getGift() Information about the regular gift
* @method	bool isGift()
* @method	$this setGift()
* @method	$this unsetGift()

* @property	string $owned_gift_id Optional. Unique identifier of the gift for the bot; for gifts received on behalf of business accounts only
* @method	string getOwnedGiftId() Optional. Unique identifier of the gift for the bot; for gifts received on behalf of business accounts only
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

* @property	string $text Optional. Text of the message that was added to the gift
* @method	string getText() Optional. Text of the message that was added to the gift
* @method	bool isText()
* @method	$this setText()
* @method	$this unsetText()

* @property	MessageEntity[] $entities Optional. Special entities that appear in the text
* @method	MessageEntity[] getEntities() Optional. Special entities that appear in the text
* @method	bool isEntities()
* @method	$this setEntities()
* @method	$this unsetEntities()

* @property	bool $is_private Optional. True, if the sender and gift text are shown only to the gift receiver; otherwise, everyone will be able to see them
* @method	bool getIsPrivate() Optional. True, if the sender and gift text are shown only to the gift receiver; otherwise, everyone will be able to see them
* @method	bool isIsPrivate()
* @method	$this setIsPrivate()
* @method	$this unsetIsPrivate()

* @property	bool $is_saved Optional. True, if the gift is displayed on the account's profile page; for gifts received on behalf of business accounts only
* @method	bool getIsSaved() Optional. True, if the gift is displayed on the account's profile page; for gifts received on behalf of business accounts only
* @method	bool isIsSaved()
* @method	$this setIsSaved()
* @method	$this unsetIsSaved()

* @property	bool $can_be_upgraded Optional. True, if the gift can be upgraded to a unique gift; for gifts received on behalf of business accounts only
* @method	bool getCanBeUpgraded() Optional. True, if the gift can be upgraded to a unique gift; for gifts received on behalf of business accounts only
* @method	bool isCanBeUpgraded()
* @method	$this setCanBeUpgraded()
* @method	$this unsetCanBeUpgraded()

* @property	bool $was_refunded Optional. True, if the gift was refunded and isn't available anymore
* @method	bool getWasRefunded() Optional. True, if the gift was refunded and isn't available anymore
* @method	bool isWasRefunded()
* @method	$this setWasRefunded()
* @method	$this unsetWasRefunded()

* @property	int $convert_star_count Optional. Number of Telegram Stars that can be claimed by the receiver instead of the gift; omitted if the gift cannot be converted to Telegram Stars
* @method	int getConvertStarCount() Optional. Number of Telegram Stars that can be claimed by the receiver instead of the gift; omitted if the gift cannot be converted to Telegram Stars
* @method	bool isConvertStarCount()
* @method	$this setConvertStarCount()
* @method	$this unsetConvertStarCount()

* @property	int $prepaid_upgrade_star_count Optional. Number of Telegram Stars that were paid by the sender for the ability to upgrade the gift
* @method	int getPrepaidUpgradeStarCount() Optional. Number of Telegram Stars that were paid by the sender for the ability to upgrade the gift
* @method	bool isPrepaidUpgradeStarCount()
* @method	$this setPrepaidUpgradeStarCount()
* @method	$this unsetPrepaidUpgradeStarCount()

*/

class OwnedGiftRegular extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'gift'=> 'Gift',
		'owned_gift_id'=> 'string',
		'sender_user'=> 'User',
		'send_date'=> 'int',
		'text'=> 'string',
		'entities'=> 'MessageEntity[]',
		'is_private'=> 'bool',
		'is_saved'=> 'bool',
		'can_be_upgraded'=> 'bool',
		'was_refunded'=> 'bool',
		'convert_star_count'=> 'int',
		'prepaid_upgrade_star_count'=> 'int',
	];

}