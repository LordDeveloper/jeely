<?php

namespace Jeely\Api\Types;

/**
 * @class RichBlockCaption
 * @description Caption of a rich formatted block.
 *
 * @method RichText getText() Block caption
 * @method RichText getCredit() Optional. Block credit which corresponds to the HTML tag <cite>
 *
 * @method bool isText()
 * @method bool isCredit()
 *
 * @method $this setText()
 * @method $this setCredit()
 *
 * @method $this unsetText()
 * @method $this unsetCredit()
 *
 * @property RichText $text Block caption
 * @property RichText $credit Optional. Block credit which corresponds to the HTML tag <cite>
 *
 * @see https://core.telegram.org/bots/api#richblockcaption
 */
class RichBlockCaption extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'text' => 'RichText',
        'credit' => 'RichText',
    ];
}
