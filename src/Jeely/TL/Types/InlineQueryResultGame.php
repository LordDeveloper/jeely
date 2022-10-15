<?php

namespace Jeely\TL\Types;

use Jeely\LazyUpdates;


/**
 * @class InlineQueryResultGame
 * @description Represents a Game.
 *
 * @method string getType() Type of the result, must be game
 * @method string getId() Unique identifier for this result, 1-64 bytes
 * @method string getGameShortName() Short name of the game
 * @method InlineKeyboardMarkup getReplyMarkup() Optional. Inline keyboard attached to the message
 *
 * @method bool isType()
 * @method bool isId()
 * @method bool isGameShortName()
 * @method bool isReplyMarkup()
 *
 * @method $this setType()
 * @method $this setId()
 * @method $this setGameShortName()
 * @method $this setReplyMarkup()
 *
 * @method $this unsetType()
 * @method $this unsetId()
 * @method $this unsetGameShortName()
 * @method $this unsetReplyMarkup()
 *
 * @property string $type Type of the result, must be game
 * @property string $id Unique identifier for this result, 1-64 bytes
 * @property string $game_short_name Short name of the game
 * @property InlineKeyboardMarkup $reply_markup Optional. Inline keyboard attached to the message
 *
 * @see https://core.telegram.org/bots/api#inlinequeryresultgame
 */
class InlineQueryResultGame extends LazyUpdates
{
    const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'id' => 'string',
        'game_short_name' => 'string',
        'reply_markup' => 'InlineKeyboardMarkup',
    ];
}