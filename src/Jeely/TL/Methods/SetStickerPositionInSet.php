<?php

namespace Jeely\TL\Methods;


/**
 * @class SetStickerPositionInSet
 * @description Use this method to move a sticker in a set created by the bot to a specific position. Returns True on success.
 *
 * @property string $sticker File identifier of the sticker
 * @property int $position New sticker position in the set, zero-based
 *
 * @see https://api.telegram.org/bots/api#setstickerpositioninset
 */
class SetStickerPositionInSet extends MethodDefinition implements MethodDefinitionInterface
{
    public string $castsTo = 'bool';

    /**
     * @var string $sticker File identifier of the sticker
     */
    public string $sticker;

    /**
     * @var int $position New sticker position in the set, zero-based
     */
    public int $position;

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