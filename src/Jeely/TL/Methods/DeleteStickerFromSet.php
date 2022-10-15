<?php

namespace Jeely\TL\Methods;


/**
 * @class DeleteStickerFromSet
 * @description Use this method to delete a sticker from a set created by the bot. Returns True on success.
 *
 * @property string $sticker File identifier of the sticker
 *
 * @see https://api.telegram.org/bots/api#deletestickerfromset
 */
class DeleteStickerFromSet extends MethodDefinition implements MethodDefinitionInterface
{
    public string $castsTo = 'bool';

    /**
     * @var string $sticker File identifier of the sticker
     */
    public string $sticker;

    /**
     * @var array $vars The value that are taken in the constructor method as method parameters.
     */
    public function __construct(public array $vars = [])
    {
    }

    /**
     * @return bool
     */
    public function __invoke()
    {
        return $this->call();
    }
}