<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class InputMediaAnimation
 * @description Represents an animation file (GIF or H.264/MPEG-4 AVC video without sound) to be sent.
 *
 * @method string getType() Type of the result, must be animation
 * @method string getMedia() File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files »
 * @method InputFile|string getThumb() Optional. Thumbnail of the file sent;
can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
 * @method string getCaption() Optional. Caption of the animation to be sent, 0-1024 characters after entities parsing
 * @method string getParseMode() Optional. Mode for parsing entities in the animation caption. See formatting options for more details.
 * @method MessageEntity[] getCaptionEntities() Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
 * @method int getWidth() Optional. Animation width
 * @method int getHeight() Optional. Animation height
 * @method int getDuration() Optional. Animation duration in seconds
 *
 * @method bool isType()
 * @method bool isMedia()
 * @method bool isThumb()
 * @method bool isCaption()
 * @method bool isParseMode()
 * @method bool isCaptionEntities()
 * @method bool isWidth()
 * @method bool isHeight()
 * @method bool isDuration()
 *
 * @method $this setType()
 * @method $this setMedia()
 * @method $this setThumb()
 * @method $this setCaption()
 * @method $this setParseMode()
 * @method $this setCaptionEntities()
 * @method $this setWidth()
 * @method $this setHeight()
 * @method $this setDuration()
 *
 * @method $this unsetType()
 * @method $this unsetMedia()
 * @method $this unsetThumb()
 * @method $this unsetCaption()
 * @method $this unsetParseMode()
 * @method $this unsetCaptionEntities()
 * @method $this unsetWidth()
 * @method $this unsetHeight()
 * @method $this unsetDuration()
 *
 * @property string $type Type of the result, must be animation
 * @property string $media File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files »
 * @property InputFile|string $thumb Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
 * @property string $caption Optional. Caption of the animation to be sent, 0-1024 characters after entities parsing
 * @property string $parse_mode Optional. Mode for parsing entities in the animation caption. See formatting options for more details.
 * @property MessageEntity[] $caption_entities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
 * @property int $width Optional. Animation width
 * @property int $height Optional. Animation height
 * @property int $duration Optional. Animation duration in seconds
 *
 * @see https://core.telegram.org/bots/api#inputmediaanimation
 */
class InputMediaAnimation extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'media' => 'string',
        'thumb' => 'InputFile',
        'caption' => 'string',
        'parse_mode' => 'string',
        'caption_entities' => 'MessageEntity[]',
        'width' => 'int',
        'height' => 'int',
        'duration' => 'int',
    ];
}