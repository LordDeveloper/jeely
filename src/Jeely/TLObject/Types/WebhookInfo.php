<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class WebhookInfo
* @description Describes the current status of a webhook.
*
* @property	string $url Webhook URL, may be empty if webhook is not set up
* @method	string getUrl() Webhook URL, may be empty if webhook is not set up
* @method	bool isUrl()
* @method	$this setUrl()
* @method	$this unsetUrl()

* @property	bool $has_custom_certificate True, if a custom certificate was provided for webhook certificate checks
* @method	bool getHasCustomCertificate() True, if a custom certificate was provided for webhook certificate checks
* @method	bool isHasCustomCertificate()
* @method	$this setHasCustomCertificate()
* @method	$this unsetHasCustomCertificate()

* @property	int $pending_update_count Number of updates awaiting delivery
* @method	int getPendingUpdateCount() Number of updates awaiting delivery
* @method	bool isPendingUpdateCount()
* @method	$this setPendingUpdateCount()
* @method	$this unsetPendingUpdateCount()

* @property	string $ip_address Optional. Currently used webhook IP address
* @method	string getIpAddress() Optional. Currently used webhook IP address
* @method	bool isIpAddress()
* @method	$this setIpAddress()
* @method	$this unsetIpAddress()

* @property	int $last_error_date Optional. Unix time for the most recent error that happened when trying to deliver an update via webhook
* @method	int getLastErrorDate() Optional. Unix time for the most recent error that happened when trying to deliver an update via webhook
* @method	bool isLastErrorDate()
* @method	$this setLastErrorDate()
* @method	$this unsetLastErrorDate()

* @property	string $last_error_message Optional. Error message in human-readable format for the most recent error that happened when trying to deliver an update via webhook
* @method	string getLastErrorMessage() Optional. Error message in human-readable format for the most recent error that happened when trying to deliver an update via webhook
* @method	bool isLastErrorMessage()
* @method	$this setLastErrorMessage()
* @method	$this unsetLastErrorMessage()

* @property	int $last_synchronization_error_date Optional. Unix time of the most recent error that happened when trying to synchronize available updates with Telegram datacenters
* @method	int getLastSynchronizationErrorDate() Optional. Unix time of the most recent error that happened when trying to synchronize available updates with Telegram datacenters
* @method	bool isLastSynchronizationErrorDate()
* @method	$this setLastSynchronizationErrorDate()
* @method	$this unsetLastSynchronizationErrorDate()

* @property	int $max_connections Optional. The maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery
* @method	int getMaxConnections() Optional. The maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery
* @method	bool isMaxConnections()
* @method	$this setMaxConnections()
* @method	$this unsetMaxConnections()

* @property	string[] $allowed_updates Optional. A list of update types the bot is subscribed to. Defaults to all update types except chat_member
* @method	string[] getAllowedUpdates() Optional. A list of update types the bot is subscribed to. Defaults to all update types except chat_member
* @method	bool isAllowedUpdates()
* @method	$this setAllowedUpdates()
* @method	$this unsetAllowedUpdates()

*/

class WebhookInfo extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'url'=> 'string',
		'has_custom_certificate'=> 'bool',
		'pending_update_count'=> 'int',
		'ip_address'=> 'string',
		'last_error_date'=> 'int',
		'last_error_message'=> 'string',
		'last_synchronization_error_date'=> 'int',
		'max_connections'=> 'int',
		'allowed_updates'=> 'string[]',
	];

}