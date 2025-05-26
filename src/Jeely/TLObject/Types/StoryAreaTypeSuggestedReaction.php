<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class StoryAreaTypeSuggestedReaction
* @description Describes a story area pointing to a suggested reaction. Currently, a story can have up to 5 suggested reaction areas.
*
* @property	string $type Type of the area, always “suggested_reaction”
* @method	string getType() Type of the area, always “suggested_reaction”
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	ReactionType $reaction_type Type of the reaction
* @method	ReactionType getReactionType() Type of the reaction
* @method	bool isReactionType()
* @method	$this setReactionType()
* @method	$this unsetReactionType()

* @property	bool $is_dark Optional. Pass True if the reaction area has a dark background
* @method	bool getIsDark() Optional. Pass True if the reaction area has a dark background
* @method	bool isIsDark()
* @method	$this setIsDark()
* @method	$this unsetIsDark()

* @property	bool $is_flipped Optional. Pass True if reaction area corner is flipped
* @method	bool getIsFlipped() Optional. Pass True if reaction area corner is flipped
* @method	bool isIsFlipped()
* @method	$this setIsFlipped()
* @method	$this unsetIsFlipped()

*/

class StoryAreaTypeSuggestedReaction extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'reaction_type'=> 'ReactionType',
		'is_dark'=> 'bool',
		'is_flipped'=> 'bool',
	];

}