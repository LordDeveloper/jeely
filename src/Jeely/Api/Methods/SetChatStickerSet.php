<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class SetChatStickerSet
 * @description Use this method to set a new group sticker set for a supergroup. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Use the field can_set_sticker_set optionally returned in getChat requests to check if the bot can use this method. Returns True on success.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target supergroup in the format ＠username
 * @property string $sticker_set_name Name of the sticker set to be set as the group sticker set
 *
 * @see https://core.telegram.org/bots/api#setchatstickerset
 */
class SetChatStickerSet extends MethodDefinition implements MethodDefinitionInterface
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
