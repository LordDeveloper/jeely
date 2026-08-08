<?php

namespace Jeely\Api\Types;

/**
 * @class Story
 * @description This object represents a story.
 *
 * @method Chat getChat() Chat that posted the story
 * @method int getId() Unique identifier for the story in the chat
 *
 * @method bool isChat()
 * @method bool isId()
 *
 * @method $this setChat()
 * @method $this setId()
 *
 * @method $this unsetChat()
 * @method $this unsetId()
 *
 * @property Chat $chat Chat that posted the story
 * @property int $id Unique identifier for the story in the chat
 *
 * @see https://core.telegram.org/bots/api#story
 */
class Story extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'chat' => 'Chat',
        'id' => 'int',
    ];
}
