<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class SetStickerPositionInSet
 * @description Use this method to move a sticker in a set created by the bot to a specific position. Returns True on success.
 *
 * @property string $sticker File identifier of the sticker
 * @property int $position New sticker position in the set, zero-based
 *
 * @see https://core.telegram.org/bots/api#setstickerpositioninset
 */
class SetStickerPositionInSet extends MethodDefinition implements MethodDefinitionInterface
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
