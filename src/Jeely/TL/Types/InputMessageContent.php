<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class InputMessageContent
 * @description This object represents the content of a message to be sent as a result of an inline query. Telegram clients currently support the following 5 types:
 *
 * @mixin  InputTextMessageContent
 * @mixin  InputVenueMessageContent
 *
 * @see https://core.telegram.org/bots/api#inputmessagecontent 
 */
class InputMessageContent extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        InputTextMessageContent::class,
        InputVenueMessageContent::class,
	];
}