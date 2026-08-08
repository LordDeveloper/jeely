<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class SetCustomEmojiStickerSetThumbnail
 * @description Use this method to set the thumbnail of a custom emoji sticker set. Returns True on success.
 *
 * @property string $name Sticker set name
 * @property string $custom_emoji_id Custom emoji identifier of a sticker from the sticker set; pass an empty string to drop the thumbnail and use the first sticker as the thumbnail
 *
 * @see https://core.telegram.org/bots/api#setcustomemojistickersetthumbnail
 */
class SetCustomEmojiStickerSetThumbnail extends MethodDefinition implements MethodDefinitionInterface
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
