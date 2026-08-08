<?php

namespace Jeely\Api\Types;

/**
 * @class InputPaidMediaLivePhoto
 * @description The paid media to send is a live photo.
 *
 * @method string getType() Type of the media, must be live_photo
 * @method string getMedia() Video of the live photo to send. Pass a file_id to send a file that exists on the Telegram servers (recommended) or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files ». Sending live photos by a URL is currently unsupported.
 * @method string getPhoto() The static photo to send. Pass a file_id to send a file that exists on the Telegram servers (recommended) or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files ». Sending live photos by a URL is currently unsupported.
 *
 * @method bool isType()
 * @method bool isMedia()
 * @method bool isPhoto()
 *
 * @method $this setType()
 * @method $this setMedia()
 * @method $this setPhoto()
 *
 * @method $this unsetType()
 * @method $this unsetMedia()
 * @method $this unsetPhoto()
 *
 * @property string $type Type of the media, must be live_photo
 * @property string $media Video of the live photo to send. Pass a file_id to send a file that exists on the Telegram servers (recommended) or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files ». Sending live photos by a URL is currently unsupported.
 * @property string $photo The static photo to send. Pass a file_id to send a file that exists on the Telegram servers (recommended) or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files ». Sending live photos by a URL is currently unsupported.
 *
 * @see https://core.telegram.org/bots/api#inputpaidmedialivephoto
 */
class InputPaidMediaLivePhoto extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'media' => 'string',
        'photo' => 'string',
    ];
}
