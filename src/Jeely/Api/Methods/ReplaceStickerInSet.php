<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class ReplaceStickerInSet
 * @description Use this method to replace an existing sticker in a sticker set with a new one. The method is equivalent to calling deleteStickerFromSet, then addStickerToSet, then setStickerPositionInSet. Returns True on success.
 *
 * @property int $user_id User identifier of the sticker set owner
 * @property string $name Sticker set name
 * @property string $old_sticker File identifier of the replaced sticker
 * @property InputSticker $sticker A JSON-serialized object with information about the added sticker. If exactly the same sticker had already been added to the set, then the set remains unchanged.
 *
 * @see https://core.telegram.org/bots/api#replacestickerinset
 */
class ReplaceStickerInSet extends MethodDefinition implements MethodDefinitionInterface
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
