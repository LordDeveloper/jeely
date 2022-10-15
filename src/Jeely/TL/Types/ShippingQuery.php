<?php

namespace Jeely\TL\Types;

use Jeely\LazyUpdates;


/**
 * @class ShippingQuery
 * @description This object contains information about an incoming shipping query.
 *
 * @method string getId() Unique query identifier
 * @method User getFrom() User who sent the query
 * @method string getInvoicePayload() Bot specified invoice payload
 * @method ShippingAddress getShippingAddress() User specified shipping address
 *
 * @method bool isId()
 * @method bool isFrom()
 * @method bool isInvoicePayload()
 * @method bool isShippingAddress()
 *
 * @method $this setId()
 * @method $this setFrom()
 * @method $this setInvoicePayload()
 * @method $this setShippingAddress()
 *
 * @method $this unsetId()
 * @method $this unsetFrom()
 * @method $this unsetInvoicePayload()
 * @method $this unsetShippingAddress()
 *
 * @property string $id Unique query identifier
 * @property User $from User who sent the query
 * @property string $invoice_payload Bot specified invoice payload
 * @property ShippingAddress $shipping_address User specified shipping address
 *
 * @see https://core.telegram.org/bots/api#shippingquery
 */
class ShippingQuery extends LazyUpdates
{
    const JSON_PROPERTY_MAP = [
        'id' => 'string',
        'from' => 'User',
        'invoice_payload' => 'string',
        'shipping_address' => 'ShippingAddress',
    ];
}