<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class CopyTextButton
* @description This object represents an inline keyboard button that copies specified text to the clipboard.
*
* @property	string $text The text to be copied to the clipboard; 1-256 characters
* @method	string getText() The text to be copied to the clipboard; 1-256 characters
* @method	bool isText()
* @method	$this setText()
* @method	$this unsetText()

*/

class CopyTextButton extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'text'=> 'string',
	];

}