<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;
use Jeely\TLObject\Types\InputTextMessageContent;
use Jeely\TLObject\Types\InputLocationMessageContent;
use Jeely\TLObject\Types\InputVenueMessageContent;
use Jeely\TLObject\Types\InputContactMessageContent;
use Jeely\TLObject\Types\InputInvoiceMessageContent;


/**
* @class InputMessageContent
* @description This object represents the content of a message to be sent as a result of an inline query. Telegram clients currently support the following 5 types:
*
*/

class InputMessageContent extends TLObject
{
	const JSON_PROPERTY_MAP = [
		InputTextMessageContent::class,
		InputLocationMessageContent::class,
		InputVenueMessageContent::class,
		InputContactMessageContent::class,
		InputInvoiceMessageContent::class,
	];

}