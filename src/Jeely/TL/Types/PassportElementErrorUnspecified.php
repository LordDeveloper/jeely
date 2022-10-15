<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class PassportElementErrorUnspecified
 * @description Represents an issue in an unspecified place. The error is considered resolved when new data is added.
 *
 * @method string getSource() Error source, must be unspecified
 * @method string getType() Type of element of the user's Telegram Passport which has the issue
 * @method string getElementHash() Base64-encoded element hash
 * @method string getMessage() Error message
 *
 * @method bool isSource()
 * @method bool isType()
 * @method bool isElementHash()
 * @method bool isMessage()
 *
 * @method $this setSource()
 * @method $this setType()
 * @method $this setElementHash()
 * @method $this setMessage()
 *
 * @method $this unsetSource()
 * @method $this unsetType()
 * @method $this unsetElementHash()
 * @method $this unsetMessage()
 *
 * @property string $source Error source, must be unspecified
 * @property string $type Type of element of the user's Telegram Passport which has the issue
 * @property string $element_hash Base64-encoded element hash
 * @property string $message Error message
 *
 * @see https://core.telegram.org/bots/api#passportelementerrorunspecified
 */
class PassportElementErrorUnspecified extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'source' => 'string',
        'type' => 'string',
        'element_hash' => 'string',
        'message' => 'string',
    ];
}