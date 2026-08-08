<?php

namespace Jeely\Api\Types;

/**
 * @class ReactionTypeEmoji
 * @description The reaction is based on an emoji.
 *
 * @method string getType() Type of the reaction, always “emoji”
 * @method string getEmoji() Reaction emoji. Currently, it can be one of "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "".
 *
 * @method bool isType()
 * @method bool isEmoji()
 *
 * @method $this setType()
 * @method $this setEmoji()
 *
 * @method $this unsetType()
 * @method $this unsetEmoji()
 *
 * @property string $type Type of the reaction, always “emoji”
 * @property string $emoji Reaction emoji. Currently, it can be one of "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "".
 *
 * @see https://core.telegram.org/bots/api#reactiontypeemoji
 */
class ReactionTypeEmoji extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'emoji' => 'string',
    ];
}
