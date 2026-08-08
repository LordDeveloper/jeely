<?php

namespace Jeely\Api\Types;

/**
 * @class RichTextMathematicalExpression
 * @description A mathematical expression.
 *
 * @method string getType() Type of the rich text, always “mathematical_expression”
 * @method string getExpression() The expression in LaTeX format
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
 * @property string $type Type of the rich text, always “mathematical_expression”
 * @property string $expression The expression in LaTeX format
 *
 * @see https://core.telegram.org/bots/api#richtextmathematicalexpression
 */
class RichTextMathematicalExpression extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'expression' => 'string',
    ];
}
