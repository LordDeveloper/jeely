<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class ProximityAlertTriggered
* @description This object represents the content of a service message, sent whenever a user in the chat triggers a proximity alert set by another user.
*
* @property	User $traveler User that triggered the alert
* @method	User getTraveler() User that triggered the alert
* @method	bool isTraveler()
* @method	$this setTraveler()
* @method	$this unsetTraveler()

* @property	User $watcher User that set the alert
* @method	User getWatcher() User that set the alert
* @method	bool isWatcher()
* @method	$this setWatcher()
* @method	$this unsetWatcher()

* @property	int $distance The distance between the users
* @method	int getDistance() The distance between the users
* @method	bool isDistance()
* @method	$this setDistance()
* @method	$this unsetDistance()

*/

class ProximityAlertTriggered extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'traveler'=> 'User',
		'watcher'=> 'User',
		'distance'=> 'int',
	];

}