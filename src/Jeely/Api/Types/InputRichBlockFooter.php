<?php

namespace Jeely\Api\Types;

/**
 * @class InputRichBlockFooter
 * @description A footer, corresponding to the HTML tag <footer>.
 *
 * @method string getType() Type of the block, always “footer”
 * @method RichText getText() Text of the block
 *
 * @method bool isType()
 * @method bool isText()
 *
 * @method $this setType()
 * @method $this setText()
 *
 * @method $this unsetType()
 * @method $this unsetText()
 *
 * @property string $type Type of the block, always “footer”
 * @property RichText $text Text of the block
 *
 * @see https://core.telegram.org/bots/api#inputrichblockfooter
 */
class InputRichBlockFooter extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'text' => 'RichText',
    ];
}
