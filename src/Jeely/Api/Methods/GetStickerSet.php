<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class GetStickerSet
 * @description Use this method to get a sticker set. On success, a StickerSet object is returned.
 *
 * @property string $name Name of the sticker set
 *
 * @see https://core.telegram.org/bots/api#getstickerset
 */
class GetStickerSet extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'StickerSet';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return StickerSet
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
