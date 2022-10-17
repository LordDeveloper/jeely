<?php

namespace Jeely\TL\Methods;

use Jeely\Telegram;
use Jeely\TL\Types\Sticker;

/**
 * @class GetCustomEmojiStickers
 * @description Use this method to get information about custom emoji stickers by their identifiers. Returns an Array of Sticker objects.
 *
 * @property string[] $custom_emoji_ids List of custom emoji identifiers. At most 200 custom emoji identifiers can be specified.
 *
 *
 * @see https://api.telegram.org/bots/api#getcustomemojistickers
 */
class GetCustomEmojiStickers extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'Sticker[]';

    /**
     * @var mixed $params The value that are taken in the constructor method as method parameters.
     */
    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return Sticker[]
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}