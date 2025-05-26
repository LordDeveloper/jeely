<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class InlineQueryResultContact
* @description Represents a contact with a phone number. By default, this contact will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the contact.
*
* @property	string $type Type of the result, must be contact
* @method	string getType() Type of the result, must be contact
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	string $id Unique identifier for this result, 1-64 Bytes
* @method	string getId() Unique identifier for this result, 1-64 Bytes
* @method	bool isId()
* @method	$this setId()
* @method	$this unsetId()

* @property	string $phone_number Contact's phone number
* @method	string getPhoneNumber() Contact's phone number
* @method	bool isPhoneNumber()
* @method	$this setPhoneNumber()
* @method	$this unsetPhoneNumber()

* @property	string $first_name Contact's first name
* @method	string getFirstName() Contact's first name
* @method	bool isFirstName()
* @method	$this setFirstName()
* @method	$this unsetFirstName()

* @property	string $last_name Optional. Contact's last name
* @method	string getLastName() Optional. Contact's last name
* @method	bool isLastName()
* @method	$this setLastName()
* @method	$this unsetLastName()

* @property	string $vcard Optional. Additional data about the contact in the form of a vCard, 0-2048 bytes
* @method	string getVcard() Optional. Additional data about the contact in the form of a vCard, 0-2048 bytes
* @method	bool isVcard()
* @method	$this setVcard()
* @method	$this unsetVcard()

* @property	InlineKeyboardMarkup $reply_markup Optional. Inline keyboard attached to the message
* @method	InlineKeyboardMarkup getReplyMarkup() Optional. Inline keyboard attached to the message
* @method	bool isReplyMarkup()
* @method	$this setReplyMarkup()
* @method	$this unsetReplyMarkup()

* @property	InputMessageContent $input_message_content Optional. Content of the message to be sent instead of the contact
* @method	InputMessageContent getInputMessageContent() Optional. Content of the message to be sent instead of the contact
* @method	bool isInputMessageContent()
* @method	$this setInputMessageContent()
* @method	$this unsetInputMessageContent()

* @property	string $thumbnail_url Optional. Url of the thumbnail for the result
* @method	string getThumbnailUrl() Optional. Url of the thumbnail for the result
* @method	bool isThumbnailUrl()
* @method	$this setThumbnailUrl()
* @method	$this unsetThumbnailUrl()

* @property	int $thumbnail_width Optional. Thumbnail width
* @method	int getThumbnailWidth() Optional. Thumbnail width
* @method	bool isThumbnailWidth()
* @method	$this setThumbnailWidth()
* @method	$this unsetThumbnailWidth()

* @property	int $thumbnail_height Optional. Thumbnail height
* @method	int getThumbnailHeight() Optional. Thumbnail height
* @method	bool isThumbnailHeight()
* @method	$this setThumbnailHeight()
* @method	$this unsetThumbnailHeight()

*/

class InlineQueryResultContact extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'id'=> 'string',
		'phone_number'=> 'string',
		'first_name'=> 'string',
		'last_name'=> 'string',
		'vcard'=> 'string',
		'reply_markup'=> 'InlineKeyboardMarkup',
		'input_message_content'=> 'InputMessageContent',
		'thumbnail_url'=> 'string',
		'thumbnail_width'=> 'int',
		'thumbnail_height'=> 'int',
	];

}