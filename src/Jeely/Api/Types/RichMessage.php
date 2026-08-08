<?php

namespace Jeely\Api\Types;

/**
 * @class RichMessage
 * @description Rich formatted message.
 *
 * @method RichBlock[] getBlocks() Content of the message
 * @method bool getIsRtl() Optional. True, if the rich message must be shown right-to-left
 *
 * @method bool isBlocks()
 * @method bool isIsRtl()
 *
 * @method $this setBlocks()
 * @method $this setIsRtl()
 *
 * @method $this unsetBlocks()
 * @method $this unsetIsRtl()
 *
 * @property RichBlock[] $blocks Content of the message
 * @property bool $is_rtl Optional. True, if the rich message must be shown right-to-left
 *
 * @see https://core.telegram.org/bots/api#richmessage
 */
class RichMessage extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'blocks' => 'RichBlock[]',
        'is_rtl' => 'bool',
    ];
}
