<?php

namespace Jeely\TL\Methods;

use Jeely\TL\Types\ChatAdministratorRights;

/**
 * @class GetMyDefaultAdministratorRights
 * @description Use this method to get the current default administrator rights of the bot. Returns ChatAdministratorRights on success.
 *
 * @property bool $for_channels Pass True to get default administrator rights of the bot in channels. Otherwise, default administrator rights of the bot for groups and supergroups will be returned.
 *
 * @see https://api.telegram.org/bots/api#getmydefaultadministratorrights
 */
class GetMyDefaultAdministratorRights extends MethodDefinition implements MethodDefinitionInterface
{
    public string $castsTo = 'ChatAdministratorRights';

    /**
     * @var ?bool $for_channels Pass True to get default administrator rights of the bot in channels. Otherwise, default administrator rights of the bot for groups and supergroups will be returned.
     */
    public ?bool $for_channels = null;

    /**
     * @var array $vars The value that are taken in the constructor method as method parameters.
     */
    public function __construct(public array $vars = [])
    {
    }

    /**
     * @return ChatAdministratorRights
     */
    public function __invoke()
    {
        return $this->call();
    }
}