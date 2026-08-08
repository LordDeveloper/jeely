<?php

namespace Jeely\Api\Types;

/**
 * @class RichTextCashtag
 * @description A cashtag.
 *
 * @method string getType() Type of the rich text, always “cashtag”
 * @method RichText getText() The text
 * @method string getCashtag() The cashtag
 *
 * @method bool isType()
 * @method bool isText()
 * @method bool isCashtag()
 *
 * @method $this setType()
 * @method $this setText()
 * @method $this setCashtag()
 *
 * @method $this unsetType()
 * @method $this unsetText()
 * @method $this unsetCashtag()
 *
 * @property string $type Type of the rich text, always “cashtag”
 * @property RichText $text The text
 * @property string $cashtag The cashtag
 *
 * @see https://core.telegram.org/bots/api#richtextcashtag
 */
class RichTextCashtag extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'text' => 'RichText',
        'cashtag' => 'string',
    ];
}
