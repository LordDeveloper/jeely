<?php

namespace Jeely\Api\Types;

/**
 * @class InputTextMessageContent
 * @description Represents the content of a text message to be sent as the result of an inline query.
 *
 * @method string getMessageText() Text of the message to be sent, 1-4096 characters
 * @method string getParseMode() Optional. Mode for parsing entities in the message text. See formatting options for more details.
 * @method MessageEntity[] getEntities() Optional. List of special entities that appear in message text, which can be specified instead of parse_mode
 * @method LinkPreviewOptions getLinkPreviewOptions() Optional. Link preview generation options for the message
 *
 * @method bool isMessageText()
 * @method bool isParseMode()
 * @method bool isEntities()
 * @method bool isLinkPreviewOptions()
 *
 * @method $this setMessageText()
 * @method $this setParseMode()
 * @method $this setEntities()
 * @method $this setLinkPreviewOptions()
 *
 * @method $this unsetMessageText()
 * @method $this unsetParseMode()
 * @method $this unsetEntities()
 * @method $this unsetLinkPreviewOptions()
 *
 * @property string $message_text Text of the message to be sent, 1-4096 characters
 * @property string $parse_mode Optional. Mode for parsing entities in the message text. See formatting options for more details.
 * @property MessageEntity[] $entities Optional. List of special entities that appear in message text, which can be specified instead of parse_mode
 * @property LinkPreviewOptions $link_preview_options Optional. Link preview generation options for the message
 *
 * @see https://core.telegram.org/bots/api#inputtextmessagecontent
 */
class InputTextMessageContent extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'message_text' => 'string',
        'parse_mode' => 'string',
        'entities' => 'MessageEntity[]',
        'link_preview_options' => 'LinkPreviewOptions',
    ];
}
