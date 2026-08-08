<?php

namespace Jeely\Api\Types;

/**
 * @class BusinessIntro
 * @description Contains information about the start page settings of a Telegram Business account.
 *
 * @method string getTitle() Optional. Title text of the business intro
 * @method string getMessage() Optional. Message text of the business intro
 * @method Sticker getSticker() Optional. Sticker of the business intro
 *
 * @method bool isTitle()
 * @method bool isMessage()
 * @method bool isSticker()
 *
 * @method $this setTitle()
 * @method $this setMessage()
 * @method $this setSticker()
 *
 * @method $this unsetTitle()
 * @method $this unsetMessage()
 * @method $this unsetSticker()
 *
 * @property string $title Optional. Title text of the business intro
 * @property string $message Optional. Message text of the business intro
 * @property Sticker $sticker Optional. Sticker of the business intro
 *
 * @see https://core.telegram.org/bots/api#businessintro
 */
class BusinessIntro extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'title' => 'string',
        'message' => 'string',
        'sticker' => 'Sticker',
    ];
}
