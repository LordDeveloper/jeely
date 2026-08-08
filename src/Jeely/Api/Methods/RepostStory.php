<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class RepostStory
 * @description Reposts a story on behalf of a business account from another business account. Both business accounts must be managed by the same bot, and the story on the source account must have been posted (or reposted) by the bot. Requires the can_manage_stories business bot right for both business accounts. Returns Story on success.
 *
 * @property string $business_connection_id Unique identifier of the business connection
 * @property int $from_chat_id Unique identifier of the chat which posted the story that should be reposted
 * @property int $from_story_id Unique identifier of the story that should be reposted
 * @property int $active_period Period after which the story is moved to the archive, in seconds; must be one of 6 * 3600, 12 * 3600, 86400, or 2 * 86400
 * @property bool $post_to_chat_page Pass True to keep the story accessible after it expires
 * @property bool $protect_content Pass True if the content of the story must be protected from forwarding and screenshotting
 *
 * @see https://core.telegram.org/bots/api#repoststory
 */
class RepostStory extends MethodDefinition implements MethodDefinitionInterface
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
