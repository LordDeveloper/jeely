<?php

namespace Jeely\Api\Types;

/**
 * @class ManagedBotCreated
 * @description This object contains information about the bot that was created to be managed by the current bot.
 *
 * @method User getBot() Information about the bot. The bot's token can be fetched using the method getManagedBotToken.
 *
 * @method bool isBot()
 *
 * @method $this setBot()
 *
 * @method $this unsetBot()
 *
 * @property User $bot Information about the bot. The bot's token can be fetched using the method getManagedBotToken.
 *
 * @see https://core.telegram.org/bots/api#managedbotcreated
 */
class ManagedBotCreated extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'bot' => 'User',
    ];
}
