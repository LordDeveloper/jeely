<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class EditForumTopic
 * @description Use this method to edit name and icon of a topic in a forum supergroup chat or a private chat with a user. In the case of a supergroup chat the bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights, unless it is the creator of the topic. Returns True on success.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target supergroup in the format ＠username
 * @property int $message_thread_id Unique identifier for the target message thread of the forum topic
 * @property string $name New topic name, 0-128 characters. If not specified or empty, the current name of the topic will be kept.
 * @property string $icon_custom_emoji_id New unique identifier of the custom emoji shown as the topic icon. Use getForumTopicIconStickers to get all allowed custom emoji identifiers. Pass an empty string to remove the icon. If not specified, the current icon will be kept.
 *
 * @see https://core.telegram.org/bots/api#editforumtopic
 */
class EditForumTopic extends MethodDefinition implements MethodDefinitionInterface
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
