<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class ShippingOption
* @description This object represents one shipping option.
*
* @property	string $id Shipping option identifier
* @method	string getId() Shipping option identifier
* @method	bool isId()
* @method	$this setId()
* @method	$this unsetId()

* @property	string $title Option title
* @method	string getTitle() Option title
* @method	bool isTitle()
* @method	$this setTitle()
* @method	$this unsetTitle()

* @property	LabeledPrice[] $prices List of price portions
* @method	LabeledPrice[] getPrices() List of price portions
* @method	bool isPrices()
* @method	$this setPrices()
* @method	$this unsetPrices()

*/

class ShippingOption extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'id'=> 'string',
		'title'=> 'string',
		'prices'=> 'LabeledPrice[]',
	];

}