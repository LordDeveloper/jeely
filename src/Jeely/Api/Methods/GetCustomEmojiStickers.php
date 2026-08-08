<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class GetCustomEmojiStickers
 * @description Use this method to get information about custom emoji stickers by their identifiers. Returns an Array of Sticker objects.
 *
 * @property string[] $custom_emoji_ids A JSON-serialized list of custom emoji identifiers. At most 200 custom emoji identifiers can be specified.
 *
 * @see https://core.telegram.org/bots/api#getcustomemojistickers
 */
class GetCustomEmojiStickers extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'Sticker[]';

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
