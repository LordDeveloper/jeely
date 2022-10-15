<?php

namespace Jeely\TL\Methods;

use Jeely\TL\Types\StickerSet;

/**
 * @class GetStickerSet
 * @description Use this method to get a sticker set. On success, a StickerSet object is returned.
 *
 * @property string $name Name of the sticker set
 *
 * @see https://api.telegram.org/bots/api#getstickerset
 */
class GetStickerSet extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'StickerSet';

    /**
     * @var array $params The value that are taken in the constructor method as method parameters.
     */
    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return StickerSet
     */
    public function __invoke()
    {
        return $this->call();
    }
}