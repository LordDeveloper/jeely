<?php

namespace Jeely\Api\Types;

/**
 * @class InputRichBlockMathematicalExpression
 * @description A block with a mathematical expression in LaTeX format, corresponding to the custom HTML tag <tg-math-block>.
 *
 * @method string getType() Type of the block, always “mathematical_expression”
 * @method string getExpression() The mathematical expression in LaTeX format
 *
 * @method bool isType()
 * @method bool isExpression()
 *
 * @method $this setType()
 * @method $this setExpression()
 *
 * @method $this unsetType()
 * @method $this unsetExpression()
 *
 * @property string $type Type of the block, always “mathematical_expression”
 * @property string $expression The mathematical expression in LaTeX format
 *
 * @see https://core.telegram.org/bots/api#inputrichblockmathematicalexpression
 */
class InputRichBlockMathematicalExpression extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'expression' => 'string',
    ];
}
