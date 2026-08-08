<?php

namespace Jeely\Api\Types;

/**
 * @class Community
 * @description Represents a community (a group of chats).
 *
 * @method int getId() Unique identifier for this community. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
 * @method string getName() Name of the community
 *
 * @method bool isId()
 * @method bool isName()
 *
 * @method $this setId()
 * @method $this setName()
 *
 * @method $this unsetId()
 * @method $this unsetName()
 *
 * @property int $id Unique identifier for this community. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
 * @property string $name Name of the community
 *
 * @see https://core.telegram.org/bots/api#community
 */
class Community extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'id' => 'int',
        'name' => 'string',
    ];
}
