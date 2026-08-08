<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class SetStickerSetTitle
 * @description Use this method to set the title of a created sticker set. Returns True on success.
 *
 * @property string $name Sticker set name
 * @property string $title Sticker set title, 1-64 characters
 *
 * @see https://core.telegram.org/bots/api#setstickersettitle
 */
class SetStickerSetTitle extends MethodDefinition implements MethodDefinitionInterface
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
