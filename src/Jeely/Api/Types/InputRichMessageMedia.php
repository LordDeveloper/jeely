<?php

namespace Jeely\Api\Types;

/**
 * @class InputRichMessageMedia
 * @description Describes a media element embedded in an outgoing rich message.
 *
 * @method string getId() Unique identifier of the media used in a tg://photo?id=, tg://video?id=, or tg://audio?id= link. 1-64 characters, only A-Z, a-z, 0-9, _ and - are allowed.
 * @method InputMediaAnimation|InputMediaAudio|InputMediaPhoto|InputMediaVideo|InputMediaVoiceNote getMedia() The media to be sent. Everything except the media itself and its properties is ignored.
 *
 * @method bool isId()
 * @method bool isMedia()
 *
 * @method $this setId()
 * @method $this setMedia()
 *
 * @method $this unsetId()
 * @method $this unsetMedia()
 *
 * @property string $id Unique identifier of the media used in a tg://photo?id=, tg://video?id=, or tg://audio?id= link. 1-64 characters, only A-Z, a-z, 0-9, _ and - are allowed.
 * @property InputMediaAnimation|InputMediaAudio|InputMediaPhoto|InputMediaVideo|InputMediaVoiceNote $media The media to be sent. Everything except the media itself and its properties is ignored.
 *
 * @see https://core.telegram.org/bots/api#inputrichmessagemedia
 */
class InputRichMessageMedia extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'id' => 'string',
        'media' => 'InputMediaAnimation',
    ];
}
