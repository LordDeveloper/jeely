<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class WebhookInfo
 * @description Describes the current status of a webhook.
 *
 * @method string getUrl() Webhook URL, may be empty if webhook is not set up
 * @method bool getHasCustomCertificate() True, if a custom certificate was provided for webhook certificate checks
 * @method int getPendingUpdateCount() Number of updates awaiting delivery
 * @method string getIpAddress() Optional. Currently used webhook IP address
 * @method int getLastErrorDate() Optional. Unix time for the most recent error that happened when trying to deliver an update via webhook
 * @method string getLastErrorMessage() Optional. Error message in human-readable format for the most recent error that happened when trying to deliver an update via webhook
 * @method int getLastSynchronizationErrorDate() Optional. Unix time of the most recent error that happened when trying to synchronize available updates with Telegram datacenters
 * @method int getMaxConnections() Optional. The maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery
 * @method string[] getAllowedUpdates() Optional. A list of update types the bot is subscribed to. Defaults to all update types except chat_member
 *
 * @method bool isUrl()
 * @method bool isHasCustomCertificate()
 * @method bool isPendingUpdateCount()
 * @method bool isIpAddress()
 * @method bool isLastErrorDate()
 * @method bool isLastErrorMessage()
 * @method bool isLastSynchronizationErrorDate()
 * @method bool isMaxConnections()
 * @method bool isAllowedUpdates()
 *
 * @method $this setUrl()
 * @method $this setHasCustomCertificate()
 * @method $this setPendingUpdateCount()
 * @method $this setIpAddress()
 * @method $this setLastErrorDate()
 * @method $this setLastErrorMessage()
 * @method $this setLastSynchronizationErrorDate()
 * @method $this setMaxConnections()
 * @method $this setAllowedUpdates()
 *
 * @method $this unsetUrl()
 * @method $this unsetHasCustomCertificate()
 * @method $this unsetPendingUpdateCount()
 * @method $this unsetIpAddress()
 * @method $this unsetLastErrorDate()
 * @method $this unsetLastErrorMessage()
 * @method $this unsetLastSynchronizationErrorDate()
 * @method $this unsetMaxConnections()
 * @method $this unsetAllowedUpdates()
 *
 * @property string $url Webhook URL, may be empty if webhook is not set up
 * @property bool $has_custom_certificate True, if a custom certificate was provided for webhook certificate checks
 * @property int $pending_update_count Number of updates awaiting delivery
 * @property string $ip_address Optional. Currently used webhook IP address
 * @property int $last_error_date Optional. Unix time for the most recent error that happened when trying to deliver an update via webhook
 * @property string $last_error_message Optional. Error message in human-readable format for the most recent error that happened when trying to deliver an update via webhook
 * @property int $last_synchronization_error_date Optional. Unix time of the most recent error that happened when trying to synchronize available updates with Telegram datacenters
 * @property int $max_connections Optional. The maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery
 * @property string[] $allowed_updates Optional. A list of update types the bot is subscribed to. Defaults to all update types except chat_member
 *
 * @see https://core.telegram.org/bots/api#webhookinfo 
 */
class WebhookInfo extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
		'url' => 'string',
		'has_custom_certificate' => 'bool',
		'pending_update_count' => 'int',
		'ip_address' => 'string',
		'last_error_date' => 'int',
		'last_error_message' => 'string',
		'last_synchronization_error_date' => 'int',
		'max_connections' => 'int',
		'allowed_updates' => 'string[]',
	];
}