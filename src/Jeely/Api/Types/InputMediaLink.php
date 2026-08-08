<?php

namespace Jeely\Api\Types;

/**
 * @class InputMediaLink
 * @description Represents an HTTP link to be sent.
 *
 * @method string getType() Type of the media, must be link
 * @method string getUrl() HTTP URL of the link
 *
 * @method bool isType()
 * @method bool isUrl()
 *
 * @method $this setType()
 * @method $this setUrl()
 *
 * @method $this unsetType()
 * @method $this unsetUrl()
 *
 * @property string $type Type of the media, must be link
 * @property string $url HTTP URL of the link
 *
 * @see https://core.telegram.org/bots/api#inputmedialink
 */
class InputMediaLink extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'url' => 'string',
    ];
}
