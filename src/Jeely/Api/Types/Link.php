<?php

namespace Jeely\Api\Types;

/**
 * @class Link
 * @description Represents an HTTP link.
 *
 * @method string getUrl() URL of the link
 *
 * @method bool isUrl()
 *
 * @method $this setUrl()
 *
 * @method $this unsetUrl()
 *
 * @property string $url URL of the link
 *
 * @see https://core.telegram.org/bots/api#link
 */
class Link extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'url' => 'string',
    ];
}
