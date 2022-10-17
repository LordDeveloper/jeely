<?php

namespace Jeely\TL\Methods;


use Jeely\Telegram;

/**
 * @class SetChatAdministratorCustomTitle
 * @description Use this method to set a custom title for an administrator in a supergroup promoted by the bot. Returns True on success.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
 * @property int $user_id Unique identifier of the target user
 * @property string $custom_title New custom title for the administrator; 0-16 characters, emoji are not allowed
 *
 *
 * @see https://api.telegram.org/bots/api#setchatadministratorcustomtitle
 */
class SetChatAdministratorCustomTitle extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'bool';

    /**
     * @var mixed $params The value that are taken in the constructor method as method parameters.
     */
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