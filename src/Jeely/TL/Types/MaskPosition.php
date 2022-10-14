<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class MaskPosition
 * @description This object describes the position on faces where a mask should be placed by default.
 *
 * @method string getPoint() The part of the face relative to which the mask should be placed. One of “forehead”, “eyes”, “mouth”, or “chin”.
 * @method float getXShift() Shift by X-axis measured in widths of the mask scaled to the face size, from left to right. For example, choosing -1.0 will place mask just to the left of the default mask position.
 * @method float getYShift() Shift by Y-axis measured in heights of the mask scaled to the face size, from top to bottom. For example, 1.0 will place the mask just below the default mask position.
 * @method float getScale() Mask scaling coefficient. For example, 2.0 means double size.
 *
 * @method bool isPoint()
 * @method bool isXShift()
 * @method bool isYShift()
 * @method bool isScale()
 *
 * @method $this setPoint()
 * @method $this setXShift()
 * @method $this setYShift()
 * @method $this setScale()
 *
 * @method $this unsetPoint()
 * @method $this unsetXShift()
 * @method $this unsetYShift()
 * @method $this unsetScale()
 *
 * @property string $point The part of the face relative to which the mask should be placed. One of “forehead”, “eyes”, “mouth”, or “chin”.
 * @property float $x_shift Shift by X-axis measured in widths of the mask scaled to the face size, from left to right. For example, choosing -1.0 will place mask just to the left of the default mask position.
 * @property float $y_shift Shift by Y-axis measured in heights of the mask scaled to the face size, from top to bottom. For example, 1.0 will place the mask just below the default mask position.
 * @property float $scale Mask scaling coefficient. For example, 2.0 means double size.
 *
 * @see https://core.telegram.org/bots/api#maskposition 
 */
class MaskPosition extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
		'point' => 'string',
		'x_shift' => 'float',
		'y_shift' => 'float',
		'scale' => 'float',
	];
}