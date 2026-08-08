<?php

namespace Jeely\Api\Types;

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
 * @method string getDescription() Optional. Short description of the result
 * @method string getThumbnailUrl() Optional. Url of the thumbnail for the result
 * @method int getThumbnailWidth() Optional. Thumbnail width
 * @method int getThumbnailHeight() Optional. Thumbnail height
 *
 * @method bool isType()
 * @method bool isId()
 * @method bool isTitle()
 * @method bool isInputMessageContent()
 * @method bool isReplyMarkup()
 * @method bool isUrl()
 * @method bool isDescription()
 * @method bool isThumbnailUrl()
 * @method bool isThumbnailWidth()
 * @method bool isThumbnailHeight()
 *
 * @method $this setType()
 * @method $this setId()
 * @method $this setTitle()
 * @method $this setInputMessageContent()
 * @method $this setReplyMarkup()
 * @method $this setUrl()
 * @method $this setDescription()
 * @method $this setThumbnailUrl()
 * @method $this setThumbnailWidth()
 * @method $this setThumbnailHeight()
 *
 * @method $this unsetType()
 * @method $this unsetId()
 * @method $this unsetTitle()
 * @method $this unsetInputMessageContent()
 * @method $this unsetReplyMarkup()
 * @method $this unsetUrl()
 * @method $this unsetDescription()
 * @method $this unsetThumbnailUrl()
 * @method $this unsetThumbnailWidth()
 * @method $this unsetThumbnailHeight()
 *
 * @property string $type Type of the result, must be article
 * @property string $id Unique identifier for this result, 1-64 Bytes
 * @property string $title Title of the result
 * @property InputMessageContent $input_message_content Content of the message to be sent
 * @property InlineKeyboardMarkup $reply_markup Optional. Inline keyboard attached to the message
 * @property string $url Optional. URL of the result
 * @property string $description Optional. Short description of the result
 * @property string $thumbnail_url Optional. Url of the thumbnail for the result
 * @property int $thumbnail_width Optional. Thumbnail width
 * @property int $thumbnail_height Optional. Thumbnail height
 *
 * @see https://core.telegram.org/bots/api#inlinequeryresultarticle
 */
class InlineQueryResultArticle extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'id' => 'string',
        'title' => 'string',
        'input_message_content' => 'InputMessageContent',
        'reply_markup' => 'InlineKeyboardMarkup',
        'url' => 'string',
        'description' => 'string',
        'thumbnail_url' => 'string',
        'thumbnail_width' => 'int',
        'thumbnail_height' => 'int',
    ];
}
