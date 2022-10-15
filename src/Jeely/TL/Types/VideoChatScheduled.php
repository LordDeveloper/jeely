<?php

namespace Jeely\TL\Types;

use Jeely\LazyUpdates;


/**
 * @class VideoChatScheduled
 * @description This object represents a service message about a video chat scheduled in the chat.
 *
 * @method int getStartDate() Point in time (Unix timestamp) when the video chat is supposed to be started by a chat administrator
 *
 * @method bool isStartDate()
 *
 * @method $this setStartDate()
 *
 * @method $this unsetStartDate()
 *
 * @property int $start_date Point in time (Unix timestamp) when the video chat is supposed to be started by a chat administrator
 *
 * @see https://core.telegram.org/bots/api#videochatscheduled
 */
class VideoChatScheduled extends LazyUpdates
{
    const JSON_PROPERTY_MAP = [
        'start_date' => 'int',
    ];
}