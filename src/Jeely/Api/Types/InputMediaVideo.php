<?php

namespace Jeely\Api\Types;

/**
 * @class InputMediaVideo
 * @description Represents a video to be sent.
 *
 * @method string getType() Type of the media, must be video
 * @method string getMedia() File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files »
 * @method string getThumbnail() Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
 * @method string getCover() Optional. Cover for the video in the message. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files »
 * @method int getStartTimestamp() Optional. Start timestamp for the video in the message
 * @method string getCaption() Optional. Caption of the video to be sent, 0-1024 characters after entities parsing
 * @method string getParseMode() Optional. Mode for parsing entities in the video caption. See formatting options for more details.
 * @method MessageEntity[] getCaptionEntities() Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
 * @method bool getShowCaptionAboveMedia() Optional. Pass True if the caption must be shown above the message media
 * @method int getWidth() Optional. Video width
 * @method int getHeight() Optional. Video height
 * @method int getDuration() Optional. Video duration in seconds
 * @method bool getSupportsStreaming() Optional. Pass True if the uploaded video is suitable for streaming
 * @method bool getHasSpoiler() Optional. Pass True if the video needs to be covered with a spoiler animation
 *
 * @method bool isType()
 * @method bool isMedia()
 * @method bool isThumbnail()
 * @method bool isCover()
 * @method bool isStartTimestamp()
 * @method bool isCaption()
 * @method bool isParseMode()
 * @method bool isCaptionEntities()
 * @method bool isShowCaptionAboveMedia()
 * @method bool isWidth()
 * @method bool isHeight()
 * @method bool isDuration()
 * @method bool isSupportsStreaming()
 * @method bool isHasSpoiler()
 *
 * @method $this setType()
 * @method $this setMedia()
 * @method $this setThumbnail()
 * @method $this setCover()
 * @method $this setStartTimestamp()
 * @method $this setCaption()
 * @method $this setParseMode()
 * @method $this setCaptionEntities()
 * @method $this setShowCaptionAboveMedia()
 * @method $this setWidth()
 * @method $this setHeight()
 * @method $this setDuration()
 * @method $this setSupportsStreaming()
 * @method $this setHasSpoiler()
 *
 * @method $this unsetType()
 * @method $this unsetMedia()
 * @method $this unsetThumbnail()
 * @method $this unsetCover()
 * @method $this unsetStartTimestamp()
 * @method $this unsetCaption()
 * @method $this unsetParseMode()
 * @method $this unsetCaptionEntities()
 * @method $this unsetShowCaptionAboveMedia()
 * @method $this unsetWidth()
 * @method $this unsetHeight()
 * @method $this unsetDuration()
 * @method $this unsetSupportsStreaming()
 * @method $this unsetHasSpoiler()
 *
 * @property string $type Type of the media, must be video
 * @property string $media File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files »
 * @property string $thumbnail Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
 * @property string $cover Optional. Cover for the video in the message. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files »
 * @property int $start_timestamp Optional. Start timestamp for the video in the message
 * @property string $caption Optional. Caption of the video to be sent, 0-1024 characters after entities parsing
 * @property string $parse_mode Optional. Mode for parsing entities in the video caption. See formatting options for more details.
 * @property MessageEntity[] $caption_entities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
 * @property bool $show_caption_above_media Optional. Pass True if the caption must be shown above the message media
 * @property int $width Optional. Video width
 * @property int $height Optional. Video height
 * @property int $duration Optional. Video duration in seconds
 * @property bool $supports_streaming Optional. Pass True if the uploaded video is suitable for streaming
 * @property bool $has_spoiler Optional. Pass True if the video needs to be covered with a spoiler animation
 *
 * @see https://core.telegram.org/bots/api#inputmediavideo
 */
class InputMediaVideo extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'media' => 'string',
        'thumbnail' => 'string',
        'cover' => 'string',
        'start_timestamp' => 'int',
        'caption' => 'string',
        'parse_mode' => 'string',
        'caption_entities' => 'MessageEntity[]',
        'show_caption_above_media' => 'bool',
        'width' => 'int',
        'height' => 'int',
        'duration' => 'int',
        'supports_streaming' => 'bool',
        'has_spoiler' => 'bool',
    ];
}
