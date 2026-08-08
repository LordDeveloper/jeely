<?php

namespace Jeely\Api\Types;

/**
 * @class RichTextReferenceLink
 * @description A link to a reference.
 *
 * @method string getType() Type of the rich text, always “reference_link”
 * @method RichText getText() The link text
 * @method string getReferenceName() The name of the reference
 *
 * @method bool isType()
 * @method bool isText()
 * @method bool isReferenceName()
 *
 * @method $this setType()
 * @method $this setText()
 * @method $this setReferenceName()
 *
 * @method $this unsetType()
 * @method $this unsetText()
 * @method $this unsetReferenceName()
 *
 * @property string $type Type of the rich text, always “reference_link”
 * @property RichText $text The link text
 * @property string $reference_name The name of the reference
 *
 * @see https://core.telegram.org/bots/api#richtextreferencelink
 */
class RichTextReferenceLink extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'text' => 'RichText',
        'reference_name' => 'string',
    ];
}
