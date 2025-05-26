<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;
use Jeely\TLObject\Types\ReactionTypeEmoji;
use Jeely\TLObject\Types\ReactionTypeCustomEmoji;
use Jeely\TLObject\Types\ReactionTypePaid;


/**
* @class ReactionType
* @description This object describes the type of a reaction. Currently, it can be one of
*
*/

class ReactionType extends TLObject
{
	const JSON_PROPERTY_MAP = [
		ReactionTypeEmoji::class,
		ReactionTypeCustomEmoji::class,
		ReactionTypePaid::class,
	];

}