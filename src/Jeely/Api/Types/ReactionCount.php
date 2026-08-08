<?php

namespace Jeely\Api\Types;

/**
 * @class ReactionCount
 * @description Represents a reaction added to a message along with the number of times it was added.
 *
 * @method ReactionType getType() Type of the reaction
 * @method int getTotalCount() Number of times the reaction was added
 *
 * @method bool isType()
 * @method bool isTotalCount()
 *
 * @method $this setType()
 * @method $this setTotalCount()
 *
 * @method $this unsetType()
 * @method $this unsetTotalCount()
 *
 * @property ReactionType $type Type of the reaction
 * @property int $total_count Number of times the reaction was added
 *
 * @see https://core.telegram.org/bots/api#reactioncount
 */
class ReactionCount extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'ReactionType',
        'total_count' => 'int',
    ];
}
