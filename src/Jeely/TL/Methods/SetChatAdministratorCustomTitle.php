<?php

namespace Jeely\TL\Methods;


/**
 * @class SetChatAdministratorCustomTitle
 * @description Use this method to set a custom title for an administrator in a supergroup promoted by the bot. Returns True on success.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
 * @property int $user_id Unique identifier of the target user
 * @property string $custom_title New custom title for the administrator; 0-16 characters, emoji are not allowed
 *
 * @see https://api.telegram.org/bots/api#setchatadministratorcustomtitle
 */
class SetChatAdministratorCustomTitle extends MethodDefinition implements MethodDefinitionInterface
{
    public string $castsTo = 'bool';

    /**
     * @var int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     */
    public int|string $chat_id;

    /**
     * @var int $user_id Unique identifier of the target user
     */
    public int $user_id;

    /**
     * @var string $custom_title New custom title for the administrator; 0-16 characters, emoji are not allowed
     */
    public string $custom_title;

    /**
     * @var array $vars The value that are taken in the constructor method as method parameters.
     */
    public function __construct(public array $vars = [])
    {
    }

    /**
     * @return bool
     */
    public function __invoke()
    {
        return $this->call();
    }
}