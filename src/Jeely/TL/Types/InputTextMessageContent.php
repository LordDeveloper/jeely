<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class InputTextMessageContent
 * @description Represents the content of a text message to be sent as the result of an inline query.
 *
 * @method string getMessageText() Text of the message to be sent, 1-4096 characters
 * @method string getParseMode() Optional. Mode for parsing entities in the message text. See formatting options for more details.
 * @method MessageEntity[] getEntities() Optional. List of special entities that appear in message text, which can be specified instead of parse_mode
 * @method bool getDisableWebPagePreview() Optional. Disables link previews for links in the sent message
 *
 * @method bool isMessageText()
 * @method bool isParseMode()
 * @method bool isEntities()
 * @method bool isDisableWebPagePreview()
 *
 * @method $this setMessageText()
 * @method $this setParseMode()
 * @method $this setEntities()
 * @method $this setDisableWebPagePreview()
 *
 * @method $this unsetMessageText()
 * @method $this unsetParseMode()
 * @method $this unsetEntities()
 * @method $this unsetDisableWebPagePreview()
 *
 * @property string $message_text Text of the message to be sent, 1-4096 characters
 * @property string $parse_mode Optional. Mode for parsing entities in the message text. See formatting options for more details.
 * @property MessageEntity[] $entities Optional. List of special entities that appear in message text, which can be specified instead of parse_mode
 * @property bool $disable_web_page_preview Optional. Disables link previews for links in the sent message
 *
 * @see https://core.telegram.org/bots/api#inputtextmessagecontent 
 */
class InputTextMessageContent extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
		'message_text' => 'string',
		'parse_mode' => 'string',
		'entities' => 'MessageEntity[]',
		'disable_web_page_preview' => 'bool',
	];
}