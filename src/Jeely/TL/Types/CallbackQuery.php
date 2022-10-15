<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class CallbackQuery
 * @description This object represents an incoming callback query from a callback button in an inline keyboard. If the button that originated the query was attached to a message sent by the bot, the field message will be present. If the button was attached to a message sent via the bot (in inline mode), the field inline_message_id will be present. Exactly one of the fields data or game_short_name will be present.
 *
 * @method string getId() Unique identifier for this query
 * @method User getFrom() Sender
 * @method Message getMessage() Optional. Message with the callback button that originated the query. Note that message content and message date will not be available if the message is too old
 * @method string getInlineMessageId() Optional. Identifier of the message sent via the bot in inline mode, that originated the query.
 * @method string getChatInstance() Global identifier, uniquely corresponding to the chat to which the message with the callback button was sent. Useful for high scores in games.
 * @method string getData() Optional. Data associated with the callback button. Be aware that the message originated the query can contain no callback buttons with this data.
 * @method string getGameShortName() Optional. Short name of a Game to be returned, serves as the unique identifier for the game
 *
 * @method bool isId()
 * @method bool isFrom()
 * @method bool isMessage()
 * @method bool isInlineMessageId()
 * @method bool isChatInstance()
 * @method bool isData()
 * @method bool isGameShortName()
 *
 * @method $this setId()
 * @method $this setFrom()
 * @method $this setMessage()
 * @method $this setInlineMessageId()
 * @method $this setChatInstance()
 * @method $this setData()
 * @method $this setGameShortName()
 *
 * @method $this unsetId()
 * @method $this unsetFrom()
 * @method $this unsetMessage()
 * @method $this unsetInlineMessageId()
 * @method $this unsetChatInstance()
 * @method $this unsetData()
 * @method $this unsetGameShortName()
 *
 * @property string $id Unique identifier for this query
 * @property User $from Sender
 * @property Message $message Optional. Message with the callback button that originated the query. Note that message content and message date will not be available if the message is too old
 * @property string $inline_message_id Optional. Identifier of the message sent via the bot in inline mode, that originated the query.
 * @property string $chat_instance Global identifier, uniquely corresponding to the chat to which the message with the callback button was sent. Useful for high scores in games.
 * @property string $data Optional. Data associated with the callback button. Be aware that the message originated the query can contain no callback buttons with this data.
 * @property string $game_short_name Optional. Short name of a Game to be returned, serves as the unique identifier for the game
 *
 * @see https://core.telegram.org/bots/api#callbackquery
 */
class CallbackQuery extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'id' => 'string',
        'from' => 'User',
        'message' => 'Message',
        'inline_message_id' => 'string',
        'chat_instance' => 'string',
        'data' => 'string',
        'game_short_name' => 'string',
    ];
}