<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;

/**
 * @class Error
 * @description In case of an unsuccessful request, 'ok' equals false and the error is explained in the 'description'.
 *
 * @method bool getOk()
 * @method string getDescription()
 * @method int getErrorCode()
 * @method ResponseParameters getParameters()
 *
 * @method bool isOk()
 * @method bool isDescription()
 * @method bool isErrorCode()
 * @method bool isParameters()
 *
 * @method $this setOk()
 * @method $this setDescription()
 * @method $this setErrorCode()
 * @method $this setParameters()
 *
 * @method $this unsetOk()
 * @method $this unsetDescription()
 * @method $this unsetErrorCode()
 * @method $this unsetParameters()
 *
 * @property bool $ok
 * @property string $description
 * @property int $error_code
 * @property ResponseParameters $parameters
 */
class Error extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'ok' => 'bool',
        'description' => 'string',
        'error_code' => 'int',
        'parameters' => 'ResponseParameters',
    ];
}