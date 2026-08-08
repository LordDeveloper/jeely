<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class GetMyDefaultAdministratorRights
 * @description Use this method to get the current default administrator rights of the bot. Returns ChatAdministratorRights on success.
 *
 * @property bool $for_channels Pass True to get default administrator rights of the bot in channels. Otherwise, default administrator rights of the bot for groups and supergroups will be returned.
 *
 * @see https://core.telegram.org/bots/api#getmydefaultadministratorrights
 */
class GetMyDefaultAdministratorRights extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'ChatAdministratorRights';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return ChatAdministratorRights
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
