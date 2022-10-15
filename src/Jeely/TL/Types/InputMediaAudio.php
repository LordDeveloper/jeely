<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class InputMediaAudio
 * @description Represents an audio file to be treated as music to be sent.
 *
 * @method string getType() Type of the result, must be audio
 * @method string getMedia() File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files »
 * @method InputFile|string getThumb() Optional. Thumbnail of the file sent;
can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
 * @method string getCaption() Optional. Caption of the audio to be sent, 0-1024 characters after entities parsing
 * @method string getParseMode() Optional. Mode for parsing entities in the audio caption. See formatting options for more details.
 * @method MessageEntity[] getCaptionEntities() Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
 * @method int getDuration() Optional. Duration of the audio in seconds
 * @method string getPerformer() Optional. Performer of the audio
 * @method string getTitle() Optional. Title of the audio
 *
 * @method bool isType()
 * @method bool isMedia()
 * @method bool isThumb()
 * @method bool isCaption()
 * @method bool isParseMode()
 * @method bool isCaptionEntities()
 * @method bool isDuration()
 * @method bool isPerformer()
 * @method bool isTitle()
 *
 * @method $this setType()
 * @method $this setMedia()
 * @method $this setThumb()
 * @method $this setCaption()
 * @method $this setParseMode()
 * @method $this setCaptionEntities()
 * @method $this setDuration()
 * @method $this setPerformer()
 * @method $this setTitle()
 *
 * @method $this unsetType()
 * @method $this unsetMedia()
 * @method $this unsetThumb()
 * @method $this unsetCaption()
 * @method $this unsetParseMode()
 * @method $this unsetCaptionEntities()
 * @method $this unsetDuration()
 * @method $this unsetPerformer()
 * @method $this unsetTitle()
 *
 * @property string $type Type of the result, must be audio
 * @property string $media File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files »
 * @property InputFile|string $thumb Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
 * @property string $caption Optional. Caption of the audio to be sent, 0-1024 characters after entities parsing
 * @property string $parse_mode Optional. Mode for parsing entities in the audio caption. See formatting options for more details.
 * @property MessageEntity[] $caption_entities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
 * @property int $duration Optional. Duration of the audio in seconds
 * @property string $performer Optional. Performer of the audio
 * @property string $title Optional. Title of the audio
 *
 * @see https://core.telegram.org/bots/api#inputmediaaudio
 */
class InputMediaAudio extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'media' => 'string',
        'thumb' => 'InputFile',
        'caption' => 'string',
        'parse_mode' => 'string',
        'caption_entities' => 'MessageEntity[]',
        'duration' => 'int',
        'performer' => 'string',
        'title' => 'string',
    ];
}