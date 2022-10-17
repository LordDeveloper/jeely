<?php

namespace Jeely\TL\Methods;


use Jeely\Telegram;

/**
 * @class DeleteStickerFromSet
 * @description Use this method to delete a sticker from a set created by the bot. Returns True on success.
 *
 * @property string $sticker File identifier of the sticker
 *
 *
 * @see https://api.telegram.org/bots/api#deletestickerfromset
 */
class DeleteStickerFromSet extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'bool';

    /**
     * @var mixed $params The value that are taken in the constructor method as method parameters.
     */
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