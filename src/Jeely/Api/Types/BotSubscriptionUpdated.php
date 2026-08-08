<?php

namespace Jeely\Api\Types;

/**
 * @class BotSubscriptionUpdated
 * @description This object contains information about changes to a user payment subscription toward the current bot.
 *
 * @method User getUser() User who subscribed for payments toward the bot
 * @method string getInvoicePayload() Bot-specified invoice payload
 * @method string getState() The new state of the subscription. Currently, it can be one of “canceled” if the user canceled the subscription, “active” if the user re-enabled a previously canceled subscription, or “failed” if payment for the subscription failed.
 *
 * @method bool isUser()
 * @method bool isInvoicePayload()
 * @method bool isState()
 *
 * @method $this setUser()
 * @method $this setInvoicePayload()
 * @method $this setState()
 *
 * @method $this unsetUser()
 * @method $this unsetInvoicePayload()
 * @method $this unsetState()
 *
 * @property User $user User who subscribed for payments toward the bot
 * @property string $invoice_payload Bot-specified invoice payload
 * @property string $state The new state of the subscription. Currently, it can be one of “canceled” if the user canceled the subscription, “active” if the user re-enabled a previously canceled subscription, or “failed” if payment for the subscription failed.
 *
 * @see https://core.telegram.org/bots/api#botsubscriptionupdated
 */
class BotSubscriptionUpdated extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'user' => 'User',
        'invoice_payload' => 'string',
        'state' => 'string',
    ];
}
