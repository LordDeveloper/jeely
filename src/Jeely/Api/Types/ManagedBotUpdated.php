<?php

namespace Jeely\Api\Types;

/**
 * @class ManagedBotUpdated
 * @description This object contains information about the creation, token update, or owner update of a bot that is managed by the current bot.
 *
 * @method User getUser() User that created the bot
 * @method User getBot() Information about the bot. Token of the bot can be fetched using the method getManagedBotToken.
 *
 * @method bool isUser()
 * @method bool isBot()
 *
 * @method $this setUser()
 * @method $this setBot()
 *
 * @method $this unsetUser()
 * @method $this unsetBot()
 *
 * @property User $user User that created the bot
 * @property User $bot Information about the bot. Token of the bot can be fetched using the method getManagedBotToken.
 *
 * @see https://core.telegram.org/bots/api#managedbotupdated
 */
class ManagedBotUpdated extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'user' => 'User',
        'bot' => 'User',
    ];
}
