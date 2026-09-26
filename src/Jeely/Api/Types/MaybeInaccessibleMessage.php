<?php

namespace Jeely\Api\Types;

/**
 * @class MaybeInaccessibleMessage
 * @description This object describes a message that can be inaccessible to the bot. It can be one of
 *
 *
 * @see https://core.telegram.org/bots/api#maybeinaccessiblemessage
 *
 * Extends {@see Message} so nested fields (`chat`, `from`, …) hydrate correctly when the
 * payload is a normal message. Inaccessible messages (`date === 0`) still share `chat` /
 * `message_id` / `date` from the Message map.
 */
class MaybeInaccessibleMessage extends Message
{
}
