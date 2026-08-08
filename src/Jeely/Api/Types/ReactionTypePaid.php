<?php

namespace Jeely\Api\Types;

/**
 * @class ReactionTypePaid
 * @description The reaction is paid.
 *
 * @method string getType() Type of the reaction, always “paid”
 *
 * @method bool isType()
 *
 * @method $this setType()
 *
 * @method $this unsetType()
 *
 * @property string $type Type of the reaction, always “paid”
 *
 * @see https://core.telegram.org/bots/api#reactiontypepaid
 */
class ReactionTypePaid extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
    ];
}
