<?php

namespace Jeely\Api\Types;

/**
 * @class StoryAreaTypeSuggestedReaction
 * @description Describes a story area pointing to a suggested reaction. Currently, a story can have up to 5 suggested reaction areas.
 *
 * @method string getType() Type of the area, always “suggested_reaction”
 * @method ReactionType getReactionType() Type of the reaction
 * @method bool getIsDark() Optional. Pass True if the reaction area has a dark background
 * @method bool getIsFlipped() Optional. Pass True if reaction area corner is flipped
 *
 * @method bool isType()
 * @method bool isReactionType()
 * @method bool isIsDark()
 * @method bool isIsFlipped()
 *
 * @method $this setType()
 * @method $this setReactionType()
 * @method $this setIsDark()
 * @method $this setIsFlipped()
 *
 * @method $this unsetType()
 * @method $this unsetReactionType()
 * @method $this unsetIsDark()
 * @method $this unsetIsFlipped()
 *
 * @property string $type Type of the area, always “suggested_reaction”
 * @property ReactionType $reaction_type Type of the reaction
 * @property bool $is_dark Optional. Pass True if the reaction area has a dark background
 * @property bool $is_flipped Optional. Pass True if reaction area corner is flipped
 *
 * @see https://core.telegram.org/bots/api#storyareatypesuggestedreaction
 */
class StoryAreaTypeSuggestedReaction extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'reaction_type' => 'ReactionType',
        'is_dark' => 'bool',
        'is_flipped' => 'bool',
    ];
}
