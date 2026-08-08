<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class SetStickerKeywords
 * @description Use this method to change search keywords assigned to a regular or custom emoji sticker. The sticker must belong to a sticker set created by the bot. Returns True on success.
 *
 * @property string $sticker File identifier of the sticker
 * @property string[] $keywords A JSON-serialized list of 0-20 search keywords for the sticker with total length of up to 64 characters
 *
 * @see https://core.telegram.org/bots/api#setstickerkeywords
 */
class SetStickerKeywords extends MethodDefinition implements MethodDefinitionInterface
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
