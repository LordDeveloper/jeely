<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class SetManagedBotAccessSettings
 * @description Use this method to change the access settings of a managed bot. Returns True on success.
 *
 * @property int $user_id User identifier of the managed bot whose access settings will be changed
 * @property bool $is_access_restricted Pass True if only selected users can access the bot. The bot's owner can always access it.
 * @property int[] $added_user_ids A JSON-serialized list of up to 10 identifiers of users who will have access to the bot in addition to its owner. Ignored if is_access_restricted is False.
 *
 * @see https://core.telegram.org/bots/api#setmanagedbotaccesssettings
 */
class SetManagedBotAccessSettings extends MethodDefinition implements MethodDefinitionInterface
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
