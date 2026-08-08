<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class EditStory
 * @description Edits a story previously posted by the bot on behalf of a managed business account. Requires the can_manage_stories business bot right. Returns Story on success.
 *
 * @property string $business_connection_id Unique identifier of the business connection
 * @property int $story_id Unique identifier of the story to edit
 * @property InputStoryContent $content Content of the story
 * @property string $caption Caption of the story, 0-2048 characters after entities parsing
 * @property string $parse_mode Mode for parsing entities in the story caption. See formatting options for more details.
 * @property MessageEntity[] $caption_entities A JSON-serialized list of special entities that appear in the caption, which can be specified instead of parse_mode
 * @property StoryArea[] $areas A JSON-serialized list of clickable areas to be shown on the story
 *
 * @see https://core.telegram.org/bots/api#editstory
 */
class EditStory extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'Story';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return Story
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
