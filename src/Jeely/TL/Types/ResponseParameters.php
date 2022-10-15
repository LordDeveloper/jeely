<?php

namespace Jeely\TL\Types;

use Jeely\LazyUpdates;


/**
 * @class ResponseParameters
 * @description Describes why a request was unsuccessful.
 *
 * @method int getMigrateToChatId() Optional. The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
 * @method int getRetryAfter() Optional. In case of exceeding flood control, the number of seconds left to wait before the request can be repeated
 *
 * @method bool isMigrateToChatId()
 * @method bool isRetryAfter()
 *
 * @method $this setMigrateToChatId()
 * @method $this setRetryAfter()
 *
 * @method $this unsetMigrateToChatId()
 * @method $this unsetRetryAfter()
 *
 * @property int $migrate_to_chat_id Optional. The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
 * @property int $retry_after Optional. In case of exceeding flood control, the number of seconds left to wait before the request can be repeated
 *
 * @see https://core.telegram.org/bots/api#responseparameters
 */
class ResponseParameters extends LazyUpdates
{
    const JSON_PROPERTY_MAP = [
        'migrate_to_chat_id' => 'int',
        'retry_after' => 'int',
    ];
}