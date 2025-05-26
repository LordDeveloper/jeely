<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class ShippingQuery
* @description This object contains information about an incoming shipping query.
*
* @property	string $id Unique query identifier
* @method	string getId() Unique query identifier
* @method	bool isId()
* @method	$this setId()
* @method	$this unsetId()

* @property	User $from User who sent the query
* @method	User getFrom() User who sent the query
* @method	bool isFrom()
* @method	$this setFrom()
* @method	$this unsetFrom()

* @property	string $invoice_payload Bot-specified invoice payload
* @method	string getInvoicePayload() Bot-specified invoice payload
* @method	bool isInvoicePayload()
* @method	$this setInvoicePayload()
* @method	$this unsetInvoicePayload()

* @property	ShippingAddress $shipping_address User specified shipping address
* @method	ShippingAddress getShippingAddress() User specified shipping address
* @method	bool isShippingAddress()
* @method	$this setShippingAddress()
* @method	$this unsetShippingAddress()

*/

class ShippingQuery extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'id'=> 'string',
		'from'=> 'User',
		'invoice_payload'=> 'string',
		'shipping_address'=> 'ShippingAddress',
	];

}