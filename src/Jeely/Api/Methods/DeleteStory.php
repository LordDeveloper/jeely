<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class DeleteStory
 * @description Deletes a story previously posted by the bot on behalf of a managed business account. Requires the can_manage_stories business bot right. Returns True on success.
 *
 * @property string $business_connection_id Unique identifier of the business connection
 * @property int $story_id Unique identifier of the story to delete
 *
 * @see https://core.telegram.org/bots/api#deletestory
 */
class DeleteStory extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'bool';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return bool
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
