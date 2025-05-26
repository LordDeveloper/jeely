<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class UniqueGift
* @description This object describes a unique gift that was upgraded from a regular gift.
*
* @property	string $base_name Human-readable name of the regular gift from which this unique gift was upgraded
* @method	string getBaseName() Human-readable name of the regular gift from which this unique gift was upgraded
* @method	bool isBaseName()
* @method	$this setBaseName()
* @method	$this unsetBaseName()

* @property	string $name Unique name of the gift. This name can be used in https://t.me/nft/... links and story areas
* @method	string getName() Unique name of the gift. This name can be used in https://t.me/nft/... links and story areas
* @method	bool isName()
* @method	$this setName()
* @method	$this unsetName()

* @property	int $number Unique number of the upgraded gift among gifts upgraded from the same regular gift
* @method	int getNumber() Unique number of the upgraded gift among gifts upgraded from the same regular gift
* @method	bool isNumber()
* @method	$this setNumber()
* @method	$this unsetNumber()

* @property	UniqueGiftModel $model Model of the gift
* @method	UniqueGiftModel getModel() Model of the gift
* @method	bool isModel()
* @method	$this setModel()
* @method	$this unsetModel()

* @property	UniqueGiftSymbol $symbol Symbol of the gift
* @method	UniqueGiftSymbol getSymbol() Symbol of the gift
* @method	bool isSymbol()
* @method	$this setSymbol()
* @method	$this unsetSymbol()

* @property	UniqueGiftBackdrop $backdrop Backdrop of the gift
* @method	UniqueGiftBackdrop getBackdrop() Backdrop of the gift
* @method	bool isBackdrop()
* @method	$this setBackdrop()
* @method	$this unsetBackdrop()

*/

class UniqueGift extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'base_name'=> 'string',
		'name'=> 'string',
		'number'=> 'int',
		'model'=> 'UniqueGiftModel',
		'symbol'=> 'UniqueGiftSymbol',
		'backdrop'=> 'UniqueGiftBackdrop',
	];

}