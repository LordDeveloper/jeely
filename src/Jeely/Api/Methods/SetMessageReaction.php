<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class SetMessageReaction
 * @description Use this method to change the chosen reactions on a message. Service messages of some types can't be reacted to. Automatically forwarded messages from a channel to its discussion group have the same available reactions as messages in the channel. Bots can't use paid reactions. Returns True on success.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target bot, supergroup or channel in the format ＠username
 * @property int $message_id Identifier of the target message. If the message belongs to a media group, the reaction is set to the first non-deleted message in the group instead.
 * @property ReactionType[] $reaction A JSON-serialized list of reaction types to set on the message. Currently, as non-premium users, bots can set up to one reaction per message. A custom emoji reaction can be used if it is either already present on the message or explicitly allowed by chat administrators. Paid reactions can't be used by bots.
 * @property bool $is_big Pass True to set the reaction with a big animation
 *
 * @see https://core.telegram.org/bots/api#setmessagereaction
 */
class SetMessageReaction extends MethodDefinition implements MethodDefinitionInterface
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
