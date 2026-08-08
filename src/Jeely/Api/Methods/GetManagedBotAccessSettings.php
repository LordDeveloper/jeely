<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class GetManagedBotAccessSettings
 * @description Use this method to get the access settings of a managed bot. Returns a BotAccessSettings object on success.
 *
 * @property int $user_id User identifier of the managed bot whose access settings will be returned
 *
 * @see https://core.telegram.org/bots/api#getmanagedbotaccesssettings
 */
class GetManagedBotAccessSettings extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'BotAccessSettings';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return BotAccessSettings
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
