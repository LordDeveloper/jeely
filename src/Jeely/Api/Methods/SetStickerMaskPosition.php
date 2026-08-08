<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class SetStickerMaskPosition
 * @description Use this method to change the mask position of a mask sticker. The sticker must belong to a sticker set that was created by the bot. Returns True on success.
 *
 * @property string $sticker File identifier of the sticker
 * @property MaskPosition $mask_position A JSON-serialized object with the position where the mask should be placed on faces. Omit the parameter to remove the mask position.
 *
 * @see https://core.telegram.org/bots/api#setstickermaskposition
 */
class SetStickerMaskPosition extends MethodDefinition implements MethodDefinitionInterface
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
