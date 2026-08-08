<?php

namespace Jeely\Api\Types;

/**
 * @class RichTextHashtag
 * @description A hashtag.
 *
 * @method string getType() Type of the rich text, always “hashtag”
 * @method RichText getText() The text
 * @method string getHashtag() The hashtag
 *
 * @method bool isType()
 * @method bool isText()
 * @method bool isHashtag()
 *
 * @method $this setType()
 * @method $this setText()
 * @method $this setHashtag()
 *
 * @method $this unsetType()
 * @method $this unsetText()
 * @method $this unsetHashtag()
 *
 * @property string $type Type of the rich text, always “hashtag”
 * @property RichText $text The text
 * @property string $hashtag The hashtag
 *
 * @see https://core.telegram.org/bots/api#richtexthashtag
 */
class RichTextHashtag extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'text' => 'RichText',
        'hashtag' => 'string',
    ];
}
