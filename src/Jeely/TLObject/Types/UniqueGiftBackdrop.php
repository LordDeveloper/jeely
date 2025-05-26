<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class UniqueGiftBackdrop
* @description This object describes the backdrop of a unique gift.
*
* @property	string $name Name of the backdrop
* @method	string getName() Name of the backdrop
* @method	bool isName()
* @method	$this setName()
* @method	$this unsetName()

* @property	UniqueGiftBackdropColors $colors Colors of the backdrop
* @method	UniqueGiftBackdropColors getColors() Colors of the backdrop
* @method	bool isColors()
* @method	$this setColors()
* @method	$this unsetColors()

* @property	int $rarity_per_mille The number of unique gifts that receive this backdrop for every 1000 gifts upgraded
* @method	int getRarityPerMille() The number of unique gifts that receive this backdrop for every 1000 gifts upgraded
* @method	bool isRarityPerMille()
* @method	$this setRarityPerMille()
* @method	$this unsetRarityPerMille()

*/

class UniqueGiftBackdrop extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'name'=> 'string',
		'colors'=> 'UniqueGiftBackdropColors',
		'rarity_per_mille'=> 'int',
	];

}