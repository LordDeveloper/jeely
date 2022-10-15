<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class InlineQueryResultCachedSticker
 * @description Represents a link to a sticker stored on the Telegram servers. By default, this sticker will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the sticker.
 *
 * @method string getType() Type of the result, must be sticker
 * @method string getId() Unique identifier for this result, 1-64 bytes
 * @method string getStickerFileId() A valid file identifier of the sticker
 * @method InlineKeyboardMarkup getReplyMarkup() Optional. Inline keyboard attached to the message
 * @method InputMessageContent getInputMessageContent() Optional. Content of the message to be sent instead of the sticker
 *
 * @method bool isType()
 * @method bool isId()
 * @method bool isStickerFileId()
 * @method bool isReplyMarkup()
 * @method bool isInputMessageContent()
 *
 * @method $this setType()
 * @method $this setId()
 * @method $this setStickerFileId()
 * @method $this setReplyMarkup()
 * @method $this setInputMessageContent()
 *
 * @method $this unsetType()
 * @method $this unsetId()
 * @method $this unsetStickerFileId()
 * @method $this unsetReplyMarkup()
 * @method $this unsetInputMessageContent()
 *
 * @property string $type Type of the result, must be sticker
 * @property string $id Unique identifier for this result, 1-64 bytes
 * @property string $sticker_file_id A valid file identifier of the sticker
 * @property InlineKeyboardMarkup $reply_markup Optional. Inline keyboard attached to the message
 * @property InputMessageContent $input_message_content Optional. Content of the message to be sent instead of the sticker
 *
 * @see https://core.telegram.org/bots/api#inlinequeryresultcachedsticker
 */
class InlineQueryResultCachedSticker extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'id' => 'string',
        'sticker_file_id' => 'string',
        'reply_markup' => 'InlineKeyboardMarkup',
        'input_message_content' => 'InputMessageContent',
    ];
}