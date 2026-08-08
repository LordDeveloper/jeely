<?php

namespace Jeely\Api\Types;

/**
 * @class InputMediaAnimation
 * @description Represents an animation file (GIF or H.264/MPEG-4 AVC video without sound) to be sent.
 *
 * @method string getType() Type of the media, must be animation
 * @method string getMedia() File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files »
 * @method string getThumbnail() Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
 * @method string getCaption() Optional. Caption of the animation to be sent, 0-1024 characters after entities parsing
 * @method string getParseMode() Optional. Mode for parsing entities in the animation caption. See formatting options for more details.
 * @method MessageEntity[] getCaptionEntities() Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
 * @method bool getShowCaptionAboveMedia() Optional. Pass True if the caption must be shown above the message media
 * @method int getWidth() Optional. Animation width
 * @method int getHeight() Optional. Animation height
 * @method int getDuration() Optional. Animation duration in seconds
 * @method bool getHasSpoiler() Optional. Pass True if the animation needs to be covered with a spoiler animation
 *
 * @method bool isType()
 * @method bool isMedia()
 * @method bool isThumbnail()
 * @method bool isCaption()
 * @method bool isParseMode()
 * @method bool isCaptionEntities()
 * @method bool isShowCaptionAboveMedia()
 * @method bool isWidth()
 * @method bool isHeight()
 * @method bool isDuration()
 * @method bool isHasSpoiler()
 *
 * @method $this setType()
 * @method $this setMedia()
 * @method $this setThumbnail()
 * @method $this setCaption()
 * @method $this setParseMode()
 * @method $this setCaptionEntities()
 * @method $this setShowCaptionAboveMedia()
 * @method $this setWidth()
 * @method $this setHeight()
 * @method $this setDuration()
 * @method $this setHasSpoiler()
 *
 * @method $this unsetType()
 * @method $this unsetMedia()
 * @method $this unsetThumbnail()
 * @method $this unsetCaption()
 * @method $this unsetParseMode()
 * @method $this unsetCaptionEntities()
 * @method $this unsetShowCaptionAboveMedia()
 * @method $this unsetWidth()
 * @method $this unsetHeight()
 * @method $this unsetDuration()
 * @method $this unsetHasSpoiler()
 *
 * @property string $type Type of the media, must be animation
 * @property string $media File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files »
 * @property string $thumbnail Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
 * @property string $caption Optional. Caption of the animation to be sent, 0-1024 characters after entities parsing
 * @property string $parse_mode Optional. Mode for parsing entities in the animation caption. See formatting options for more details.
 * @property MessageEntity[] $caption_entities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
 * @property bool $show_caption_above_media Optional. Pass True if the caption must be shown above the message media
 * @property int $width Optional. Animation width
 * @property int $height Optional. Animation height
 * @property int $duration Optional. Animation duration in seconds
 * @property bool $has_spoiler Optional. Pass True if the animation needs to be covered with a spoiler animation
 *
 * @see https://core.telegram.org/bots/api#inputmediaanimation
 */
class InputMediaAnimation extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'media' => 'string',
        'thumbnail' => 'string',
        'caption' => 'string',
        'parse_mode' => 'string',
        'caption_entities' => 'MessageEntity[]',
        'show_caption_above_media' => 'bool',
        'width' => 'int',
        'height' => 'int',
        'duration' => 'int',
        'has_spoiler' => 'bool',
    ];
}
