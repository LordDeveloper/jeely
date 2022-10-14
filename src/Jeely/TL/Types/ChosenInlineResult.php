<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class ChosenInlineResult
 * @description Represents a result of an inline query that was chosen by the user and sent to their chat partner.
 *
 * @method string getResultId() The unique identifier for the result that was chosen
 * @method User getFrom() The user that chose the result
 * @method Location getLocation() Optional. Sender location, only for bots that require user location
 * @method string getInlineMessageId() Optional. Identifier of the sent inline message. Available only if there is an inline keyboard attached to the message. Will be also received in callback queries and can be used to edit the message.
 * @method string getQuery() The query that was used to obtain the result
 *
 * @method bool isResultId()
 * @method bool isFrom()
 * @method bool isLocation()
 * @method bool isInlineMessageId()
 * @method bool isQuery()
 *
 * @method $this setResultId()
 * @method $this setFrom()
 * @method $this setLocation()
 * @method $this setInlineMessageId()
 * @method $this setQuery()
 *
 * @method $this unsetResultId()
 * @method $this unsetFrom()
 * @method $this unsetLocation()
 * @method $this unsetInlineMessageId()
 * @method $this unsetQuery()
 *
 * @property string $result_id The unique identifier for the result that was chosen
 * @property User $from The user that chose the result
 * @property Location $location Optional. Sender location, only for bots that require user location
 * @property string $inline_message_id Optional. Identifier of the sent inline message. Available only if there is an inline keyboard attached to the message. Will be also received in callback queries and can be used to edit the message.
 * @property string $query The query that was used to obtain the result
 *
 * @see https://core.telegram.org/bots/api#choseninlineresult 
 */
class ChosenInlineResult extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
		'result_id' => 'string',
		'from' => 'User',
		'location' => 'Location',
		'inline_message_id' => 'string',
		'query' => 'string',
	];
}