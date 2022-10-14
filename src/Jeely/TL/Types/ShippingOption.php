<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class ShippingOption
 * @description This object represents one shipping option.
 *
 * @method string getId() Shipping option identifier
 * @method string getTitle() Option title
 * @method LabeledPrice[] getPrices() List of price portions
 *
 * @method bool isId()
 * @method bool isTitle()
 * @method bool isPrices()
 *
 * @method $this setId()
 * @method $this setTitle()
 * @method $this setPrices()
 *
 * @method $this unsetId()
 * @method $this unsetTitle()
 * @method $this unsetPrices()
 *
 * @property string $id Shipping option identifier
 * @property string $title Option title
 * @property LabeledPrice[] $prices List of price portions
 *
 * @see https://core.telegram.org/bots/api#shippingoption 
 */
class ShippingOption extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
		'id' => 'string',
		'title' => 'string',
		'prices' => 'LabeledPrice[]',
	];
}