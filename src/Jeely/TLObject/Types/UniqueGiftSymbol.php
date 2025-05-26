<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class UniqueGiftSymbol
* @description This object describes the symbol shown on the pattern of a unique gift.
*
* @property	string $name Name of the symbol
* @method	string getName() Name of the symbol
* @method	bool isName()
* @method	$this setName()
* @method	$this unsetName()

* @property	Sticker $sticker The sticker that represents the unique gift
* @method	Sticker getSticker() The sticker that represents the unique gift
* @method	bool isSticker()
* @method	$this setSticker()
* @method	$this unsetSticker()

* @property	int $rarity_per_mille The number of unique gifts that receive this model for every 1000 gifts upgraded
* @method	int getRarityPerMille() The number of unique gifts that receive this model for every 1000 gifts upgraded
* @method	bool isRarityPerMille()
* @method	$this setRarityPerMille()
* @method	$this unsetRarityPerMille()

*/

class UniqueGiftSymbol extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'name'=> 'string',
		'sticker'=> 'Sticker',
		'rarity_per_mille'=> 'int',
	];

}