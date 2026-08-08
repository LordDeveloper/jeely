<?php

namespace Jeely\Api\Types;

/**
 * @class InputMediaPhoto
 * @description Represents a photo to be sent.
 *
 * @method string getType() Type of the media, must be photo
 * @method string getMedia() File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files »
 * @method string getCaption() Optional. Caption of the photo to be sent, 0-1024 characters after entities parsing
 * @method string getParseMode() Optional. Mode for parsing entities in the photo caption. See formatting options for more details.
 * @method MessageEntity[] getCaptionEntities() Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
 * @method bool getShowCaptionAboveMedia() Optional. Pass True if the caption must be shown above the message media
 * @method bool getHasSpoiler() Optional. Pass True if the photo needs to be covered with a spoiler animation
 *
 * @method bool isType()
 * @method bool isMedia()
 * @method bool isCaption()
 * @method bool isParseMode()
 * @method bool isCaptionEntities()
 * @method bool isShowCaptionAboveMedia()
 * @method bool isHasSpoiler()
 *
 * @method $this setType()
 * @method $this setMedia()
 * @method $this setCaption()
 * @method $this setParseMode()
 * @method $this setCaptionEntities()
 * @method $this setShowCaptionAboveMedia()
 * @method $this setHasSpoiler()
 *
 * @method $this unsetType()
 * @method $this unsetMedia()
 * @method $this unsetCaption()
 * @method $this unsetParseMode()
 * @method $this unsetCaptionEntities()
 * @method $this unsetShowCaptionAboveMedia()
 * @method $this unsetHasSpoiler()
 *
 * @property string $type Type of the media, must be photo
 * @property string $media File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files »
 * @property string $caption Optional. Caption of the photo to be sent, 0-1024 characters after entities parsing
 * @property string $parse_mode Optional. Mode for parsing entities in the photo caption. See formatting options for more details.
 * @property MessageEntity[] $caption_entities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
 * @property bool $show_caption_above_media Optional. Pass True if the caption must be shown above the message media
 * @property bool $has_spoiler Optional. Pass True if the photo needs to be covered with a spoiler animation
 *
 * @see https://core.telegram.org/bots/api#inputmediaphoto
 */
class InputMediaPhoto extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'media' => 'string',
        'caption' => 'string',
        'parse_mode' => 'string',
        'caption_entities' => 'MessageEntity[]',
        'show_caption_above_media' => 'bool',
        'has_spoiler' => 'bool',
    ];
}
