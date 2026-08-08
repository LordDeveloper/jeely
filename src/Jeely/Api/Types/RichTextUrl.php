<?php

namespace Jeely\Api\Types;

/**
 * @class RichTextUrl
 * @description A text with a link.
 *
 * @method string getType() Type of the rich text, always “url”
 * @method RichText getText() The text
 * @method string getUrl() URL of the link
 *
 * @method bool isType()
 * @method bool isText()
 * @method bool isUrl()
 *
 * @method $this setType()
 * @method $this setText()
 * @method $this setUrl()
 *
 * @method $this unsetType()
 * @method $this unsetText()
 * @method $this unsetUrl()
 *
 * @property string $type Type of the rich text, always “url”
 * @property RichText $text The text
 * @property string $url URL of the link
 *
 * @see https://core.telegram.org/bots/api#richtexturl
 */
class RichTextUrl extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'text' => 'RichText',
        'url' => 'string',
    ];
}
