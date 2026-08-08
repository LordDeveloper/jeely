<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class DeleteStickerSet
 * @description Use this method to delete a sticker set that was created by the bot. Returns True on success.
 *
 * @property string $name Sticker set name
 *
 * @see https://core.telegram.org/bots/api#deletestickerset
 */
class DeleteStickerSet extends MethodDefinition implements MethodDefinitionInterface
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
