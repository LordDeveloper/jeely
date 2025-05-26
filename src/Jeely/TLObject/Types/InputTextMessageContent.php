<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class InputTextMessageContent
* @description Represents the content of a text message to be sent as the result of an inline query.
*
* @property	string $message_text Text of the message to be sent, 1-4096 characters
* @method	string getMessageText() Text of the message to be sent, 1-4096 characters
* @method	bool isMessageText()
* @method	$this setMessageText()
* @method	$this unsetMessageText()

* @property	string $parse_mode Optional. Mode for parsing entities in the message text. See formatting options for more details.
* @method	string getParseMode() Optional. Mode for parsing entities in the message text. See formatting options for more details.
* @method	bool isParseMode()
* @method	$this setParseMode()
* @method	$this unsetParseMode()

* @property	MessageEntity[] $entities Optional. List of special entities that appear in message text, which can be specified instead of parse_mode
* @method	MessageEntity[] getEntities() Optional. List of special entities that appear in message text, which can be specified instead of parse_mode
* @method	bool isEntities()
* @method	$this setEntities()
* @method	$this unsetEntities()

* @property	LinkPreviewOptions $link_preview_options Optional. Link preview generation options for the message
* @method	LinkPreviewOptions getLinkPreviewOptions() Optional. Link preview generation options for the message
* @method	bool isLinkPreviewOptions()
* @method	$this setLinkPreviewOptions()
* @method	$this unsetLinkPreviewOptions()

*/

class InputTextMessageContent extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'message_text'=> 'string',
		'parse_mode'=> 'string',
		'entities'=> 'MessageEntity[]',
		'link_preview_options'=> 'LinkPreviewOptions',
	];

}