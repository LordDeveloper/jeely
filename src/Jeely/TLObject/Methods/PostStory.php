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
* @class PostStory
* @description Posts a story on behalf of a managed business account. Requires the can_manage_stories business bot right. Returns Story on success.
*
*
* @param	string $business_connection_id Unique identifier of the business connection
* @param	InputStoryContent $content Content of the story
* @param	int $active_period Period after which the story is moved to the archive, in seconds; must be one of 6 * 3600, 12 * 3600, 86400, or 2 * 86400
* @param	string $caption Caption of the story, 0-2048 characters after entities parsing
* @param	string $parse_mode Mode for parsing entities in the story caption. See formatting options for more details.
* @param	MessageEntity[] $caption_entities A JSON-serialized list of special entities that appear in the caption, which can be specified instead of parse_mode
* @param	StoryArea[] $areas A JSON-serialized list of clickable areas to be shown on the story
* @param	bool $post_to_chat_page Pass True to keep the story accessible after it expires
* @param	bool $protect_content Pass True if the content of the story must be protected from forwarding and screenshotting
*
*
* @property	string $business_connection_id Unique identifier of the business connection
* @property	InputStoryContent $content Content of the story
* @property	int $active_period Period after which the story is moved to the archive, in seconds; must be one of 6 * 3600, 12 * 3600, 86400, or 2 * 86400
* @property	string $caption Caption of the story, 0-2048 characters after entities parsing
* @property	string $parse_mode Mode for parsing entities in the story caption. See formatting options for more details.
* @property	MessageEntity[] $caption_entities A JSON-serialized list of special entities that appear in the caption, which can be specified instead of parse_mode
* @property	StoryArea[] $areas A JSON-serialized list of clickable areas to be shown on the story
* @property	bool $post_to_chat_page Pass True to keep the story accessible after it expires
* @property	bool $protect_content Pass True if the content of the story must be protected from forwarding and screenshotting
*
*/

#[Casts(['Jeely\\TLObject\\Types\\Story'])]
class PostStory extends MethodDefinition implements MethodDefinitionInterface
{

}