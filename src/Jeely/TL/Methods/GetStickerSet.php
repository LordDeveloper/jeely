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
    public string $castsTo = 'StickerSet';

    /**
     * @var string $name Name of the sticker set
     */
    public string $name;

    /**
     * @var array $vars The value that are taken in the constructor method as method parameters.
     */
    public function __construct(public array $vars = [])
    {
    }

    /**
     * @return StickerSet
     */
    public function __invoke()
    {
        return $this->call();
    }
}