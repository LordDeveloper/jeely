<?php

namespace Jeely\Api\Types;

/**
 * @class RichBlockPreformatted
 * @description A preformatted text block, corresponding to the nested HTML tags <pre> and <code>.
 *
 * @method string getType() Type of the block, always “pre”
 * @method RichText getText() Text of the block
 * @method string getLanguage() Optional. The programming language of the text
 *
 * @method bool isType()
 * @method bool isText()
 * @method bool isLanguage()
 *
 * @method $this setType()
 * @method $this setText()
 * @method $this setLanguage()
 *
 * @method $this unsetType()
 * @method $this unsetText()
 * @method $this unsetLanguage()
 *
 * @property string $type Type of the block, always “pre”
 * @property RichText $text Text of the block
 * @property string $language Optional. The programming language of the text
 *
 * @see https://core.telegram.org/bots/api#richblockpreformatted
 */
class RichBlockPreformatted extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'text' => 'RichText',
        'language' => 'string',
    ];
}
