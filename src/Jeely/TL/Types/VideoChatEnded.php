<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class VideoChatEnded
 * @description This object represents a service message about a video chat ended in the chat.
 *
 * @method int getDuration() Video chat duration in seconds
 *
 * @method bool isDuration()
 *
 * @method $this setDuration()
 *
 * @method $this unsetDuration()
 *
 * @property int $duration Video chat duration in seconds
 *
 * @see https://core.telegram.org/bots/api#videochatended
 */
class VideoChatEnded extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'duration' => 'int',
    ];
}