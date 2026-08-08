<?php

namespace Jeely\Api\Types;

/**
 * @class InputProfilePhotoAnimated
 * @description An animated profile photo in the MPEG4 format.
 *
 * @method string getType() Type of the profile photo, must be animated
 * @method string getAnimation() The animated profile photo. Profile photos can't be reused and can only be uploaded as a new file, so you can pass “attach://<file_attach_name>” if the photo was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
 * @method float getMainFrameTimestamp() Optional. Timestamp in seconds of the frame that will be used as the static profile photo. Defaults to 0.0.
 *
 * @method bool isType()
 * @method bool isAnimation()
 * @method bool isMainFrameTimestamp()
 *
 * @method $this setType()
 * @method $this setAnimation()
 * @method $this setMainFrameTimestamp()
 *
 * @method $this unsetType()
 * @method $this unsetAnimation()
 * @method $this unsetMainFrameTimestamp()
 *
 * @property string $type Type of the profile photo, must be animated
 * @property string $animation The animated profile photo. Profile photos can't be reused and can only be uploaded as a new file, so you can pass “attach://<file_attach_name>” if the photo was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
 * @property float $main_frame_timestamp Optional. Timestamp in seconds of the frame that will be used as the static profile photo. Defaults to 0.0.
 *
 * @see https://core.telegram.org/bots/api#inputprofilephotoanimated
 */
class InputProfilePhotoAnimated extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'animation' => 'string',
        'main_frame_timestamp' => 'float',
    ];
}
