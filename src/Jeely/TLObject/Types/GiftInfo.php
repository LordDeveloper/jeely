<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class GiftInfo
* @description Describes a service message about a regular gift that was sent or received.
*
* @property	Gift $gift Information about the gift
* @method	Gift getGift() Information about the gift
* @method	bool isGift()
* @method	$this setGift()
* @method	$this unsetGift()

* @property	string $owned_gift_id Optional. Unique identifier of the received gift for the bot; only present for gifts received on behalf of business accounts
* @method	string getOwnedGiftId() Optional. Unique identifier of the received gift for the bot; only present for gifts received on behalf of business accounts
* @method	bool isOwnedGiftId()
* @method	$this setOwnedGiftId()
* @method	$this unsetOwnedGiftId()

* @property	int $convert_star_count Optional. Number of Telegram Stars that can be claimed by the receiver by converting the gift; omitted if conversion to Telegram Stars is impossible
* @method	int getConvertStarCount() Optional. Number of Telegram Stars that can be claimed by the receiver by converting the gift; omitted if conversion to Telegram Stars is impossible
* @method	bool isConvertStarCount()
* @method	$this setConvertStarCount()
* @method	$this unsetConvertStarCount()

* @property	int $prepaid_upgrade_star_count Optional. Number of Telegram Stars that were prepaid by the sender for the ability to upgrade the gift
* @method	int getPrepaidUpgradeStarCount() Optional. Number of Telegram Stars that were prepaid by the sender for the ability to upgrade the gift
* @method	bool isPrepaidUpgradeStarCount()
* @method	$this setPrepaidUpgradeStarCount()
* @method	$this unsetPrepaidUpgradeStarCount()

* @property	bool $can_be_upgraded Optional. True, if the gift can be upgraded to a unique gift
* @method	bool getCanBeUpgraded() Optional. True, if the gift can be upgraded to a unique gift
* @method	bool isCanBeUpgraded()
* @method	$this setCanBeUpgraded()
* @method	$this unsetCanBeUpgraded()

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

*/

class GiftInfo extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'gift'=> 'Gift',
		'owned_gift_id'=> 'string',
		'convert_star_count'=> 'int',
		'prepaid_upgrade_star_count'=> 'int',
		'can_be_upgraded'=> 'bool',
		'text'=> 'string',
		'entities'=> 'MessageEntity[]',
		'is_private'=> 'bool',
	];

}