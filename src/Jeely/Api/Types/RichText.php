<?php

namespace Jeely\Api\Types;

/**
 * @class RichText
 * @description This object represents a rich formatted text. Currently, it can be either a String for plain text, an Array of RichText, or any of the following types:
 *
 *
 * @see https://core.telegram.org/bots/api#richtext
 */
class RichText extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [];
}
