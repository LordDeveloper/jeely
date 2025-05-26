<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class InputPollOption
* @description This object contains information about one answer option in a poll to be sent.
*
* @property	string $text Option text, 1-100 characters
* @method	string getText() Option text, 1-100 characters
* @method	bool isText()
* @method	$this setText()
* @method	$this unsetText()

* @property	string $text_parse_mode Optional. Mode for parsing entities in the text. See formatting options for more details. Currently, only custom emoji entities are allowed
* @method	string getTextParseMode() Optional. Mode for parsing entities in the text. See formatting options for more details. Currently, only custom emoji entities are allowed
* @method	bool isTextParseMode()
* @method	$this setTextParseMode()
* @method	$this unsetTextParseMode()

* @property	MessageEntity[] $text_entities Optional. A JSON-serialized list of special entities that appear in the poll option text. It can be specified instead of text_parse_mode
* @method	MessageEntity[] getTextEntities() Optional. A JSON-serialized list of special entities that appear in the poll option text. It can be specified instead of text_parse_mode
* @method	bool isTextEntities()
* @method	$this setTextEntities()
* @method	$this unsetTextEntities()

*/

class InputPollOption extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'text'=> 'string',
		'text_parse_mode'=> 'string',
		'text_entities'=> 'MessageEntity[]',
	];

}