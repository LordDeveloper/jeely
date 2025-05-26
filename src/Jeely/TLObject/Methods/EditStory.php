<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\InputStoryContent;
use Jeely\TLObject\Types\MessageEntity;
use Jeely\TLObject\Types\StoryArea;
use Jeely\TLObject\Types\Story;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class EditStory
* @description Edits a story previously posted by the bot on behalf of a managed business account. Requires the can_manage_stories business bot right. Returns Story on success.
*
*
* @param	string $business_connection_id Unique identifier of the business connection
* @param	int $story_id Unique identifier of the story to edit
* @param	InputStoryContent $content Content of the story
* @param	string $caption Caption of the story, 0-2048 characters after entities parsing
* @param	string $parse_mode Mode for parsing entities in the story caption. See formatting options for more details.
* @param	MessageEntity[] $caption_entities A JSON-serialized list of special entities that appear in the caption, which can be specified instead of parse_mode
* @param	StoryArea[] $areas A JSON-serialized list of clickable areas to be shown on the story
*
*
* @property	string $business_connection_id Unique identifier of the business connection
* @property	int $story_id Unique identifier of the story to edit
* @property	InputStoryContent $content Content of the story
* @property	string $caption Caption of the story, 0-2048 characters after entities parsing
* @property	string $parse_mode Mode for parsing entities in the story caption. See formatting options for more details.
* @property	MessageEntity[] $caption_entities A JSON-serialized list of special entities that appear in the caption, which can be specified instead of parse_mode
* @property	StoryArea[] $areas A JSON-serialized list of clickable areas to be shown on the story
*
*/

#[Casts(['Jeely\\TLObject\\Types\\Story'])]
class EditStory extends MethodDefinition implements MethodDefinitionInterface
{

}