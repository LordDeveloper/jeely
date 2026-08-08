<?php

namespace Jeely\Api\Types;

use Jeely\Nectar;

/**
 * @class Error
 * @description In case of an unsuccessful request, 'ok' equals false and the error is explained in the 'description'.
 *
 * @method bool getOk()
 * @method string getDescription()
 * @method int getErrorCode()
 * @method ResponseParameters getParameters()
 *
 * @property bool $ok
 * @property string $description
 * @property int $error_code
 * @property ResponseParameters $parameters
 */
class Error extends Nectar
{
    public const JSON_PROPERTY_MAP = [
        'ok' => 'bool',
        'description' => 'string',
        'error_code' => 'int',
        'parameters' => 'ResponseParameters',
    ];
}
