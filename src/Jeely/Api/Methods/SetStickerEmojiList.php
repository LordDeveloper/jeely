<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class SetStickerEmojiList
 * @description Use this method to change the list of emoji assigned to a regular or custom emoji sticker. The sticker must belong to a sticker set created by the bot. Returns True on success.
 *
 * @property string $sticker File identifier of the sticker
 * @property string[] $emoji_list A JSON-serialized list of 1-20 emoji associated with the sticker
 *
 * @see https://core.telegram.org/bots/api#setstickeremojilist
 */
class SetStickerEmojiList extends MethodDefinition implements MethodDefinitionInterface
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
