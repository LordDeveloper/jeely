<?php

namespace Jeely\Api\Types;

/**
 * @class CopyTextButton
 * @description This object represents an inline keyboard button that copies specified text to the clipboard.
 *
 * @method string getText() The text to be copied to the clipboard; 1-256 characters
 *
 * @method bool isText()
 *
 * @method $this setText()
 *
 * @method $this unsetText()
 *
 * @property string $text The text to be copied to the clipboard; 1-256 characters
 *
 * @see https://core.telegram.org/bots/api#copytextbutton
 */
class CopyTextButton extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'text' => 'string',
    ];
}
