<?php

namespace Jeely\Api\Types;

/**
 * @class InputProfilePhotoStatic
 * @description A static profile photo in the .JPG format.
 *
 * @method string getType() Type of the profile photo, must be static
 * @method string getPhoto() The static profile photo. Profile photos can't be reused and can only be uploaded as a new file, so you can pass “attach://<file_attach_name>” if the photo was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
 *
 * @method bool isType()
 * @method bool isPhoto()
 *
 * @method $this setType()
 * @method $this setPhoto()
 *
 * @method $this unsetType()
 * @method $this unsetPhoto()
 *
 * @property string $type Type of the profile photo, must be static
 * @property string $photo The static profile photo. Profile photos can't be reused and can only be uploaded as a new file, so you can pass “attach://<file_attach_name>” if the photo was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
 *
 * @see https://core.telegram.org/bots/api#inputprofilephotostatic
 */
class InputProfilePhotoStatic extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'photo' => 'string',
    ];
}
