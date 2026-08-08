<?php

namespace Jeely\Api\Types;

/**
 * @class InputPaidMediaVideo
 * @description The paid media to send is a video.
 *
 * @method string getType() Type of the media, must be video
 * @method string getMedia() File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files »
 * @method string getThumbnail() Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
 * @method string getCover() Optional. Cover for the video in the message. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files »
 * @method int getStartTimestamp() Optional. Start timestamp for the video in the message
 * @method int getWidth() Optional. Video width
 * @method int getHeight() Optional. Video height
 * @method int getDuration() Optional. Video duration in seconds
 * @method bool getSupportsStreaming() Optional. Pass True if the uploaded video is suitable for streaming
 *
 * @method bool isType()
 * @method bool isMedia()
 * @method bool isThumbnail()
 * @method bool isCover()
 * @method bool isStartTimestamp()
 * @method bool isWidth()
 * @method bool isHeight()
 * @method bool isDuration()
 * @method bool isSupportsStreaming()
 *
 * @method $this setType()
 * @method $this setMedia()
 * @method $this setThumbnail()
 * @method $this setCover()
 * @method $this setStartTimestamp()
 * @method $this setWidth()
 * @method $this setHeight()
 * @method $this setDuration()
 * @method $this setSupportsStreaming()
 *
 * @method $this unsetType()
 * @method $this unsetMedia()
 * @method $this unsetThumbnail()
 * @method $this unsetCover()
 * @method $this unsetStartTimestamp()
 * @method $this unsetWidth()
 * @method $this unsetHeight()
 * @method $this unsetDuration()
 * @method $this unsetSupportsStreaming()
 *
 * @property string $type Type of the media, must be video
 * @property string $media File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files »
 * @property string $thumbnail Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
 * @property string $cover Optional. Cover for the video in the message. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files »
 * @property int $start_timestamp Optional. Start timestamp for the video in the message
 * @property int $width Optional. Video width
 * @property int $height Optional. Video height
 * @property int $duration Optional. Video duration in seconds
 * @property bool $supports_streaming Optional. Pass True if the uploaded video is suitable for streaming
 *
 * @see https://core.telegram.org/bots/api#inputpaidmediavideo
 */
class InputPaidMediaVideo extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'media' => 'string',
        'thumbnail' => 'string',
        'cover' => 'string',
        'start_timestamp' => 'int',
        'width' => 'int',
        'height' => 'int',
        'duration' => 'int',
        'supports_streaming' => 'bool',
    ];
}
