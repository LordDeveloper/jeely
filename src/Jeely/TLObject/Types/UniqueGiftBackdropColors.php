<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class UniqueGiftBackdropColors
* @description This object describes the colors of the backdrop of a unique gift.
*
* @property	int $center_color The color in the center of the backdrop in RGB format
* @method	int getCenterColor() The color in the center of the backdrop in RGB format
* @method	bool isCenterColor()
* @method	$this setCenterColor()
* @method	$this unsetCenterColor()

* @property	int $edge_color The color on the edges of the backdrop in RGB format
* @method	int getEdgeColor() The color on the edges of the backdrop in RGB format
* @method	bool isEdgeColor()
* @method	$this setEdgeColor()
* @method	$this unsetEdgeColor()

* @property	int $symbol_color The color to be applied to the symbol in RGB format
* @method	int getSymbolColor() The color to be applied to the symbol in RGB format
* @method	bool isSymbolColor()
* @method	$this setSymbolColor()
* @method	$this unsetSymbolColor()

* @property	int $text_color The color for the text on the backdrop in RGB format
* @method	int getTextColor() The color for the text on the backdrop in RGB format
* @method	bool isTextColor()
* @method	$this setTextColor()
* @method	$this unsetTextColor()

*/

class UniqueGiftBackdropColors extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'center_color'=> 'int',
		'edge_color'=> 'int',
		'symbol_color'=> 'int',
		'text_color'=> 'int',
	];

}