<?php

namespace Jeely\Api\Types;

/**
 * @class InputPaidMediaPhoto
 * @description The paid media to send is a photo.
 *
 * @method string getType() Type of the media, must be photo
 * @method string getMedia() File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files »
 *
 * @method bool isType()
 * @method bool isMedia()
 *
 * @method $this setType()
 * @method $this setMedia()
 *
 * @method $this unsetType()
 * @method $this unsetMedia()
 *
 * @property string $type Type of the media, must be photo
 * @property string $media File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files »
 *
 * @see https://core.telegram.org/bots/api#inputpaidmediaphoto
 */
class InputPaidMediaPhoto extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'media' => 'string',
    ];
}
