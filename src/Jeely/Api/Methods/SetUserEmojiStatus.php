<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class SetUserEmojiStatus
 * @description Changes the emoji status for a given user that previously allowed the bot to manage their emoji status via the Mini App method requestEmojiStatusAccess. Returns True on success.
 *
 * @property int $user_id Unique identifier of the target user
 * @property string $emoji_status_custom_emoji_id Custom emoji identifier of the emoji status to set. Pass an empty string to remove the status.
 * @property int $emoji_status_expiration_date Expiration date of the emoji status, if any
 *
 * @see https://core.telegram.org/bots/api#setuseremojistatus
 */
class SetUserEmojiStatus extends MethodDefinition implements MethodDefinitionInterface
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
