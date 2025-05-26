<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class ChosenInlineResult
* @description Represents a result of an inline query that was chosen by the user and sent to their chat partner.
*
* @property	string $result_id The unique identifier for the result that was chosen
* @method	string getResultId() The unique identifier for the result that was chosen
* @method	bool isResultId()
* @method	$this setResultId()
* @method	$this unsetResultId()

* @property	User $from The user that chose the result
* @method	User getFrom() The user that chose the result
* @method	bool isFrom()
* @method	$this setFrom()
* @method	$this unsetFrom()

* @property	Location $location Optional. Sender location, only for bots that require user location
* @method	Location getLocation() Optional. Sender location, only for bots that require user location
* @method	bool isLocation()
* @method	$this setLocation()
* @method	$this unsetLocation()

* @property	string $inline_message_id Optional. Identifier of the sent inline message. Available only if there is an inline keyboard attached to the message. Will be also received in callback queries and can be used to edit the message.
* @method	string getInlineMessageId() Optional. Identifier of the sent inline message. Available only if there is an inline keyboard attached to the message. Will be also received in callback queries and can be used to edit the message.
* @method	bool isInlineMessageId()
* @method	$this setInlineMessageId()
* @method	$this unsetInlineMessageId()

* @property	string $query The query that was used to obtain the result
* @method	string getQuery() The query that was used to obtain the result
* @method	bool isQuery()
* @method	$this setQuery()
* @method	$this unsetQuery()

*/

class ChosenInlineResult extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'result_id'=> 'string',
		'from'=> 'User',
		'location'=> 'Location',
		'inline_message_id'=> 'string',
		'query'=> 'string',
	];

}