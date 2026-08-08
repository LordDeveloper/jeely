<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class AddStickerToSet
 * @description Use this method to add a new sticker to a set created by the bot. Emoji sticker sets can have up to 200 stickers. Other sticker sets can have up to 120 stickers. Returns True on success.
 *
 * @property int $user_id User identifier of sticker set owner
 * @property string $name Sticker set name
 * @property InputSticker $sticker A JSON-serialized object with information about the added sticker. If exactly the same sticker had already been added to the set, then the set isn't changed.
 *
 * @see https://core.telegram.org/bots/api#addstickertoset
 */
class AddStickerToSet extends MethodDefinition implements MethodDefinitionInterface
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
