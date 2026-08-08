<?php

namespace Jeely\Api\Types;

/**
 * @class InputRichMessageContent
 * @description Represents the content of a rich message to be sent as the result of an inline query.
 *
 * @method InputRichMessage getRichMessage() The message to be sent
 *
 * @method bool isRichMessage()
 *
 * @method $this setRichMessage()
 *
 * @method $this unsetRichMessage()
 *
 * @property InputRichMessage $rich_message The message to be sent
 *
 * @see https://core.telegram.org/bots/api#inputrichmessagecontent
 */
class InputRichMessageContent extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'rich_message' => 'InputRichMessage',
    ];
}
