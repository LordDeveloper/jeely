<?php

namespace Jeely\TL\Types;

use Jeely\LazyUpdates;


/**
 * @class InlineQueryResultArticle
 * @description Represents a link to an article or web page.
 *
 * @method string getType() Type of the result, must be article
 * @method string getId() Unique identifier for this result, 1-64 Bytes
 * @method string getTitle() Title of the result
 * @method InputMessageContent getInputMessageContent() Content of the message to be sent
 * @method InlineKeyboardMarkup getReplyMarkup() Optional. Inline keyboard attached to the message
 * @method string getUrl() Optional. URL of the result
 * @method bool getHideUrl() Optional. Pass True if you don't want the URL to be shown in the message
 * @method string getDescription() Optional. Short description of the result
 * @method string getThumbUrl() Optional. Url of the thumbnail for the result
 * @method int getThumbWidth() Optional. Thumbnail width
 * @method int getThumbHeight() Optional. Thumbnail height
 *
 * @method bool isType()
 * @method bool isId()
 * @method bool isTitle()
 * @method bool isInputMessageContent()
 * @method bool isReplyMarkup()
 * @method bool isUrl()
 * @method bool isHideUrl()
 * @method bool isDescription()
 * @method bool isThumbUrl()
 * @method bool isThumbWidth()
 * @method bool isThumbHeight()
 *
 * @method $this setType()
 * @method $this setId()
 * @method $this setTitle()
 * @method $this setInputMessageContent()
 * @method $this setReplyMarkup()
 * @method $this setUrl()
 * @method $this setHideUrl()
 * @method $this setDescription()
 * @method $this setThumbUrl()
 * @method $this setThumbWidth()
 * @method $this setThumbHeight()
 *
 * @method $this unsetType()
 * @method $this unsetId()
 * @method $this unsetTitle()
 * @method $this unsetInputMessageContent()
 * @method $this unsetReplyMarkup()
 * @method $this unsetUrl()
 * @method $this unsetHideUrl()
 * @method $this unsetDescription()
 * @method $this unsetThumbUrl()
 * @method $this unsetThumbWidth()
 * @method $this unsetThumbHeight()
 *
 * @property string $type Type of the result, must be article
 * @property string $id Unique identifier for this result, 1-64 Bytes
 * @property string $title Title of the result
 * @property InputMessageContent $input_message_content Content of the message to be sent
 * @property InlineKeyboardMarkup $reply_markup Optional. Inline keyboard attached to the message
 * @property string $url Optional. URL of the result
 * @property bool $hide_url Optional. Pass True if you don't want the URL to be shown in the message
 * @property string $description Optional. Short description of the result
 * @property string $thumb_url Optional. Url of the thumbnail for the result
 * @property int $thumb_width Optional. Thumbnail width
 * @property int $thumb_height Optional. Thumbnail height
 *
 * @see https://core.telegram.org/bots/api#inlinequeryresultarticle
 */
class InlineQueryResultArticle extends LazyUpdates
{
    const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'id' => 'string',
        'title' => 'string',
        'input_message_content' => 'InputMessageContent',
        'reply_markup' => 'InlineKeyboardMarkup',
        'url' => 'string',
        'hide_url' => 'bool',
        'description' => 'string',
        'thumb_url' => 'string',
        'thumb_width' => 'int',
        'thumb_height' => 'int',
    ];
}