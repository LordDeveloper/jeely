<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class SentWebAppMessage
 * @description Describes an inline message sent by a Web App on behalf of a user.
 *
 * @method string getInlineMessageId() Optional. Identifier of the sent inline message. Available only if there is an inline keyboard attached to the message.
 *
 * @method bool isInlineMessageId()
 *
 * @method $this setInlineMessageId()
 *
 * @method $this unsetInlineMessageId()
 *
 * @property string $inline_message_id Optional. Identifier of the sent inline message. Available only if there is an inline keyboard attached to the message.
 *
 * @see https://core.telegram.org/bots/api#sentwebappmessage 
 */
class SentWebAppMessage extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
		'inline_message_id' => 'string',
	];
}