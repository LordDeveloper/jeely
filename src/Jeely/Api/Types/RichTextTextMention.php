<?php

namespace Jeely\Api\Types;

/**
 * @class RichTextTextMention
 * @description A mention of a Telegram user by their identifier.
 *
 * @method string getType() Type of the rich text, always “text_mention”
 * @method RichText getText() The text
 * @method User getUser() The mentioned user
 *
 * @method bool isType()
 * @method bool isText()
 * @method bool isUser()
 *
 * @method $this setType()
 * @method $this setText()
 * @method $this setUser()
 *
 * @method $this unsetType()
 * @method $this unsetText()
 * @method $this unsetUser()
 *
 * @property string $type Type of the rich text, always “text_mention”
 * @property RichText $text The text
 * @property User $user The mentioned user
 *
 * @see https://core.telegram.org/bots/api#richtexttextmention
 */
class RichTextTextMention extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'text' => 'RichText',
        'user' => 'User',
    ];
}
