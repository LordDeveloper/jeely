<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class BusinessIntro
* @description Contains information about the start page settings of a Telegram Business account.
*
* @property	string $title Optional. Title text of the business intro
* @method	string getTitle() Optional. Title text of the business intro
* @method	bool isTitle()
* @method	$this setTitle()
* @method	$this unsetTitle()

* @property	string $message Optional. Message text of the business intro
* @method	string getMessage() Optional. Message text of the business intro
* @method	bool isMessage()
* @method	$this setMessage()
* @method	$this unsetMessage()

* @property	Sticker $sticker Optional. Sticker of the business intro
* @method	Sticker getSticker() Optional. Sticker of the business intro
* @method	bool isSticker()
* @method	$this setSticker()
* @method	$this unsetSticker()

*/

class BusinessIntro extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'title'=> 'string',
		'message'=> 'string',
		'sticker'=> 'Sticker',
	];

}