<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class TextQuote
* @description This object contains information about the quoted part of a message that is replied to by the given message.
*
* @property	string $text Text of the quoted part of a message that is replied to by the given message
* @method	string getText() Text of the quoted part of a message that is replied to by the given message
* @method	bool isText()
* @method	$this setText()
* @method	$this unsetText()

* @property	MessageEntity[] $entities Optional. Special entities that appear in the quote. Currently, only bold, italic, underline, strikethrough, spoiler, and custom_emoji entities are kept in quotes.
* @method	MessageEntity[] getEntities() Optional. Special entities that appear in the quote. Currently, only bold, italic, underline, strikethrough, spoiler, and custom_emoji entities are kept in quotes.
* @method	bool isEntities()
* @method	$this setEntities()
* @method	$this unsetEntities()

* @property	int $position Approximate quote position in the original message in UTF-16 code units as specified by the sender
* @method	int getPosition() Approximate quote position in the original message in UTF-16 code units as specified by the sender
* @method	bool isPosition()
* @method	$this setPosition()
* @method	$this unsetPosition()

* @property	bool $is_manual Optional. True, if the quote was chosen manually by the message sender. Otherwise, the quote was added automatically by the server.
* @method	bool getIsManual() Optional. True, if the quote was chosen manually by the message sender. Otherwise, the quote was added automatically by the server.
* @method	bool isIsManual()
* @method	$this setIsManual()
* @method	$this unsetIsManual()

*/

class TextQuote extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'text'=> 'string',
		'entities'=> 'MessageEntity[]',
		'position'=> 'int',
		'is_manual'=> 'bool',
	];

}