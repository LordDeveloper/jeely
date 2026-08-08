<?php

namespace Jeely\Api\Types;

/**
 * @class RichTextMention
 * @description A mention by a username.
 *
 * @method string getType() Type of the rich text, always “mention”
 * @method RichText getText() The text
 * @method string getUsername() The username
 *
 * @method bool isType()
 * @method bool isText()
 * @method bool isUsername()
 *
 * @method $this setType()
 * @method $this setText()
 * @method $this setUsername()
 *
 * @method $this unsetType()
 * @method $this unsetText()
 * @method $this unsetUsername()
 *
 * @property string $type Type of the rich text, always “mention”
 * @property RichText $text The text
 * @property string $username The username
 *
 * @see https://core.telegram.org/bots/api#richtextmention
 */
class RichTextMention extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'text' => 'RichText',
        'username' => 'string',
    ];
}
