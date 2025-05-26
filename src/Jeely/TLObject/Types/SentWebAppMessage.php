<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class SentWebAppMessage
* @description Describes an inline message sent by a Web App on behalf of a user.
*
* @property	string $inline_message_id Optional. Identifier of the sent inline message. Available only if there is an inline keyboard attached to the message.
* @method	string getInlineMessageId() Optional. Identifier of the sent inline message. Available only if there is an inline keyboard attached to the message.
* @method	bool isInlineMessageId()
* @method	$this setInlineMessageId()
* @method	$this unsetInlineMessageId()

*/

class SentWebAppMessage extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'inline_message_id'=> 'string',
	];

}