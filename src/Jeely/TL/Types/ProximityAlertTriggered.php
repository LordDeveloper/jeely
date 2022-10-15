<?php

namespace Jeely\TL\Types;

use Jeely\LazyUpdates;


/**
 * @class ProximityAlertTriggered
 * @description This object represents the content of a service message, sent whenever a user in the chat triggers a proximity alert set by another user.
 *
 * @method User getTraveler() User that triggered the alert
 * @method User getWatcher() User that set the alert
 * @method int getDistance() The distance between the users
 *
 * @method bool isTraveler()
 * @method bool isWatcher()
 * @method bool isDistance()
 *
 * @method $this setTraveler()
 * @method $this setWatcher()
 * @method $this setDistance()
 *
 * @method $this unsetTraveler()
 * @method $this unsetWatcher()
 * @method $this unsetDistance()
 *
 * @property User $traveler User that triggered the alert
 * @property User $watcher User that set the alert
 * @property int $distance The distance between the users
 *
 * @see https://core.telegram.org/bots/api#proximityalerttriggered
 */
class ProximityAlertTriggered extends LazyUpdates
{
    const JSON_PROPERTY_MAP = [
        'traveler' => 'User',
        'watcher' => 'User',
        'distance' => 'int',
    ];
}