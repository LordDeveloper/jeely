<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class InlineQueryResultContact
 * @description Represents a contact with a phone number. By default, this contact will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the contact.
 *
 * @method string getType() Type of the result, must be contact
 * @method string getId() Unique identifier for this result, 1-64 Bytes
 * @method string getPhoneNumber() Contact's phone number
 * @method string getFirstName() Contact's first name
 * @method string getLastName() Optional. Contact's last name
 * @method string getVcard() Optional. Additional data about the contact in the form of a vCard, 0-2048 bytes
 * @method InlineKeyboardMarkup getReplyMarkup() Optional. Inline keyboard attached to the message
 * @method InputMessageContent getInputMessageContent() Optional. Content of the message to be sent instead of the contact
 * @method string getThumbUrl() Optional. Url of the thumbnail for the result
 * @method int getThumbWidth() Optional. Thumbnail width
 * @method int getThumbHeight() Optional. Thumbnail height
 *
 * @method bool isType()
 * @method bool isId()
 * @method bool isPhoneNumber()
 * @method bool isFirstName()
 * @method bool isLastName()
 * @method bool isVcard()
 * @method bool isReplyMarkup()
 * @method bool isInputMessageContent()
 * @method bool isThumbUrl()
 * @method bool isThumbWidth()
 * @method bool isThumbHeight()
 *
 * @method $this setType()
 * @method $this setId()
 * @method $this setPhoneNumber()
 * @method $this setFirstName()
 * @method $this setLastName()
 * @method $this setVcard()
 * @method $this setReplyMarkup()
 * @method $this setInputMessageContent()
 * @method $this setThumbUrl()
 * @method $this setThumbWidth()
 * @method $this setThumbHeight()
 *
 * @method $this unsetType()
 * @method $this unsetId()
 * @method $this unsetPhoneNumber()
 * @method $this unsetFirstName()
 * @method $this unsetLastName()
 * @method $this unsetVcard()
 * @method $this unsetReplyMarkup()
 * @method $this unsetInputMessageContent()
 * @method $this unsetThumbUrl()
 * @method $this unsetThumbWidth()
 * @method $this unsetThumbHeight()
 *
 * @property string $type Type of the result, must be contact
 * @property string $id Unique identifier for this result, 1-64 Bytes
 * @property string $phone_number Contact's phone number
 * @property string $first_name Contact's first name
 * @property string $last_name Optional. Contact's last name
 * @property string $vcard Optional. Additional data about the contact in the form of a vCard, 0-2048 bytes
 * @property InlineKeyboardMarkup $reply_markup Optional. Inline keyboard attached to the message
 * @property InputMessageContent $input_message_content Optional. Content of the message to be sent instead of the contact
 * @property string $thumb_url Optional. Url of the thumbnail for the result
 * @property int $thumb_width Optional. Thumbnail width
 * @property int $thumb_height Optional. Thumbnail height
 *
 * @see https://core.telegram.org/bots/api#inlinequeryresultcontact
 */
class InlineQueryResultContact extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'id' => 'string',
        'phone_number' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'vcard' => 'string',
        'reply_markup' => 'InlineKeyboardMarkup',
        'input_message_content' => 'InputMessageContent',
        'thumb_url' => 'string',
        'thumb_width' => 'int',
        'thumb_height' => 'int',
    ];
}